<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Recomendacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => ' Estados', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => ' Accions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List AdjuntosRecomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => ' AdjuntosRecomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Autorizacion'), ['controller' => ' Autorizacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List DerechoRecomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => ' DerechoRecomendacion', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List InstitucionRecomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => ' InstitucionRecomendacion', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List MecanismoRecomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => ' MecanismoRecomendacion', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Notificacion'), ['controller' => ' Notificacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List PoblacionRecomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => ' PoblacionRecomendacion', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List RecomendacionParametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => ' RecomendacionParametros', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Revision'), ['controller' => ' Revisions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => ' Versions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('titulo'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th><?= $this->Paginator->sort('fecha_creacion'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th><?= $this->Paginator->sort('estado_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($recomendacions as $recomendacion): ?>
        <tr>
            <td><?= $this->Number->format($recomendacion->id) ?></td>
            <td><?= h($recomendacion->titulo) ?></td>
            <td><?= h($recomendacion->descripcion) ?></td>
            <td><?= h($recomendacion->fecha_creacion) ?></td>
            <td><?= h($recomendacion->fecha_modificacion) ?></td>
            <td>
                <?= $recomendacion->has('user') ? $this->Html->link($recomendacion->user->id, ['controller' => 'Users', 'action' => 'view', $recomendacion->user->id]) : '' ?>
            </td>
            <td>
                <?= $recomendacion->has('estado') ? $this->Html->link($recomendacion->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $recomendacion->estado->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $recomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $recomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $recomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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