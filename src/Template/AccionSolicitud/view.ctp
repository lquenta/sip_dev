<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Accion Solicitud'), ['action' => 'edit', $accionSolicitud->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Accion Solicitud'), ['action' => 'delete', $accionSolicitud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accionSolicitud->id)]) ?> </li>
<li><?= $this->Html->link(__('List Accion Solicitud'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion Solicitud'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Accion Solicitud'), ['action' => 'edit', $accionSolicitud->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Accion Solicitud'), ['action' => 'delete', $accionSolicitud->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accionSolicitud->id)]) ?> </li>
<li><?= $this->Html->link(__('List Accion Solicitud'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion Solicitud'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($accionSolicitud->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Accion') ?></td>
            <td><?= $accionSolicitud->has('accion') ? $this->Html->link($accionSolicitud->accion->id, ['controller' => 'Accions', 'action' => 'view', $accionSolicitud->accion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Institucion') ?></td>
            <td><?= $accionSolicitud->has('institucion') ? $this->Html->link($accionSolicitud->institucion->descripcion, ['controller' => 'Institucions', 'action' => 'view', $accionSolicitud->institucion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Respuesta') ?></td>
            <td><?= h($accionSolicitud->respuesta) ?></td>
        </tr>
        <tr>
            <td><?= __('Link Adjunto') ?></td>
            <td><?= h($accionSolicitud->link_adjunto) ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $accionSolicitud->has('estado') ? $this->Html->link($accionSolicitud->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $accionSolicitud->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $accionSolicitud->has('user') ? $this->Html->link($accionSolicitud->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $accionSolicitud->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($accionSolicitud->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha') ?></td>
            <td><?= h($accionSolicitud->fecha) ?></td>
        </tr>
    </table>
</div>

