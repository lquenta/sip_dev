<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Ver Recomendacion');

$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Recomendacion'), ['action' => 'edit', $recomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Recomendacion'), ['action' => 'delete', $recomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Notificacion'), ['controller' => 'Notificacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacion Parametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => 'RecomendacionParametros', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Recomendacion'), ['action' => 'edit', $recomendacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Recomendacion'), ['action' => 'delete', $recomendacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Recomendacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Notificacion'), ['controller' => 'Notificacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Recomendacion Parametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => 'RecomendacionParametros', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($recomendacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($recomendacion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('Usuario Creador') ?></td>
            <td><?= $recomendacion->has('user') ? $this->Html->link($recomendacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $recomendacion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $recomendacion->has('estado') ? $this->Html->link($recomendacion->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $recomendacion->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Año') ?></td>
            <td><?= $this->Number->format($recomendacion->año) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Creacion') ?></td>
            <td><?= h($recomendacion->fecha_creacion) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Modificacion') ?></td>
            <td><?= h($recomendacion->fecha_modificacion) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Acciones relacionadas') ?></h3>
    </div>
    <?php if (!empty($recomendacion->accions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Descripcion') ?></th>
                <th><?= __('Fecha') ?></th>
                <th><?= __('Id Usuario') ?></th>
                <th><?= __('Id Recomendacion') ?></th>
                <th><?= __('Politica') ?></th>
                <th><?= __('Programa') ?></th>
                <th><?= __('Direccion') ?></th>
                <th><?= __('Reporte') ?></th>
                <th><?= __('Desafios') ?></th>
                <th class="actions"><?= __('Acceso Directo') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->accions as $accions): ?>
                <tr>
                    <td><?= h($accions->descripcion) ?></td>
                    <td><?= h($accions->fecha) ?></td>
                    <td><?= h($accions->usuario_id) ?></td>
                    <td><?= h($accions->recomendacion_id) ?></td>
                    <td><?= h($accions->politica) ?></td>
                    <td><?= h($accions->programa) ?></td>
                    <td><?= h($accions->direccion) ?></td>
                    <td><?= h($accions->reporte) ?></td>
                    <td><?= h($accions->desafios) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'Accions', 'action' => 'view', $accions->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>

                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">No hay acciones relacionadas</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Adjuntos relacionados a la recomendacion') ?></h3>
    </div>
    <?php if (!empty($recomendacion->adjuntos_recomendacions)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Recomendacion Id') ?></th>
                <th><?= __('Link') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($recomendacion->adjuntos_recomendacions as $adjuntosRecomendacions): ?>
                <tr>
                    <td><?= h($adjuntosRecomendacions->id) ?></td>
                    <td><?= h($adjuntosRecomendacions->recomendacion_id) ?></td>
                    <td><?= h($adjuntosRecomendacions->link) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no hay adjuntos relacionados</p>
    <?php endif; ?>
</div>

