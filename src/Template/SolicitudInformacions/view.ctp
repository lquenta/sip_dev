<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Solicitud Informacion'), ['action' => 'edit', $solicitudInformacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Solicitud Informacion'), ['action' => 'delete', $solicitudInformacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudInformacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucion Solicitudes'), ['controller' => 'InstitucionSolicitudes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Solicitude'), ['controller' => 'InstitucionSolicitudes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Solicitud Informacion'), ['action' => 'edit', $solicitudInformacion->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Solicitud Informacion'), ['action' => 'delete', $solicitudInformacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudInformacion->id)]) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucion Solicitudes'), ['controller' => 'InstitucionSolicitudes', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Solicitude'), ['controller' => 'InstitucionSolicitudes', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($solicitudInformacion->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Codigo') ?></td>
            <td><?= h($solicitudInformacion->codigo) ?></td>
        </tr>
        <tr>
            <td><?= __('Descripcion') ?></td>
            <td><?= h($solicitudInformacion->descripcion) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $solicitudInformacion->has('user') ? $this->Html->link($solicitudInformacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudInformacion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Estado') ?></td>
            <td><?= $solicitudInformacion->has('estado') ? $this->Html->link($solicitudInformacion->estado->descripcion, ['controller' => 'Estados', 'action' => 'view', $solicitudInformacion->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($solicitudInformacion->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Modificacion') ?></td>
            <td><?= h($solicitudInformacion->fecha_modificacion) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related InstitucionSolicitudes') ?></h3>
    </div>
    <?php if (!empty($solicitudInformacion->institucion_solicitudes)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Institucion Id') ?></th>
                <th><?= __('Solicitud Informacion Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($solicitudInformacion->institucion_solicitudes as $institucionSolicitudes): ?>
                <tr>
                    <td><?= h($institucionSolicitudes->id) ?></td>
                    <td><?= h($institucionSolicitudes->institucion_id) ?></td>
                    <td><?= h($institucionSolicitudes->solicitud_informacion_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'InstitucionSolicitudes', 'action' => 'view', $institucionSolicitudes->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'InstitucionSolicitudes', 'action' => 'edit', $institucionSolicitudes->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'InstitucionSolicitudes', 'action' => 'delete', $institucionSolicitudes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionSolicitudes->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related InstitucionSolicitudes</p>
    <?php endif; ?>
</div>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related SolicitudRespuestas') ?></h3>
    </div>
    <?php if (!empty($solicitudInformacion->solicitud_respuestas)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Solicitud Informacion Id') ?></th>
                <th><?= __('Respuesta') ?></th>
                <th><?= __('Fecha Respuesta') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($solicitudInformacion->solicitud_respuestas as $solicitudRespuestas): ?>
                <tr>
                    <td><?= h($solicitudRespuestas->id) ?></td>
                    <td><?= h($solicitudRespuestas->solicitud_informacion_id) ?></td>
                    <td><?= h($solicitudRespuestas->respuesta) ?></td>
                    <td><?= h($solicitudRespuestas->fecha_respuesta) ?></td>
                    <td><?= h($solicitudRespuestas->usuario_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'SolicitudRespuestas', 'action' => 'view', $solicitudRespuestas->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'SolicitudRespuestas', 'action' => 'edit', $solicitudRespuestas->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'SolicitudRespuestas', 'action' => 'delete', $solicitudRespuestas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudRespuestas->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related SolicitudRespuestas</p>
    <?php endif; ?>
</div>
