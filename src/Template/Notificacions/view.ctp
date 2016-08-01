<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Notificacion'), ['action' => 'edit', $notificacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Notificacion'), ['action' => 'delete', $notificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Notificacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Notificacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Notificacion'), ['action' => 'edit', $notificacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Notificacion'), ['action' => 'delete', $notificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Notificacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Notificacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($notificacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Recomendacion') ?></td>
            <td><?= $notificacion->has('recomendacion') ? $this->Html->link($notificacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $notificacion->recomendacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $notificacion->has('user') ? $this->Html->link($notificacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $notificacion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Mensaje') ?></td>
            <td><?= h($notificacion->mensaje) ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= h($notificacion->estado) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($notificacion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha') ?></td>
            <td><?= h($notificacion->fecha) ?></td>
        </tr>
    </table>
</div>

