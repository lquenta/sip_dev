<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($institucion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Institucion']) ?></legend>
    <?php
    echo $this->Form->input('descripcion');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
