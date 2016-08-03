<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['controller' => 'Recomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion'), ['controller' => 'Recomendacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($estado); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Estado']) ?></legend>
    <?php
    echo $this->Form->input('descripcion');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
