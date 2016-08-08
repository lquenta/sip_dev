<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Solicitud Respuesta'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SolicitudInformacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => ' SolicitudInformacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List AdjuntosSolicitudRespuestas'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['controller' => ' AdjuntosSolicitudRespuestas', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('solicitud_informacion_id'); ?></th>
            <th><?= $this->Paginator->sort('respuesta'); ?></th>
            <th><?= $this->Paginator->sort('fecha_respuesta'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudRespuestas as $solicitudRespuesta): ?>
        <tr>
            <td><?= $this->Number->format($solicitudRespuesta->id) ?></td>
            <td>
                <?= $solicitudRespuesta->has('solicitud_informacion') ? $this->Html->link($solicitudRespuesta->solicitud_informacion->id, ['controller' => 'SolicitudInformacions', 'action' => 'view', $solicitudRespuesta->solicitud_informacion->id]) : '' ?>
            </td>
            <td><?= h($solicitudRespuesta->respuesta) ?></td>
            <td><?= h($solicitudRespuesta->fecha_respuesta) ?></td>
            <td>
                <?= $solicitudRespuesta->has('user') ? $this->Html->link($solicitudRespuesta->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudRespuesta->user->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $solicitudRespuesta->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $solicitudRespuesta->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $solicitudRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudRespuesta->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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