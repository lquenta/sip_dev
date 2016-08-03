<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Revision'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th><?= $this->Paginator->sort('resultado'); ?></th>
            <th><?= $this->Paginator->sort('fecha'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($revisions as $revision): ?>
        <tr>
            <td><?= $this->Number->format($revision->id) ?></td>
            <td>
                <?= $revision->has('recomendacion') ? $this->Html->link($revision->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $revision->recomendacion->id]) : '' ?>
            </td>
            <td>
                <?= $revision->has('user') ? $this->Html->link($revision->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $revision->user->id]) : '' ?>
            </td>
            <td><?= h($revision->resultado) ?></td>
            <td><?= h($revision->fecha) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $revision->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $revision->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $revision->id], ['confirm' => __('Are you sure you want to delete # {0}?', $revision->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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