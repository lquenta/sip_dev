<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Comite Recomendacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Comites'), ['controller' => 'Comites', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Comite'), ['controller' => ' Comites', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id'); ?></th>
            <th><?= $this->Paginator->sort('comite_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($comiteRecomendacions as $comiteRecomendacion): ?>
        <tr>
            <td><?= $this->Number->format($comiteRecomendacion->id) ?></td>
            <td>
                <?= $comiteRecomendacion->has('recomendacion') ? $this->Html->link($comiteRecomendacion->recomendacion->id, ['controller' => 'Recomendacions', 'action' => 'view', $comiteRecomendacion->recomendacion->id]) : '' ?>
            </td>
            <td>
                <?= $comiteRecomendacion->has('comite') ? $this->Html->link($comiteRecomendacion->comite->IdComite, ['controller' => 'Comites', 'action' => 'view', $comiteRecomendacion->comite->IdComite]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $comiteRecomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $comiteRecomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $comiteRecomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comiteRecomendacion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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