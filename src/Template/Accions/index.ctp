<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Segumientos iniciados');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Accion'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New User'), ['controller' => ' Users', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => ' Recomendacions', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('List AdjuntosAccions'), ['controller' => 'AdjuntosAccions', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('New Adjuntos Accion'), ['controller' => ' AdjuntosAccions', 'action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('codigo','Código'); ?></th>
            <th><?= $this->Paginator->sort('descripcion','Descripción'); ?></th>
            <th><?= $this->Paginator->sort('fecha'); ?></th>
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th><?= $this->Paginator->sort('recomendacion_id','Recomendación'); ?></th>
            <th class="actions"><?= __('Acceso Directo'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($accions as $accion): ?>
        <tr>
            <td><?= $this->Number->format($accion->id) ?></td>
            <td><?= h($accion->codigo) ?></td>
            <td><?= h($accion->descripcion) ?></td>
            <td><?= h($accion->fecha) ?></td>
            <td>
                <?= $accion->user->nombre_usuario ?>
            </td>
            <td>
                <?= $accion->has('recomendacion') ? $this->Html->link($this->Text->truncate($accion->recomendacion->descripcion,100,['ellipsis' => '...','exact' => false]), ['controller' => 'Recomendacions', 'action' => 'view', $accion->recomendacion->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $accion->id], ['title' => __('Ver'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>               
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previo')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('siguiente') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>