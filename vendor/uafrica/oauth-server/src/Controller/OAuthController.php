<?php
namespace OAuthServer\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Event\EventManager;
use League\OAuth2\Server\Exception\AccessDeniedException;
use League\OAuth2\Server\Exception\OAuthException;
use League\OAuth2\Server\Util\RedirectUri;

/**
 * Class OAuthController
 *
 * @property \OAuthServer\Controller\Component\OAuthComponent $OAuth
 */
class OAuthController extends AppController
{
    /**
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('OAuthServer.OAuth', (array)Configure::read('OAuth'));
        $this->loadComponent('RequestHandler');
        parent::initialize();
    }

    /**
     * @param \Cake\Event\Event $event Event object.
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        if ($this->Auth) {
            $this->Auth->allow(['oauth', 'authorize', 'accessToken']);
        }

        parent::beforeFilter($event);
    }

    /**
     * @return void
     */
    public function oauth()
    {
        if ($this->OAuth->checkAuthParams('authorization_code')) {
            if (!$this->Auth->user()) {
                $query = $this->request->query;
                $query['redir'] = 'oauth';

                $this->redirect(
                    [
                        'plugin' => false,
                        'controller' => 'Users',
                        'action' => 'login',
                        '?' => $query
                    ]
                );
            } else {
                $this->redirect(
                    [
                        'action' => 'authorize',
                        '?' => $this->request->query
                    ]
                );
            }
        }
    }

    /**
     * @return \Cake\Network\Response|void
     * @throws \League\OAuth2\Server\Exception\InvalidGrantException
     */
    public function authorize()
    {
        if (!$authParams = $this->OAuth->checkAuthParams('authorization_code')) {
            return;
        }

        if (!$this->Auth->user()) {
            $query = $this->request->query;
            $query['redir'] = 'oauth';

            return $this->redirect(
                [
                    'plugin' => false,
                    'controller' => 'Users',
                    'action' => 'login',
                    '?' => $query
                ]
            );
        }

        $event = new Event('OAuthServer.beforeAuthorize', $this);
        EventManager::instance()->dispatch($event);

        $serializeKeys = [];
        if (is_array($event->result)) {
            $this->set($event->result);
            $serializeKeys = array_keys($event->result);
        }

        if ($this->request->is('post') && $this->request->data['authorization'] === 'Approve') {
            $ownerModel = isset($this->request->data['owner_model']) ? $this->request->data['owner_model'] : 'Users';
            $ownerId = isset($this->request->data['owner_id']) ? $this->request->data['owner_id'] : $this->Auth->user('id');
            $redirectUri = $this->OAuth->Server->getGrantType('authorization_code')->newAuthorizeRequest($ownerModel, $ownerId, $authParams);
            $event = new Event('OAuthServer.afterAuthorize', $this);
            EventManager::instance()->dispatch($event);
            return $this->redirect($redirectUri);
        } elseif ($this->request->is('post')) {
            $event = new Event('OAuthServer.afterDeny', $this);
            EventManager::instance()->dispatch($event);

            $error = new AccessDeniedException();

            $redirectUri = RedirectUri::make($authParams['redirect_uri'], [
                'error' => $error->errorType,
                'message' => $error->getMessage()
            ]);

            return $this->redirect($redirectUri);
        }

        $this->set('authParams', $authParams);
        $this->set('user', $this->Auth->user());
        $this->set('_serialize', array_merge(['user', 'authParams'], $serializeKeys));
    }

    /**
     * @return void
     */
    public function accessToken()
    {
        try {
            $response = $this->OAuth->Server->issueAccessToken();
            $this->set($response);
            $this->set('_serialize', array_keys($response));
        } catch (OAuthException $e) {
            $this->response->statusCode($e->httpStatusCode);
            $headers = $e->getHttpHeaders();
            array_shift($headers);
            $this->response->header($headers);
            $this->set([
                'error' => $e->errorType,
                'message' => $e->getMessage()
            ]);
            $this->set('_serialize', ['error', 'message']);
        }
    }
}
