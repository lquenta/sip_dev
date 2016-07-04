<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($institucion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Institucion']) ?></legend>
    <?php
    echo $this->Form->input('descripcion');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
