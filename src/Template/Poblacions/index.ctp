<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Poblacion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List PoblacionRecomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => ' PoblacionRecomendacion', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
<div class="col-xs-12">
    <?= $this->Html->link('Añadir', ['action' => 'add'], ['title' => __('Add'), 'class' => 'btn btn-default glyphicon glyphicon-plus']) ?>
</div>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('descripcion'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($poblacions as $poblacion): ?>
        <tr>
            <td><?= $this->Number->format($poblacion->id) ?></td>
            <td><?= h($poblacion->descripcion) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'edit', $poblacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
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