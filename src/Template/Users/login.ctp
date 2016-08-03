<style>
    .mdl-layout {
        align-items: center;
        justify-content: center;
    }
    .mdl-layout__content {
        padding: 24px;
        flex: none;
    }
    .login-error{
        color: red;
    }
</style>
<?php
$myTemplates = [
    'inputContainer' => '<div class="mdl-textfield mdl-js-textfield">{{content}}</div>',
    'input' => '<input class="mdl-textfield__input" type="{{type}}" name="{{name}}"{{attrs}}/>',
    'label' => '<label class="mdl-textfield__label" {{attrs}}>{{text}}</label>',
];
$this->Form->templates($myTemplates);
?>
<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                <h2 class="mdl-card__title-text">Acme Co.</h2>
            </div>
            <?= $this->Form->create('User') ?>
            <div class="mdl-card__supporting-text">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col cell_con">
                        <?= $this->Form->input('username') ?>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col cell_con">
                        <?= $this->Form->input('password') ?>
                    </div>
<!--                    <div class="mdl-cell mdl-cell--12-col cell_con">-->
<!--                        <label class="mdl-checkbox mdl-js-checkbox" for="checkbox1">-->
<!---->
<!--                            <span class="mdl-checkbox__label">Remember Me</span>-->
<!--                        </label>-->
<!--                    </div>-->
                    <div class="mdl-cell mdl-cell--12-col cell_con login-error">
                        <?= $this->Flash->render() ?>
                    </div>
                </div>

            </div>
            <div class="mdl-card__actions mdl-card--border">
                <?= $this->Form->button('Login',['class'=>'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary btn mdl-button--full']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </main>
</div>