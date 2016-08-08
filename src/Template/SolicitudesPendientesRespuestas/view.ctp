<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Solicitudes Pendientes Respuesta'), ['action' => 'edit', $solicitudesPendientesRespuesta->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Solicitudes Pendientes Respuesta'), ['action' => 'delete', $solicitudesPendientesRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesPendientesRespuesta->id)]) ?> </li>
<li><?= $this->Html->link(__('List Solicitudes Pendientes Respuestas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitudes Pendientes Respuesta'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Solicitudes Pendientes Respuesta'), ['action' => 'edit', $solicitudesPendientesRespuesta->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Solicitudes Pendientes Respuesta'), ['action' => 'delete', $solicitudesPendientesRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesPendientesRespuesta->id)]) ?> </li>
<li><?= $this->Html->link(__('List Solicitudes Pendientes Respuestas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitudes Pendientes Respuesta'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($solicitudesPendientesRespuesta->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $solicitudesPendientesRespuesta->has('user') ? $this->Html->link($solicitudesPendientesRespuesta->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudesPendientesRespuesta->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $solicitudesPendientesRespuesta->has('estado') ? $this->Html->link($solicitudesPendientesRespuesta->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $solicitudesPendientesRespuesta->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Solicitud Informacion') ?></td>
            <td><?= $solicitudesPendientesRespuesta->has('solicitud_informacion') ? $this->Html->link($solicitudesPendientesRespuesta->solicitud_informacion->id, ['controller' => 'SolicitudInformacions', 'action' => 'view', $solicitudesPendientesRespuesta->solicitud_informacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($solicitudesPendientesRespuesta->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Modificacion') ?></td>
            <td><?= h($solicitudesPendientesRespuesta->fecha_modificacion) ?></td>
        </tr>
    </table>
</div>

