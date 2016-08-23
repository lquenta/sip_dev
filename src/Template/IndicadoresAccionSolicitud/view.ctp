<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Indicadores Accion Solicitud'), ['action' => 'edit', $indicadoresAccionSolicitud->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Indicadores Accion Solicitud'), ['action' => 'delete', $indicadoresAccionSolicitud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresAccionSolicitud->id)]) ?> </li>
<li><?= $this->Html->link(__('List Indicadores Accion Solicitud'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicadores Accion Solicitud'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Indicadores Accion Solicitud'), ['action' => 'edit', $indicadoresAccionSolicitud->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Indicadores Accion Solicitud'), ['action' => 'delete', $indicadoresAccionSolicitud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresAccionSolicitud->id)]) ?> </li>
<li><?= $this->Html->link(__('List Indicadores Accion Solicitud'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicadores Accion Solicitud'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($indicadoresAccionSolicitud->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Indicador') ?></td>
            <td><?= $indicadoresAccionSolicitud->has('indicador') ? $this->Html->link($indicadoresAccionSolicitud->indicador->nombre, ['controller' => 'Indicadors', 'action' => 'view', $indicadoresAccionSolicitud->indicador->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($indicadoresAccionSolicitud->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Accion Solicitud Id') ?></td>
            <td><?= $this->Number->format($indicadoresAccionSolicitud->accion_solicitud_id) ?></td>
        </tr>
    </table>
</div>

