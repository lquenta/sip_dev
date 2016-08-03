<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Adjuntos Versions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Adjuntos Versions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosVersion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Adjuntos Version']) ?></legend>
    <?php
    echo $this->Form->input('version_id', ['options' => $versions]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
