<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Adjuntos Consolidado'), ['action' => 'edit', $adjuntosConsolidado->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Consolidado'), ['action' => 'delete', $adjuntosConsolidado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosConsolidado->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Consolidados'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Consolidado'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Adjuntos Consolidado'), ['action' => 'edit', $adjuntosConsolidado->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Consolidado'), ['action' => 'delete', $adjuntosConsolidado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosConsolidado->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Consolidados'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Consolidado'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($adjuntosConsolidado->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Consolidado') ?></td>
            <td><?= $adjuntosConsolidado->has('consolidado') ? $this->Html->link($adjuntosConsolidado->consolidado->id, ['controller' => 'Consolidados', 'action' => 'view', $adjuntosConsolidado->consolidado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= h($adjuntosConsolidado->link) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($adjuntosConsolidado->id) ?></td>
        </tr>
    </table>
</div>

