<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Solicitudes Pendientes Respuesta'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => ' Estados', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SolicitudInformacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => ' SolicitudInformacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th><?= $this->Paginator->sort('estado_id'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion'); ?></th>
            <th><?= $this->Paginator->sort('solicitud_informacion_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudesPendientesRespuestas as $solicitudesPendientesRespuesta): ?>
        <tr>
            <td><?= $this->Number->format($solicitudesPendientesRespuesta->id) ?></td>
            <td>
                <?= $solicitudesPendientesRespuesta->has('user') ? $this->Html->link($solicitudesPendientesRespuesta->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudesPendientesRespuesta->user->id]) : '' ?>
            </td>
            <td>
                <?= $solicitudesPendientesRespuesta->has('estado') ? $this->Html->link($solicitudesPendientesRespuesta->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $solicitudesPendientesRespuesta->estado->id]) : '' ?>
            </td>
            <td><?= h($solicitudesPendientesRespuesta->fecha_modificacion) ?></td>
            <td>
                <?= $solicitudesPendientesRespuesta->has('solicitud_informacion') ? $this->Html->link($solicitudesPendientesRespuesta->solicitud_informacion->id, ['controller' => 'SolicitudInformacions', 'action' => 'view', $solicitudesPendientesRespuesta->solicitud_informacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $solicitudesPendientesRespuesta->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $solicitudesPendientesRespuesta->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $solicitudesPendientesRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesPendientesRespuesta->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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