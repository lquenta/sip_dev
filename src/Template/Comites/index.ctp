<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Comite'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Mecanismos'), ['controller' => 'Mecanismos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Mecanismo'), ['controller' => ' Mecanismos', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>
<div class="col-xs-12">
    <?= $this->Html->link('Añadir', ['action' => 'add'], ['title' => __('Add'), 'class' => 'btn btn-default glyphicon glyphicon-plus']) ?>
</div>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('IdComite'); ?></th>
            <th><?= $this->Paginator->sort('Descripcion'); ?></th>
            <th><?= $this->Paginator->sort('mecanismo_id'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($comites as $comite): ?>
        <tr>
            <td><?= $this->Number->format($comite->IdComite) ?></td>
            <td><?= h($comite->Descripcion) ?></td>
            <td>
                <?= $comite->has('mecanismo') ? $this->Html->link($comite->mecanismo->descripcion, ['controller' => 'Mecanismos', 'action' => 'view', $comite->mecanismo->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'edit', $comite->IdComite], ['title' => __('Editar'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
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