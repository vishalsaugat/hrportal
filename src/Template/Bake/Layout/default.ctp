<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
%>
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
   <span class="mdl-layout-title"><%= $singularHumanName %></span>
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
   <?= $this->Html->link(__(' List <%= $pluralHumanName %>'), ['action' => 'index'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
   <?= $this->Html->link(__(' Add <%= $pluralHumanName %>'), ['action' => 'add'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
   <%
   $done = [];
   foreach ($associations as $type => $data):
   foreach ($data as $alias => $details):
   if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
   %>
   <?= $this->Html->link(__('List <%= $this->_pluralHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New <%= $this->_singularHumanName($alias) %>'), ['controller' => '<%= $details['controller'] %>', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
   <%
   $done[] = $details['controller'];
   endif;
   endforeach;
   endforeach;
   %>
  </nav>
 </div>
<%= $this->fetch('content');
