<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Consolidado'), ['action' => 'edit', $consolidado->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Consolidado'), ['action' => 'delete', $consolidado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolidado->id)]) ?> </li>
<li><?= $this->Html->link(__('List Consolidados'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Consolidado'), ['action' => 'edit', $consolidado->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Consolidado'), ['action' => 'delete', $consolidado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolidado->id)]) ?> </li>
<li><?= $this->Html->link(__('List Consolidados'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($consolidado->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Accion') ?></td>
            <td><?= $consolidado->has('accion') ? $this->Html->link($consolidado->accion->id, ['controller' => 'Accions', 'action' => 'view', $consolidado->accion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Texto Consolidado') ?></td>
            <td><?= h($consolidado->texto_consolidado) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $consolidado->has('user') ? $this->Html->link($consolidado->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $consolidado->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($consolidado->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Consolidado') ?></td>
            <td><?= h($consolidado->fecha_consolidado) ?></td>
        </tr>
    </table>
</div>

