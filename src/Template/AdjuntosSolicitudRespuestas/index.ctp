<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List SolicitudRespuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => ' SolicitudRespuestas', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('solicitud_respuesta_id'); ?></th>
            <th><?= $this->Paginator->sort('link'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($adjuntosSolicitudRespuestas as $adjuntosSolicitudRespuesta): ?>
        <tr>
            <td><?= $this->Number->format($adjuntosSolicitudRespuesta->id) ?></td>
            <td>
                <?= $adjuntosSolicitudRespuesta->has('solicitud_respuesta') ? $this->Html->link($adjuntosSolicitudRespuesta->solicitud_respuesta->id, ['controller' => 'SolicitudRespuestas', 'action' => 'view', $adjuntosSolicitudRespuesta->solicitud_respuesta->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($adjuntosSolicitudRespuesta->link) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $adjuntosSolicitudRespuesta->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $adjuntosSolicitudRespuesta->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $adjuntosSolicitudRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosSolicitudRespuesta->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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