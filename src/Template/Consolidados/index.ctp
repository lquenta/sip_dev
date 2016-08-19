<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Consolidado'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => ' Accions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('accion_id'); ?></th>
            <th><?= $this->Paginator->sort('texto_consolidado'); ?></th>
            <th><?= $this->Paginator->sort('user_id'); ?></th>
            <th><?= $this->Paginator->sort('fecha_consolidado'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consolidados as $consolidado): ?>
        <tr>
            <td><?= $this->Number->format($consolidado->id) ?></td>
            <td>
                <?= $consolidado->has('accion') ? $this->Html->link($consolidado->accion->id, ['controller' => 'Accions', 'action' => 'view', $consolidado->accion->id]) : '' ?>
            </td>
            <td><?= h($consolidado->texto_consolidado) ?></td>
            <td>
                <?= $consolidado->has('user') ? $this->Html->link($consolidado->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $consolidado->user->id]) : '' ?>
            </td>
            <td><?= h($consolidado->fecha_consolidado) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $consolidado->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $consolidado->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $consolidado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolidado->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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