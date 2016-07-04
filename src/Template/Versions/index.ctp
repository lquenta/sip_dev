<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Version'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Usuario'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List AdjuntosVersions'), ['controller' => 'AdjuntosVersions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Adjuntos Version'), ['controller' => ' AdjuntosVersions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th><?= $this->Paginator->sort('titulo'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th><?= $this->Paginator->sort('fecha'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($versions as $version): ?>
        <tr>
            <td><?= $this->Number->format($version->id) ?></td>
            <td>
                <?= $version->has('recomendacion') ? $this->Html->link($version->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $version->recomendacion->id]) : '' ?>
            </td>
            <td><?= h($version->titulo) ?></td>
            <td><?= h($version->descripcion) ?></td>
            <td><?= h($version->fecha) ?></td>
            <td>
                <?= $version->has('usuario') ? $this->Html->link($version->usuario->id, ['controller' => 'Users', 'action' => 'view', $version->usuario->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $version->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $version->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $version->id], ['confirm' => __('Are you sure you want to delete # {0}?', $version->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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