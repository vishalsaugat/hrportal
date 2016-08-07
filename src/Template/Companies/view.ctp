
<?php
$myTemplates = [
    'inputContainer' => '<div class="mdl-cell mdl-cell--10-col"><div class="mdl-textfield mdl-js-textfield  mdl-textfield--floating-label">{{content}}</div></div>',
    'input' => '<input class="mdl-textfield__input" type="{{type}}" name="{{name}}"{{attrs}}/>',
    'label' => '<label class="mdl-textfield__label" {{attrs}}>{{text}}</label>',
    'select' => '<select class="mdl-textfield__input" name="{{name}}"{{attrs}} class="">{{content}}</select>',
];
$this->Form->templates($myTemplates);
$myTemplates = [
    'nextActive' => '<li class="next"><a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" rel="next" href="{{url}}">{{text}}</a></li>',
    'nextDisabled' => '<li class="next"><a class="mdl-button mdl-js-button" disabled  href="" onclick="return false;">{{text}}</a></li>',
    'prevActive' => '<li class="prev"><a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" rel="prev" href="{{url}}">{{text}}</a></li>',
    'prevDisabled' => '<li class="prev"><a class="mdl-button mdl-js-button" href="" disabled onclick="return false;">{{text}}</a></li>',
    'number' => '<li cl><a href="{{url}}"><i class="vertical-align-middle material-icons">filter_{{text}}</i></a></li>',
    'current' => '<li class="active"><i class="vertical-align-middle material-icons">filter_{{text}}</i></li>',
    'counterPages' => '<div class="typo-styles__demo mdl-typography--title">Page {{page}} of {{pages}}</div>',
];
$this->Paginator->templates($myTemplates);
?>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout-scroll">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Company</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">
                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                    <?php echo $this->element('navbarmenu'); ?>
                </ul>
            </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <header class="demo-drawer-header">
            <img src="https://getmdl.io/templates/dashboard/images/user.jpg" class="demo-avatar">
            <div class="demo-avatar-dropdown">
                <span><?= $loggedinuser['email']?></span>
                <div class="mdl-layout-spacer"></div>
                <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
                    <i class="material-icons" role="presentation">arrow_drop_down</i>
                    <span class="visuallyhidden">Accounts</span>
                    <span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 92.5097px; height: 92.5097px; transform: translate(-50%, -50%) translate(6px, 27px);"></span></span></button>
                <div class="mdl-menu__container is-upgraded" style="right: 0px; top: 32px; width: 196.953px; height: 160px;"><div class="mdl-menu__outline mdl-menu--bottom-right" style="width: 196.953px; height: 160px;"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" for="accbtn" data-upgraded=",MaterialMenu,MaterialRipple" style="clip: rect(0px 196.953px 0px 196.953px);">
                        <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">hello@example.com<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                        <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple">info@example.com<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>
                        <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">add</i>Add another account...<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple" style="width: 407.436px; height: 407.436px; transform: translate(-50%, -50%) translate(115px, 24px);"></span></span></li>
                    </ul></div>
            </div>
        </header>
        <nav class="mdl-navigation">
            <?= $this->Html->link(__('Dashboard'), ['controller'=>'users','action' => 'dashboard'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__(' List Companies'), ['action' => 'index'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__(' Add Companies'), ['action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Attendances'), ['controller' => 'Attendances', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New Attendance'), ['controller' => 'Attendances', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Inventories'), ['controller' => 'Inventories', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New Inventory'), ['controller' => 'Inventories', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Notifications'), ['controller' => 'Notifications', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New Notification'), ['controller' => 'Notifications', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Policies'), ['controller' => 'Policies', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New Policy'), ['controller' => 'Policies', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                        <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'mdl-navigation__link']); ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
                    </nav>
    </div>
    <main class="mdl-layout__content">
        <?= $this->Flash->render() ?>
<div class="companies view large-9 medium-8 columns content">
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp direct">
        <tr>
            <td class="field-name"><?= __('Name') ?></td>
            <td><?= h($company->name) ?></td>
        </tr>
        <tr>
            <td class="field-name"><?= __('Unique Link') ?></td>
            <td><?= h($company->unique_link) ?></td>
        </tr>
        <tr>
            <td class="field-name"><?= __('City') ?></td>
            <td><?= $company->has('city') ? $this->Html->link($company->city->name, ['controller' => 'Cities', 'action' => 'view', $company->city->id]) : '' ?></td>
        </tr>
        <tr>
            <td class="field-name"><?= __('Image Link') ?></td>
            <td><?= h($company->image_link) ?></td>
        </tr>
        <tr>
            <td  class="field-name"><?= __('Id') ?></td>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <td  class="field-name"><?= __('Status') ?></td>
            <td><?= $this->Number->format($company->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($company->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($company->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Attendances') ?></h4>
        <?php if (!empty($company->attendances)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('In Time') ?></th>
                <th><?= __('Out Time') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Applied By User Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Company Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->attendances as $attendances): ?>
            <tr>
                <td><?= h($attendances->id) ?></td>
                <td><?= h($attendances->in_time) ?></td>
                <td><?= h($attendances->out_time) ?></td>
                <td><?= h($attendances->status) ?></td>
                <td><?= h($attendances->user_id) ?></td>
                <td><?= h($attendances->applied_by_user_id) ?></td>
                <td><?= h($attendances->created_at) ?></td>
                <td><?= h($attendances->updated_at) ?></td>
                <td><?= h($attendances->company_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Attendances', 'action' => 'view', $attendances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Attendances', 'action' => 'edit', $attendances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Attendances', 'action' => 'delete', $attendances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($company->events)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Image Link') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->description) ?></td>
                <td><?= h($events->status) ?></td>
                <td><?= h($events->user_id) ?></td>
                <td><?= h($events->company_id) ?></td>
                <td><?= h($events->image_link) ?></td>
                <td><?= h($events->created_at) ?></td>
                <td><?= h($events->updated_at) ?></td>
                <td><?= h($events->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Inventories') ?></h4>
        <?php if (!empty($company->inventories)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Intial Quanity') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->inventories as $inventories): ?>
            <tr>
                <td><?= h($inventories->id) ?></td>
                <td><?= h($inventories->name) ?></td>
                <td><?= h($inventories->quantity) ?></td>
                <td><?= h($inventories->intial_quanity) ?></td>
                <td><?= h($inventories->company_id) ?></td>
                <td><?= h($inventories->status) ?></td>
                <td><?= h($inventories->created_at) ?></td>
                <td><?= h($inventories->updated_at) ?></td>
                <td><?= h($inventories->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Inventories', 'action' => 'view', $inventories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Inventories', 'action' => 'edit', $inventories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inventories', 'action' => 'delete', $inventories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Notifications') ?></h4>
        <?php if (!empty($company->notifications)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Subject') ?></th>
                <th><?= __('Message') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Image Link') ?></th>
                <th><?= __('Company Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->notifications as $notifications): ?>
            <tr>
                <td><?= h($notifications->id) ?></td>
                <td><?= h($notifications->subject) ?></td>
                <td><?= h($notifications->message) ?></td>
                <td><?= h($notifications->user_id) ?></td>
                <td><?= h($notifications->created_at) ?></td>
                <td><?= h($notifications->updated_at) ?></td>
                <td><?= h($notifications->image_link) ?></td>
                <td><?= h($notifications->company_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notifications', 'action' => 'view', $notifications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notifications', 'action' => 'edit', $notifications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notifications', 'action' => 'delete', $notifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notifications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Offices') ?></h4>
        <?php if (!empty($company->offices)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Company Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->offices as $offices): ?>
            <tr>
                <td><?= h($offices->id) ?></td>
                <td><?= h($offices->name) ?></td>
                <td><?= h($offices->city_id) ?></td>
                <td><?= h($offices->status) ?></td>
                <td><?= h($offices->created_at) ?></td>
                <td><?= h($offices->updated_at) ?></td>
                <td><?= h($offices->company_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Offices', 'action' => 'view', $offices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Offices', 'action' => 'edit', $offices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Offices', 'action' => 'delete', $offices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Policies') ?></h4>
        <?php if (!empty($company->policies)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Details') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('Policy Type Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->policies as $policies): ?>
            <tr>
                <td><?= h($policies->id) ?></td>
                <td><?= h($policies->name) ?></td>
                <td><?= h($policies->details) ?></td>
                <td><?= h($policies->company_id) ?></td>
                <td><?= h($policies->policy_type_id) ?></td>
                <td><?= h($policies->user_id) ?></td>
                <td><?= h($policies->created_at) ?></td>
                <td><?= h($policies->updated_at) ?></td>
                <td><?= h($policies->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Policies', 'action' => 'view', $policies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Policies', 'action' => 'edit', $policies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Policies', 'action' => 'delete', $policies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $policies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($company->users)): ?>
        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Middle Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Blood Group') ?></th>
                <th><?= __('Company Id') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Office Id') ?></th>
                <th><?= __('Department Id') ?></th>
                <th><?= __('Designation Id') ?></th>
                <th><?= __('Reporting User Id') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->middle_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->mobile) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->address) ?></td>
                <td><?= h($users->blood_group) ?></td>
                <td><?= h($users->company_id) ?></td>
                <td><?= h($users->city_id) ?></td>
                <td><?= h($users->office_id) ?></td>
                <td><?= h($users->department_id) ?></td>
                <td><?= h($users->designation_id) ?></td>
                <td><?= h($users->reporting_user_id) ?></td>
                <td><?= h($users->created_at) ?></td>
                <td><?= h($users->updated_at) ?></td>
                <td><?= h($users->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
    </main>
</div>
