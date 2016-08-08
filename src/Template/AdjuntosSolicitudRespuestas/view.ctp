<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Adjuntos Solicitud Respuesta'), ['action' => 'edit', $adjuntosSolicitudRespuesta->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Solicitud Respuesta'), ['action' => 'delete', $adjuntosSolicitudRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosSolicitudRespuesta->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Adjuntos Solicitud Respuesta'), ['action' => 'edit', $adjuntosSolicitudRespuesta->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Adjuntos Solicitud Respuesta'), ['action' => 'delete', $adjuntosSolicitudRespuesta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosSolicitudRespuesta->id)]) ?> </li>
<li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($adjuntosSolicitudRespuesta->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Solicitud Respuesta') ?></td>
            <td><?= $adjuntosSolicitudRespuesta->has('solicitud_respuesta') ? $this->Html->link($adjuntosSolicitudRespuesta->solicitud_respuesta->id, ['controller' => 'SolicitudRespuestas', 'action' => 'view', $adjuntosSolicitudRespuesta->solicitud_respuesta->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($adjuntosSolicitudRespuesta->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Link') ?></td>
            <td><?= $this->Number->format($adjuntosSolicitudRespuesta->link) ?></td>
        </tr>
    </table>
</div>

