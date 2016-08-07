<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index($id=null)
    {
        $this->paginate = [
            'contain' => ['Cities', 'Offices', 'Departments', 'Designations','ReportingUsers','Companies'],
//            'limit' =>2
        ];
        $users = $this->paginate($this->Users);
        $getparams = $this->request->query;
        $this->set(compact('users','getparams'));
        $this->set('_serialize', ['users','getparams']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Cities', 'Offices', 'Departments', 'Designations', 'ReportingUsers', 'Leaves']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            pr($this->request->data);
            $user = $this->Users->patchEntity($user, $this->request->data);

            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Users->Cities->find('list', ['limit' => 200]);
        $offices = $this->Users->Offices->find('list', ['limit' => 200]);
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $designations = $this->Users->Designations->find('list', ['limit' => 200]);
        $companies = $this->Users->Companies->find('list', ['limit' => 200]);
        $reportingUsers = $this->Users->ReportingUsers->find('list', ['limit' => 200,'keyField'=>'id','valueField'=>'username']);
        $this->set(compact('user', 'cities', 'offices', 'departments', 'designations', 'reportingUsers','companies'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $cities = $this->Users->Cities->find('list', ['limit' => 200]);
        $offices = $this->Users->Offices->find('list', ['limit' => 200]);
        $departments = $this->Users->Departments->find('list', ['limit' => 200]);
        $designations = $this->Users->Designations->find('list', ['limit' => 200]);
        $companies = $this->Users->Companies->find('list', ['limit' => 200]);
        $reportingUsers = $this->Users->find('list', ['limit' => 200,'keyField'=>'id','valueField'=>'username']);
        $this->set(compact('user', 'cities', 'offices', 'departments', 'designations', 'reportingUsers','companies'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
        if ($this->Auth->user()){
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->viewBuilder()->layout('blank');
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function dashboard()
    {
        $user = $this->Users->get($this->Auth->user('id'), [
            'contain' => ['Cities', 'Offices', 'Departments', 'Designations', 'ReportingUsers', 'Leaves']
        ]);
        $this->set(compact('user'));
    }
}
