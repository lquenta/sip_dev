<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => ' Derechos', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('derecho_id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($derechoRecomendacion as $derechoRecomendacion): ?>
        <tr>
            <td><?= $this->Number->format($derechoRecomendacion->id) ?></td>
            <td>
                <?= $derechoRecomendacion->has('derecho') ? $this->Html->link($derechoRecomendacion->derecho->descripcion, ['controller' => 'Derechos', 'action' => 'view', $derechoRecomendacion->derecho->id]) : '' ?>
            </td>
            <td>
                <?= $derechoRecomendacion->has('recomendacion') ? $this->Html->link($derechoRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $derechoRecomendacion->recomendacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $derechoRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $derechoRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $derechoRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $derechoRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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