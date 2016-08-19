<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosConsolidado->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosConsolidado->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Consolidados'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $adjuntosConsolidado->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $adjuntosConsolidado->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Adjuntos Consolidados'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($adjuntosConsolidado); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Adjuntos Consolidado']) ?></legend>
    <?php
    echo $this->Form->input('consolidado_id', ['options' => $consolidados]);
    echo $this->Form->input('link');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
