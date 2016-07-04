<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Accion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Usuario'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List AdjuntosAccions'), ['controller' => 'AdjuntosAccions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Adjuntos Accion'), ['controller' => ' AdjuntosAccions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th><?= $this->Paginator->sort('fecha'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th><?= $this->Paginator->sort('politica'); ?></th>
            <th><?= $this->Paginator->sort('programa'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($accions as $accion): ?>
        <tr>
            <td><?= $this->Number->format($accion->id) ?></td>
            <td><?= h($accion->descripcion) ?></td>
            <td><?= h($accion->fecha) ?></td>
            <td>
                <?= $accion->has('usuario') ? $this->Html->link($accion->usuario->id, ['controller' => 'Users', 'action' => 'view', $accion->usuario->id]) : '' ?>
            </td>
            <td>
                <?= $accion->has('recomendacion') ? $this->Html->link($accion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $accion->recomendacion->id]) : '' ?>
            </td>
            <td><?= h($accion->politica) ?></td>
            <td><?= h($accion->programa) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $accion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $accion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $accion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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