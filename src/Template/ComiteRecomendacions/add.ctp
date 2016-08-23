<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Comite Recomendacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Comites'), ['controller' => 'Comites', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Comite'), ['controller' => 'Comites', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Comite Recomendacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Comites'), ['controller' => 'Comites', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Comite'), ['controller' => 'Comites', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($comiteRecomendacion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Comite Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('recomendacion_id', ['options' => $recomendacions]);
    echo $this->Form->input('comite_id', ['options' => $comites]);
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
