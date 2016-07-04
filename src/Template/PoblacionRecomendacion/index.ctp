<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Poblacions'), ['controller' => 'Poblacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Poblacion'), ['controller' => ' Poblacions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th><?= $this->Paginator->sort('poblacion_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($poblacionRecomendacion as $poblacionRecomendacion): ?>
        <tr>
            <td><?= $this->Number->format($poblacionRecomendacion->id) ?></td>
            <td>
                <?= $poblacionRecomendacion->has('recomendacion') ? $this->Html->link($poblacionRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $poblacionRecomendacion->recomendacion->id]) : '' ?>
            </td>
            <td>
                <?= $poblacionRecomendacion->has('poblacion') ? $this->Html->link($poblacionRecomendacion->poblacion->id, ['controller' => 'Poblacions', 'action' => 'view', $poblacionRecomendacion->poblacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $poblacionRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $poblacionRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $poblacionRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poblacionRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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