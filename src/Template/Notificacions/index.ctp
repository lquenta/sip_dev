<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Notificacion'), ['action' => 'add']); ?></li>
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
            <th><?= $this->Paginator->sort('mensaje'); ?></th>
            <th><?= $this->Paginator->sort('fecha'); ?></th>
            <th><?= $this->Paginator->sort('estado'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($notificacions as $notificacion): ?>
        <tr>
            <td><?= $this->Number->format($notificacion->id) ?></td>
            <td>
                <?= $notificacion->has('recomendacion') ? $this->Html->link($notificacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $notificacion->recomendacion->id]) : '' ?>
            </td>
            <td>
                <?= $notificacion->has('user') ? $this->Html->link($notificacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $notificacion->user->id]) : '' ?>
            </td>
            <td><?= h($notificacion->mensaje) ?></td>
            <td><?= h($notificacion->fecha) ?></td>
            <td><?= h($notificacion->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $notificacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $notificacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $notificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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