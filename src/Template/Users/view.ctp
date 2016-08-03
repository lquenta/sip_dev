<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($user->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Nombre Usuario') ?></td>
            <td><?= h($user->nombre_usuario) ?></td>
        </tr>
        <tr>
            <td><?= __('Password') ?></td>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <td><?= __('Rol') ?></td>
            <td><?= $user->has('rol') ? $this->Html->link($user->rol->nombre, ['controller' => 'Rols', 'action' => 'view', $user->rol->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Creacion') ?></td>
            <td><?= h($user->fecha_creacion) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Modificacion') ?></td>
            <td><?= h($user->fecha_modificacion) ?></td>
        </tr>
    </table>
</div>

