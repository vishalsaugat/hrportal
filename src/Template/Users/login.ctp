<h1>Login</h1>
<?php
$myTemplates = [
    'inputContainer' => '<div class="mdl-textfield mdl-js-textfield">{{content}}</div>',
    'input' => '<input class="mdl-textfield__input" type="{{type}}" name="{{name}}"{{attrs}}/>',
    'label' => '<label class="mdl-textfield__label" {{attrs}}>{{text}}</label>',
];
$this->Form->templates($myTemplates);
?>

<?= $this->Form->create() ?>
<div class="mdl-grid"><?= $this->Form->input('username') ?></div>
<div class="mdl-grid"><?= $this->Form->input('password') ?></div>
<div class="mdl-grid"><?= $this->Form->button('Login',['class'=>'mdl-button mdl-js-button mdl-button--raised']) ?></div>
<?= $this->Form->end() ?>