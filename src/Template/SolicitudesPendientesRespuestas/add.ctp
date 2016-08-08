<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Solicitudes Pendientes Respuestas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Solicitudes Pendientes Respuestas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($solicitudesPendientesRespuesta); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Solicitudes Pendientes Respuesta']) ?></legend>
    <?php
    echo $this->Form->input('usuario_id', ['options' => $users]);
    echo $this->Form->input('estado_id', ['options' => $estados]);
    echo $this->Form->input('fecha_modificacion');
    echo $this->Form->input('solicitud_informacion_id', ['options' => $solicitudInformacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
