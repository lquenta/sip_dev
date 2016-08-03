<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Lista de todas las recomendaciones');
?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('codigo','Código'); ?></th>
            <th><?= h('Mecanismos'); ?></th>
            <th><?= $this->Paginator->sort('descripcion','Descripción'); ?></th>
            <th><?= $this->Paginator->sort('año'); ?></th>
            <th><?= h('Grupo Poblacional'); ?></th>
            <th><?= h('Derechos'); ?></th>
            <th><?= h('Instituciones'); ?></th>
            <th><?= $this->Paginator->sort('fecha_modificacion','Fecha Modificación'); ?></th>
            
            <th><?= $this->Paginator->sort('usuario_id'); ?></th>
            <th><?= $this->Paginator->sort('estado_id'); ?></th>
            
            <th class="actions"><?= __('Accesos Directos'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($recomendacions as $recomendacion): ?>
            <?php 
            $poblaciones_item_recomendacion='';
            $mecanismos_item_recomendacion='';
            $institucion_item_recomendacion='';
            $derecho_item_recomendacion='';
            foreach ($recomendacion->poblacion_recomendacion as $item_poblacion) {
                $poblaciones_item_recomendacion.=' '.$item_poblacion->poblacion->descripcion;
            }
            foreach ($recomendacion->mecanismo_recomendacion as $item_mecanismo) {
                $mecanismos_item_recomendacion.=' '.$item_mecanismo->mecanismo->descripcion;
            }
            foreach ($recomendacion->institucion_recomendacion as $item_institucion) {
                $institucion_item_recomendacion.=' '.$item_institucion->institucion->descripcion;
            }
            foreach ($recomendacion->derecho_recomendacion as $item_derecho) {
                $derecho_item_recomendacion.=' '.$item_derecho->derecho->descripcion;
            }
            //debug($recomendacion->poblacion_recomendacion[0]->poblacion->descripcion);?>
        <tr>
            <td><?= h($recomendacion->codigo) ?></td>
            <td><?= $mecanismos_item_recomendacion; ?></td>
            <td><?= h($recomendacion->descripcion) ?></td>
            <td><?= $this->Number->format($recomendacion->año) ?></td>
            <td><?= $poblaciones_item_recomendacion; ?></td>
            <td><?= $derecho_item_recomendacion; ?></td>
            <td><?= $institucion_item_recomendacion; ?></td>
            <td><?= h($recomendacion->fecha_modificacion) ?></td>
            <td>
                <?= $recomendacion->has('user') ? $this->Html->link($recomendacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $recomendacion->user->id]) : '' ?>
            </td>
            <td>
                <?= $recomendacion->estado->descripcion; ?>
            </td>
            
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $recomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $recomendacion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
               <?= $this->Html->link('', ['controller'=>'Accions','action' => 'add', $recomendacion->id], ['title' => __('Añadir Seguimiento'), 'class' => 'btn btn-default glyphicon glyphicon-plus']) ?>
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