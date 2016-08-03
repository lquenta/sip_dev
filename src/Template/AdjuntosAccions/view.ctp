<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Adjuntos Accion'), ['action' => 'edit', $adjuntosAccion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Accion'), ['action' => 'delete', $adjuntosAccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosAccion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Accions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Accion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Adjuntos Accion'), ['action' => 'edit', $adjuntosAccion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Accion'), ['action' => 'delete', $adjuntosAccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosAccion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Accions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Accion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($adjuntosAccion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Accion') ?></td>
            <td><?= $adjuntosAccion->has('accion') ? $this->Html->link($adjuntosAccion->accion->id, ['controller' => 'Accions', 'action' => 'view', $adjuntosAccion->accion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= h($adjuntosAccion->link) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($adjuntosAccion->id) ?></td>
        </tr>
    </table>
</div>

