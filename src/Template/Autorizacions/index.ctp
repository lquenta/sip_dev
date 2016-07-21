<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Autorizacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => ' Estados', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
<h1 class="page-header">Recomendaciones pendientes de Autorizacion</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('recomendacion_id','Id Recomendacion'); ?></th>
            <th><?= $this->Paginator->sort('estado_id','Estado'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion','Fecha de Modificacion'); ?></th>
            <th class="actions"><?= __('Añadir Accion'); ?></th>
            <th class="actions"><?= __('Aprobar/Rechazar'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autorizacions as $autorizacion): ?>
        <tr>
            <td>
                <?= $autorizacion->has('recomendacion') ? $this->Html->link($autorizacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $autorizacion->recomendacion->id]) : '' ?>
            </td>
            <td>
                <?= $autorizacion->has('estado') ? $this->Html->link($autorizacion->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $autorizacion->estado->id]) : '' ?>
            </td>
            <td><?= h($autorizacion->fecha_modificacion) ?></td>
            <td> <?= $this->Html->link('', ['controller'=>'Accions','action' => 'add', $autorizacion->recomendacion->id], ['title' => __('Aprobar/Rechazar'), 'class' => 'btn btn-default glyphicon glyphicon-plus']) ?></td>
            <td> <?= $this->Html->link('', ['action' => 'aprobarRecomendacion', $autorizacion->recomendacion->id], ['title' => __('Aprobar/Rechazar'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?></td>
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