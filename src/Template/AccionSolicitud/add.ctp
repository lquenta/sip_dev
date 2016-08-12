<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Accion Solicitud'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Accion Solicitud'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($accionSolicitud); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Accion Solicitud']) ?></legend>
    <?php
    echo $this->Form->input('accion_id', ['options' => $accions]);
    echo $this->Form->input('institucion_id', ['options' => $institucions]);
    echo $this->Form->input('fecha');
    echo $this->Form->input('respuesta');
    echo $this->Form->input('link_adjunto');
    echo $this->Form->input('estado_id', ['options' => $estados]);
    echo $this->Form->input('user_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
