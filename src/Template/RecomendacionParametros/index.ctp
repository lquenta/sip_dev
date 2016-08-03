<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Recomendacion Parametro'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th><?= $this->Paginator->sort('prioridad'); ?></th>
            <th><?= $this->Paginator->sort('tiempo'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($recomendacionParametros as $recomendacionParametro): ?>
        <tr>
            <td><?= $this->Number->format($recomendacionParametro->id) ?></td>
            <td>
                <?= $recomendacionParametro->has('recomendacion') ? $this->Html->link($recomendacionParametro->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $recomendacionParametro->recomendacion->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($recomendacionParametro->prioridad) ?></td>
            <td><?= $this->Number->format($recomendacionParametro->tiempo) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $recomendacionParametro->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $recomendacionParametro->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $recomendacionParametro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacionParametro->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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