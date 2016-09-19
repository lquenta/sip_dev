<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard_restringido');
$this->assign('title', 'Responder Solicitud');
?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><a href="#">Codigo</a></th>
            <th><?= $this->Paginator->sort('accion_id','Accion'); ?></th>
            <th><?= $this->Paginator->sort('fecha'); ?></th>
            <th class="actions"><?= __('Responder'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($accionSolicitud as $accionSolicitud): ?>
        <tr>
            <td><?= $this->Number->format($accionSolicitud->id) ?></td>
            <td>
                <?= $accionSolicitud->has('accion') ? $accionSolicitud->accion->codigo : '' ?>
            </td>
            <td>
                <?= $accionSolicitud->has('accion') ? $this->Html->link($accionSolicitud->accion->descripcion, ['controller' => 'Accions', 'action' => 'view', $accionSolicitud->accion->id]) : '' ?>
            </td>
           
            <td><?= h($accionSolicitud->fecha) ?></td>
           
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'responderSolicitud', $accionSolicitud->id], ['title' => __('Responder'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previo')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('siguiente') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
<h2>Solicitudes de Informacion</h2>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('codigo'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th class="actions"><?= __('Responder'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudInformacions as $solicitudInformacion): ?>
        <tr>
            <td><?= $this->Number->format($solicitudInformacion->id) ?></td>
            <td><?= h($solicitudInformacion->solicitud_informacion->codigo) ?></td>
            <td><?= h($solicitudInformacion->solicitud_informacion->descripcion) ?></td>
            <td><?= h($solicitudInformacion->fecha_modificacion) ?></td>
            <td>
                <?= $solicitudInformacion->has('user') ? h($solicitudInformacion->user->nombre_usuario) : '' ?>
            </td>
            
            <td class="actions">
                <?= $this->Html->link('', ['controller'=>'SolicitudRespuestas', 'action' => 'add', $solicitudInformacion->solicitud_informacion_id], ['title' => __('Responder Solicitud'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>