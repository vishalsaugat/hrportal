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
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
 <header class="mdl-layout__header mdl-layout__header-dashboard mdl-color--blue-grey-900">
     <div class="mdl-layout-icon"><i class="material-icons">more_vert</i></div>
  <div class="mdl-layout__header-row">
   <!-- Title -->
<!--   <span class="mdl-layout-title">User</span>-->
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
 <div class="mdl-layout__drawer1"style="display: none">
     <header class="demo-drawer-header">
<!--         <img src="https://getmdl.io/templates/dashboard/images/user.jpg" class="demo-avatar">-->
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
      <?= $this->Html->link(__('Dashboard'), ['controller'=>'Users','action' => 'dashboard'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
   <?= $this->Html->link(__(' List Users'), ['action' => 'index'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
   <?= $this->Html->link(__(' Add Users'), ['action' => 'add'],['class'=>'mdl-navigation__link'],['class'=>'mdl-navigation__link']) ?>
      <?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
      <?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
      <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
      <?= $this->Html->link(__('List Designations'), ['controller' => 'Designations', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New Designation'), ['controller' => 'Designations', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
      <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
        <?= $this->Html->link(__('New Leave'), ['controller' => 'Leaves', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
     </nav>
 </div>
    <main class="mdl-layout__content">
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-grid--no-spacing mdl-grid">
                <div class="mdl-cell--hide-phone mdl-cell--1-col-modified mdl-cell--1-col-tablet">
                  <div class="mdl-tabs__tab-bar-vertical mdl-color--grey-300">
                      <div class="mdl-grid--no-spacing mdl-grid">
<!--                          <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                            <a href="#dashboard-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab is-active">
                                <i class="material-icons">dashboard</i><div class="mdl-typography--caption">Dashboard</div>
                            </a>
<!--                          </div>
                      </div>
                      <div class="mdl-grid--no-spacing mdl-grid">
                          <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                        <a href="#directory-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab"><i class="material-icons">find_in_page</i><div class="mdl-typography--caption">Directory</div></a>
<!--                              </div>
                      </div>
                      <div class="mdl-grid--no-spacing mdl-grid">
                          <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                        <a href="#reimbursment-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab"><i class="material-icons">assignment</i><div class="mdl-typography--caption">Reimbursment</div></a>
<!--                              </div>
                      </div>
                      <div class="mdl-grid--no-spacing mdl-grid">
                         <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                              <a href="#payslip-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab"><i class="material-icons">attach_money</i><div class="mdl-typography--caption">Pay Slips</div></a>
<!--                          </div>
                      </div>
                      <div class="mdl-grid--no-spacing mdl-grid">
                          <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                              <a href="#declaration-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab"><i class="material-icons">description</i><div class="mdl-typography--caption">Declaration</div></a>
<!--                          </div>
                      </div>
                      <div class="mdl-grid--no-spacing mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                              <a href="#hrpolicy-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab"><i class="material-icons">people</i><div class="mdl-typography--caption">HR Policy</div></a>
<!--                          </div>
                      </div>
                      <div class="mdl-grid--no-spacing mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">-->
                              <a href="#leaves-panel" class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-tabs__tab"><i class="material-icons">motorcycle</i><div class="mdl-typography--caption">Leaves</div></a>
<!--                          </div>-->
                      </div>
                  </div>
                </div>
                <div class="mdl-cell--11-col-modified mdl-cell--8-col-phone mdl-cell--7-col-tablet">
                    <div class="mdl-tabs__panel is-active" id="dashboard-panel">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--8-col-tablet">
                                <div class="mdl-card mdl-shadow--2dp calendar-card card-width-100">
                                    <div class="mdl-grid mdl-grid--no-spacing mdl-grid--calendar">
                                        <div class="mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-color--pink-300">
                                            <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--12-col">
                                                    <div class="mdl-typography--display-4 mdl-typography--text-center mdl-color-text--white mdl-typography--font-bold">4</div>
                                                    <div class="mdl-typography--text-center mdl-typography--title mdl-color-text--white">THURSDAY</div>
                                                </div>
                                            </div>
                                            <div class="mdl-grid">
                                                <div class="mdl-layout-spacer"></div>
                                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--round mdl-js-ripple-effect mdl-color--white mdl-color-text--pink-300 mdl-typography--font-bold">
                                                        Mark Attendance
                                                    </button>
                                                <div class="mdl-layout-spacer"></div>
                                            </div>
                                            <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--12-col">
                                                    <div class="mdl-color-text--white mdl-typography--font-bold">Current Event</div>
                                                    <ul class="mdl-color-text--white mdl-typography--font-italic">
                                                        <li>John Doe's Birthday</li>
                                                        <li>Kevin Nash's Birthday</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mdl-cell mdl-cell--8-col mdl-cell--5-col-tablet">
                                            <div class="mdl-grid">
                                                <div class="mdl-cell mdl-cell--12-col">
                                                    <div class="mdl-typography--title mdl-color-text--grey-400 mdl-typography--font-bold mdl-typography--text-right">2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--8-col-tablet">
                                <div class="mdl-grid--no-spacing mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet padding-bottom-16">
                                        <div class="mdl-card mdl-shadow--2dp mdl-color--light-blue-400 notifications-card card-width-100">
                                            <div class="mdl-card__title">
                                                <h2 class="mdl-card__title-text mdl-color-text--white">Notifications</h2>
                                            </div>
                                            <div class="mdl-card__media">
        <!--                                        <img src="photo.jpg" width="220" height="140" border="0" alt="" style="padding:20px;">-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-layout-spacer"></div>
                                    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet">
                                        <div class="mdl-card mdl-shadow--2dp teammembers-card card-width-100">
                                            <div class="mdl-card__title">
                                                <h2 class="mdl-card__title-text mdl-color-text--blue-grey-500">Team Members</h2>
                                            </div>
                                            <div class="mdl-card__media">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mdl-tabs__panel" id="directory-panel">
                        <ul>
                            <li>Tywin</li>
                            <li>Cersei</li>
                            <li>Jamie</li>
                            <li>Tyrion</li>
                        </ul>
                    </div>
                    <div class="mdl-tabs__panel" id="reimbursment-panel">
                        <ul>
                            <li>Reimmbursment</li>
                            <li>Daenerys</li>
                        </ul>
                    </div>

                    <div class="mdl-tabs__panel" id="payslip-panel">
                        <ul>
                            <li>Pay Slips</li>
                            <li>Cersei</li>
                            <li>Jamie</li>
                            <li>Tyrion</li>
                        </ul>
                    </div>
                    <div class="mdl-tabs__panel" id="declaration-panel">
                        <ul>
                            <li>IT Declaration</li>
                            <li>Cersei</li>
                            <li>Jamie</li>
                            <li>Tyrion</li>
                        </ul>
                    </div>
                    <div class="mdl-tabs__panel" id="hrpolicy-panel">
                        <ul>
                            <li>HR Policy</li>
                            <li>Cersei</li>
                            <li>Jamie</li>
                            <li>Tyrion</li>
                        </ul>
                    </div>
                    <div class="mdl-tabs__panel" id="leaves-panel">
                        <ul>
                            <li>HR Policy</li>
                            <li>Cersei</li>
                            <li>Jamie</li>
                            <li>Tyrion</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </main>