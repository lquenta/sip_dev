<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Derecho'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => ' Indicadors', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List DerechoRecomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => ' DerechoRecomendacion', 'action' => 'add']); ?></li>
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
            <th class="actions"><?= __('Acciones'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($derechos as $derecho): ?>
        <tr>
            <td><?= $this->Number->format($derecho->id) ?></td>
            <td><?= h($derecho->descripcion) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'edit', $derecho->id], ['title' => __('Editar'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>

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