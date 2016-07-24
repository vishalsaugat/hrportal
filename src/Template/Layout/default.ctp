<?php
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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'HR Portal';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('material.min.css') ?>
    <?= $this->Html->script('material.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<!--    <nav class="top-bar expanded" data-topbar role="navigation">-->
<!--        <ul class="title-area large-3 medium-4 columns">-->
<!--            <li class="name">-->
<!--                <h1><a href="">--><!--</a></h1>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <div class="top-bar-section">-->
<!--            <ul class="right">-->
<!--                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>-->
<!--                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
<!--    -->
<!--    <div class="container clearfix">-->
<!--        -->
<!--    </div>-->
<!--    <footer>-->
<!--    </footer>-->

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title"><?= $this->fetch('title') ?></span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation. We hide it in small screens. -->
            <nav class="mdl-navigation mdl-layout--large-screen-only">

            </nav>
        </div>
    </header>
    <?= $this->Flash->render() ?>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Actions</span>
        <nav class="mdl-navigation">
            <?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('List Designations'), ['controller' => 'Designations', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('New Designation'), ['controller' => 'Designations', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('List Leaves'), ['controller' => 'Leaves', 'action' => 'index'],['class'=>'mdl-navigation__link']) ?>
            <?= $this->Html->link(__('New Leave'), ['controller' => 'Leaves', 'action' => 'add'],['class'=>'mdl-navigation__link']) ?>

        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content"><?= $this->fetch('content') ?></div>
    </main>
</div>
</body>
</html>
