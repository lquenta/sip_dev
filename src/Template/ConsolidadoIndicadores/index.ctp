<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Consolidado Indicadore'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Consolidado'), ['controller' => ' Consolidados', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => ' Indicadors', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('consolidado_id'); ?></th>
            <th><?= $this->Paginator->sort('indicador_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($consolidadoIndicadores as $consolidadoIndicadore): ?>
        <tr>
            <td><?= $this->Number->format($consolidadoIndicadore->id) ?></td>
            <td>
                <?= $consolidadoIndicadore->has('consolidado') ? $this->Html->link($consolidadoIndicadore->consolidado->id, ['controller' => 'Consolidados', 'action' => 'view', $consolidadoIndicadore->consolidado->id]) : '' ?>
            </td>
            <td>
                <?= $consolidadoIndicadore->has('indicador') ? $this->Html->link($consolidadoIndicadore->indicador->nombre, ['controller' => 'Indicadors', 'action' => 'view', $consolidadoIndicadore->indicador->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $consolidadoIndicadore->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $consolidadoIndicadore->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $consolidadoIndicadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolidadoIndicadore->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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