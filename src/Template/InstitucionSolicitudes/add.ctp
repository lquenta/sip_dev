<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Institucion Solicitudes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Institucion Solicitudes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($institucionSolicitude); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Institucion Solicitude']) ?></legend>
    <?php
    echo $this->Form->input('institucion_id', ['options' => $institucions]);
    echo $this->Form->input('solicitud_informacion_id', ['options' => $solicitudInformacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
