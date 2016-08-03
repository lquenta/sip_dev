<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Poblacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Poblacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($poblacion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Poblacion']) ?></legend>
    <?php
    echo $this->Form->input('descripcion');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
