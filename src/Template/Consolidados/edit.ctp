<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $consolidado->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $consolidado->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Consolidados'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $consolidado->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $consolidado->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Consolidados'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($consolidado); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Consolidado']) ?></legend>
    <?php
    echo $this->Form->input('accion_id', ['options' => $accions]);
    echo $this->Form->input('texto_consolidado');
    echo $this->Form->input('user_id', ['options' => $users]);
    echo $this->Form->input('fecha_consolidado');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
