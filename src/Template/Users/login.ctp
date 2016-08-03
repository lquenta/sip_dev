<!-- File: src/Template/Users/login.ctp -->
<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/signin');
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->input('nombre_usuario') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login'),['class'=>'btn-primary']); ?>
<?= $this->Form->end() ?>
</div>