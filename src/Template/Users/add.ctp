    <?php
    $myTemplates = [
        'inputContainer' => '<div class="mdl-cell mdl-cell--10-col"><div class="mdl-textfield mdl-js-textfield">{{content}}</div></div>',
        'input' => '<input class="mdl-textfield__input" type="{{type}}" name="{{name}}"{{attrs}}/>',
        'label' => '<label class="mdl-textfield__label" {{attrs}}>{{text}}</label>',
        'select' => '<select class="mdl-textfield__input" name="{{name}}"{{attrs}} class="">{{content}}</select>',
    ];
    $this->Form->templates($myTemplates);
    ?>
    <legend><?= __('Add User') ?></legend>


        <?= $this->Form->create($user) ?>
    <div class="mdl-grid">
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('first_name');
            echo $this->Form->input('middle_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('mobile');
            echo $this->Form->input('email');
            echo $this->Form->input('address');
            echo $this->Form->input('blood_group');
            echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true]);
            echo $this->Form->input('office_id');
            echo $this->Form->input('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->input('designation_id', ['options' => $designations, 'empty' => true]);
            echo $this->Form->input('reporting_user_id', ['options' => $reportingUsers, 'empty' => true]);
            echo $this->Form->input('created_at', ['empty' => true]);
            echo $this->Form->input('updated_at', ['empty' => true]);
            echo $this->Form->input('status');
        ?>
        <?= $this->Form->button(__('Submit'),['class'=>'mdl-button mdl-js-button mdl-button--raised mdl-button--colored']) ?>
    </div>
        <?= $this->Form->end() ?>
