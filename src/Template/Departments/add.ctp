<?php
$myTemplates = [
    'inputContainer' => '<div class="mdl-cell mdl-cell--10-col"><div class="mdl-textfield mdl-js-textfield">{{content}}</div></div>',
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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
 <header class="mdl-layout__header">
  <div class="mdl-layout__header-row">
   <!-- Title -->
   <span class="mdl-layout-title">Department</span>
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
 <?= $this->Flash->render() ?>
 <div class="mdl-layout__drawer">
  <span class="mdl-layout-title">Actions</span>
  <nav class="mdl-navigation">
   <?= $this->Html->link(__(' List Departments'), ['action' => 'index'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
   <?= $this->Html->link(__(' Add Departments'), ['action' => 'add'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
      <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
     </nav>
 </div>
<main class="mdl-layout__content">
<div class="departments form large-9 medium-8 columns content">
    <span class="mdl-layout-title"><?= __('Add Department') ?><span/>
    <?= $this->Form->create($department) ?>
    <div class="mdl-grid">
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('status');
        ?>
    </div>
    <?= $this->Form->button(__('Submit'),['class'=>'mdl-button mdl-js-button mdl-button--raised mdl-button--colored']) ?>
    <?= $this->Form->end() ?>
</div>
</main>