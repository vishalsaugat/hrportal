<div class="users view large-9 medium-8 columns content">
    <div class="typo-styles__demo mdl-typography--display-2"><?= h($user->first_name." ".$user->last_name) ?></div>
    <table class="mdl-data-table">
        <thead>
        </thead>
        <tbody class="mdl-data-table__cell--non-numeric">
            <tr>
                <td><?= __('Username') ?></td>
                <td><?= h($user->username) ?></td>
            </tr>
            <tr>
                <td><?= __('First Name') ?></td>
                <td><?= h($user->first_name) ?></td>
            </tr>
            <tr>
                <td><?= __('Middle Name') ?></td>
                <td><?= h($user->middle_name) ?></td>
            </tr>
            <tr>
                <td><?= __('Last Name') ?></td>
                <td><?= h($user->last_name) ?></td>
            </tr>
            <tr>
                <td><?= __('Email') ?></td>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <td><?= __('Address') ?></td>
                <td><?= h($user->address) ?></td>
            </tr>
            <tr>
                <td><?= __('Blood Group') ?></td>
                <td><?= h($user->blood_group) ?></td>
            </tr>
            <tr>
                <td><?= __('City') ?></td>
                <td><?= $user->has('city') ? $this->Html->link($user->city->name, ['controller' => 'Cities', 'action' => 'view', $user->city->id]) : '' ?></td>
            </tr>
            <tr>
                <td><?= __('Department') ?></td>
                <td><?= $user->has('department') ? $this->Html->link($user->department->name, ['controller' => 'Departments', 'action' => 'view', $user->department->id]) : '' ?></td>
            </tr>
            <tr>
                <td><?= __('Designation') ?></td>
                <td><?= $user->has('designation') ? $this->Html->link($user->designation->name, ['controller' => 'Designations', 'action' => 'view', $user->designation->id]) : '' ?></td>
            </tr>
            <tr>
                <td><?= __('Id') ?></td>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
            <tr>
                <td><?= __('Mobile') ?></td>
                <td><?= $user->mobile ?></td>
            </tr>
            <tr>
                <td><?= __('Office Id') ?></td>
                <td><?= $this->Number->format($user->office_id) ?></td>
            </tr>
            <tr>
                <td><?= __('Reporting User Id') ?></td>
                <td><?= $this->Number->format($user->reporting_user_id) ?></td>
            </tr>
            <tr>
                <td><?= __('Status') ?></td>
                <td><?= $this->Number->format($user->status) ?></td>
            </tr>
            <tr>
                <td><?= __('Created At') ?></td>
                <td><?= h($user->created_at) ?></td>
            </tr>
            <tr>
                <td><?= __('Updated At') ?></td>
                <td><?= h($user->updated_at) ?></td>
            </tr>
        </tbody>
    </table>
    <div class="related">
        <h4><?= __('Related Leaves') ?></h4>
        <?php if (!empty($user->leaves)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td><?= __('Id') ?></td>
                <td><?= __('User Id') ?></td>
                <td><?= __('From Date') ?></td>
                <td><?= __('To Date') ?></td>
                <td><?= __('Approval Status') ?></td>
                <td><?= __('Status') ?></td>
                <th class="actions"><?= __('Actions') ?></td>
            </tr>
            <?php foreach ($user->leaves as $leaves): ?>
            <tr>
                <td><?= h($leaves->id) ?></td>
                <td><?= h($leaves->user_id) ?></td>
                <td><?= h($leaves->from_date) ?></td>
                <td><?= h($leaves->to_date) ?></td>
                <td><?= h($leaves->approval_status) ?></td>
                <td><?= h($leaves->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Leaves', 'action' => 'view', $leaves->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Leaves', 'action' => 'edit', $leaves->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Leaves', 'action' => 'delete', $leaves->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaves->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
<style>
    td{
        width: 300px;
        text-align: left !important;
    }
</style>