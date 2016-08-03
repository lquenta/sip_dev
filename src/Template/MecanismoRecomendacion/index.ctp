<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Mecanismo'), ['controller' => ' Mecanismos', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('mecanismo_id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mecanismoRecomendacion as $mecanismoRecomendacion): ?>
        <tr>
            <td><?= $this->Number->format($mecanismoRecomendacion->id) ?></td>
            <td>
                <?= $mecanismoRecomendacion->has('mecanismo') ? $this->Html->link($mecanismoRecomendacion->mecanismo->descripcion, ['controller' => 'Mecanismos', 'action' => 'view', $mecanismoRecomendacion->mecanismo->id]) : '' ?>
            </td>
            <td>
                <?= $mecanismoRecomendacion->has('recomendacion') ? $this->Html->link($mecanismoRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $mecanismoRecomendacion->recomendacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $mecanismoRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $mecanismoRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $mecanismoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mecanismoRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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