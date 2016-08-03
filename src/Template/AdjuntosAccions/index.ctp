<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Adjuntos Accion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => ' Accions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('accion_id'); ?></th>
            <th><?= $this->Paginator->sort('link'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($adjuntosAccions as $adjuntosAccion): ?>
        <tr>
            <td><?= $this->Number->format($adjuntosAccion->id) ?></td>
            <td>
                <?= $adjuntosAccion->has('accion') ? $this->Html->link($adjuntosAccion->accion->id, ['controller' => 'Accions', 'action' => 'view', $adjuntosAccion->accion->id]) : '' ?>
            </td>
            <td><?= h($adjuntosAccion->link) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $adjuntosAccion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $adjuntosAccion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $adjuntosAccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosAccion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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