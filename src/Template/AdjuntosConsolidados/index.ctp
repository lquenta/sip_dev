<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Adjuntos Consolidado'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Consolidado'), ['controller' => ' Consolidados', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('consolidado_id'); ?></th>
            <th><?= $this->Paginator->sort('link'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($adjuntosConsolidados as $adjuntosConsolidado): ?>
        <tr>
            <td><?= $this->Number->format($adjuntosConsolidado->id) ?></td>
            <td>
                <?= $adjuntosConsolidado->has('consolidado') ? $this->Html->link($adjuntosConsolidado->consolidado->id, ['controller' => 'Consolidados', 'action' => 'view', $adjuntosConsolidado->consolidado->id]) : '' ?>
            </td>
            <td><?= h($adjuntosConsolidado->link) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $adjuntosConsolidado->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $adjuntosConsolidado->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $adjuntosConsolidado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosConsolidado->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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