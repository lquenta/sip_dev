<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $consolidadoIndicadore->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $consolidadoIndicadore->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Consolidado Indicadores'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
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
        ['action' => 'delete', $consolidadoIndicadore->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $consolidadoIndicadore->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Consolidado Indicadores'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Consolidados'), ['controller' => 'Consolidados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Consolidado'), ['controller' => 'Consolidados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($consolidadoIndicadore); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Consolidado Indicadore']) ?></legend>
    <?php
    echo $this->Form->input('consolidado_id', ['options' => $consolidados]);
    echo $this->Form->input('indicador_id', ['options' => $indicadors]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
