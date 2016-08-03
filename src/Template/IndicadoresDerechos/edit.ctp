<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $indicadoresDerecho->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresDerecho->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Indicadores Derechos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $indicadoresDerecho->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresDerecho->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Indicadores Derechos'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Derechos'), ['controller' => 'Derechos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho'), ['controller' => 'Derechos', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($indicadoresDerecho); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Indicadores Derecho']) ?></legend>
    <?php
    echo $this->Form->input('derecho_id', ['options' => $derechos]);
    echo $this->Form->input('indicador_id', ['options' => $indicadors]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
