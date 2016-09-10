<?php
/* @var $this \Cake\View\View */
//$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Solicitudes pendientes de informacion');
?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('codigo'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($solicitudInformacions as $solicitudInformacion): ?>
        <tr>
            <td><?= $this->Number->format($solicitudInformacion->id) ?></td>
            <td><?= h($solicitudInformacion->codigo) ?></td>
            <td><?= h($solicitudInformacion->descripcion) ?></td>
            <td><?= h($solicitudInformacion->fecha_modificacion) ?></td>
            <td>
                <?= $solicitudInformacion->has('user') ? $this->Html->link($solicitudInformacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudInformacion->user->id]) : '' ?>
            </td>
            
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $solicitudInformacion->id], ['title' => __('Ver Detalle'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['controller'=>'SolicitudRespuestas', 'action' => 'add', $solicitudInformacion->id], ['title' => __('Responder Solicitud'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?>
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