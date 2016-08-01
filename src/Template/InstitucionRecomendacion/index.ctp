<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => ' Institucions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('institucion_id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($institucionRecomendacion as $institucionRecomendacion): ?>
        <tr>
            <td><?= $this->Number->format($institucionRecomendacion->id) ?></td>
            <td>
                <?= $institucionRecomendacion->has('institucion') ? $this->Html->link($institucionRecomendacion->institucion->descripcion, ['controller' => 'Institucions', 'action' => 'view', $institucionRecomendacion->institucion->id]) : '' ?>
            </td>
            <td>
                <?= $institucionRecomendacion->has('recomendacion') ? $this->Html->link($institucionRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $institucionRecomendacion->recomendacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $institucionRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $institucionRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $institucionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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