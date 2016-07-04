<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $derecho->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $derecho->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Derechos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $derecho->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $derecho->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Derechos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($derecho); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Derecho']) ?></legend>
    <?php
    echo $this->Form->input('descripcion');
    echo $this->Form->input('indicador_id', ['options' => $indicadors]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
