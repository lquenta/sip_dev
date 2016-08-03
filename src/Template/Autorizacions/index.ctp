<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Seguimientos pendientes de autorizacion');
?>
  

<h1 class="page-header">Acciones pendientes de Autorizacion</h1>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('codigo','Código'); ?></th>
            <th><?= $this->Paginator->sort('accion_id','Acción'); ?></th>
            <th><?= $this->Paginator->sort('estado_id','Estado'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion','Fecha de Modificación'); ?></th>
            <th class="actions"><?= __('Aprobar/Rechazar'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autorizacions as $autorizacion): ?>
        <tr>
            <td>
                <?= $autorizacion->has('accion') ? $this->Html->link($autorizacion->accion->codigo, ['controller' => 'Accions', 'action' => 'view', $autorizacion->accion->id]) : '' ?>
            </td>
            <td>
                <?= $autorizacion->has('accion') ? $this->Html->link($autorizacion->accion->descripcion, ['controller' => 'Accions', 'action' => 'view', $autorizacion->accion->id]) : '' ?>
            </td>
            <td>
                <?= $autorizacion->estado->descripcion?>           </td>
            <td><?= h($autorizacion->fecha_modificacion) ?></td>
            <td> <?= $this->Html->link('', ['action' => 'aprobarAccion', $autorizacion->accion->id], ['title' => __('Aprobar/Rechazar'), 'class' => 'btn btn-default glyphicon glyphicon-ok']) ?></td>
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