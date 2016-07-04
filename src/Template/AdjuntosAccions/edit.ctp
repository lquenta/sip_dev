<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosAccion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosAccion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Accions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosAccion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosAccion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Accions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosAccion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Adjuntos Accion']) ?></legend>
    <?php
    echo $this->Form->input('accion_id', ['options' => $accions]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
