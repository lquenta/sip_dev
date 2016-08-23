<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Consolidado Indicadore'), ['action' => 'edit', $consolidadoIndicadore->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Consolidado Indicadore'), ['action' => 'delete', $consolidadoIndicadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolidadoIndicadore->id)]) ?> </li>
<li><?= $this->Html->link(__('List Consolidado Indicadores'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado Indicadore'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Consolidado Indicadore'), ['action' => 'edit', $consolidadoIndicadore->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Consolidado Indicadore'), ['action' => 'delete', $consolidadoIndicadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolidadoIndicadore->id)]) ?> </li>
<li><?= $this->Html->link(__('List Consolidado Indicadores'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado Indicadore'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($consolidadoIndicadore->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Consolidado') ?></td>
            <td><?= $consolidadoIndicadore->has('consolidado') ? $this->Html->link($consolidadoIndicadore->consolidado->id, ['controller' => 'Consolidados', 'action' => 'view', $consolidadoIndicadore->consolidado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Indicador') ?></td>
            <td><?= $consolidadoIndicadore->has('indicador') ? $this->Html->link($consolidadoIndicadore->indicador->nombre, ['controller' => 'Indicadors', 'action' => 'view', $consolidadoIndicadore->indicador->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($consolidadoIndicadore->id) ?></td>
        </tr>
    </table>
</div>

