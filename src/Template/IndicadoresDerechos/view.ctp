<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Indicadores Derecho'), ['action' => 'edit', $indicadoresDerecho->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Indicadores Derecho'), ['action' => 'delete', $indicadoresDerecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresDerecho->id)]) ?> </li>
<li><?= $this->Html->link(__('List Indicadores Derechos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicadores Derecho'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Indicadores Derecho'), ['action' => 'edit', $indicadoresDerecho->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Indicadores Derecho'), ['action' => 'delete', $indicadoresDerecho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresDerecho->id)]) ?> </li>
<li><?= $this->Html->link(__('List Indicadores Derechos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicadores Derecho'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($indicadoresDerecho->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Derecho') ?></td>
            <td><?= $indicadoresDerecho->has('derecho') ? $this->Html->link($indicadoresDerecho->derecho->descripcion, ['controller' => 'Derechos', 'action' => 'view', $indicadoresDerecho->derecho->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Indicador') ?></td>
            <td><?= $indicadoresDerecho->has('indicador') ? $this->Html->link($indicadoresDerecho->indicador->nombre, ['controller' => 'Indicadors', 'action' => 'view', $indicadoresDerecho->indicador->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($indicadoresDerecho->id) ?></td>
        </tr>
    </table>
</div>

