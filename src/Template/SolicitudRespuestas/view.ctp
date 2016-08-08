<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Solicitud Respuesta'), ['action' => 'edit', $solicitudRespuesta->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Solicitud Respuesta'), ['action' => 'delete', $solicitudRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudRespuesta->id)]) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Respuestas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Respuesta'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Solicitud Respuesta'), ['action' => 'edit', $solicitudRespuesta->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Solicitud Respuesta'), ['action' => 'delete', $solicitudRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudRespuesta->id)]) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Respuestas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Respuesta'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($solicitudRespuesta->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Solicitud Informacion') ?></td>
            <td><?= $solicitudRespuesta->has('solicitud_informacion') ? $this->Html->link($solicitudRespuesta->solicitud_informacion->id, ['controller' => 'SolicitudInformacions', 'action' => 'view', $solicitudRespuesta->solicitud_informacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Respuesta') ?></td>
            <td><?= h($solicitudRespuesta->respuesta) ?></td>
        </tr>
        <tr>
            <td><?= __('User') ?></td>
            <td><?= $solicitudRespuesta->has('user') ? $this->Html->link($solicitudRespuesta->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $solicitudRespuesta->user->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($solicitudRespuesta->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Fecha Respuesta') ?></td>
            <td><?= h($solicitudRespuesta->fecha_respuesta) ?></td>
        </tr>
    </table>
</div>

<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Related AdjuntosSolicitudRespuestas') ?></h3>
    </div>
    <?php if (!empty($solicitudRespuesta->adjuntos_solicitud_respuestas)): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Solicitud Respuesta Id') ?></th>
                <th><?= __('Link') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($solicitudRespuesta->adjuntos_solicitud_respuestas as $adjuntosSolicitudRespuestas): ?>
                <tr>
                    <td><?= h($adjuntosSolicitudRespuestas->id) ?></td>
                    <td><?= h($adjuntosSolicitudRespuestas->solicitud_respuesta_id) ?></td>
                    <td><?= h($adjuntosSolicitudRespuestas->link) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('', ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'view', $adjuntosSolicitudRespuestas->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                        <?= $this->Html->link('', ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'edit', $adjuntosSolicitudRespuestas->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                        <?= $this->Form->postLink('', ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'delete', $adjuntosSolicitudRespuestas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosSolicitudRespuestas->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="panel-body">no related AdjuntosSolicitudRespuestas</p>
    <?php endif; ?>
</div>
