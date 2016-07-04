<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosVersion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosVersion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Versions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosVersion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosVersion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Versions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosVersion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Adjuntos Version']) ?></legend>
    <?php
    echo $this->Form->input('version_id', ['options' => $versions]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
