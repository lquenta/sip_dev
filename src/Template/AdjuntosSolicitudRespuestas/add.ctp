<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosSolicitudRespuesta); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Adjuntos Solicitud Respuesta']) ?></legend>
    <?php
    echo $this->Form->input('solicitud_respuesta_id', ['options' => $solicitudRespuestas]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
