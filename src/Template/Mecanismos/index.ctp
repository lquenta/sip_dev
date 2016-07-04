<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Mecanismo'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List MecanismoRecomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => ' MecanismoRecomendacion', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mecanismos as $mecanismo): ?>
        <tr>
            <td><?= $this->Number->format($mecanismo->id) ?></td>
            <td><?= h($mecanismo->descripcion) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $mecanismo->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $mecanismo->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $mecanismo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismo->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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