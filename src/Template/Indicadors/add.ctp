<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Indicadors'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Indicadors'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($indicador); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Indicador']) ?></legend>
    <?php
    echo $this->Form->input('nombre');
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
