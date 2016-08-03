<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Adjuntos Accions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Adjuntos Accions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosAccion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Adjuntos Accion']) ?></legend>
    <?php
    echo $this->Form->input('accion_id', ['options' => $accions]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
