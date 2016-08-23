<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $indicadoresAccionSolicitud->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresAccionSolicitud->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Indicadores Accion Solicitud'), ['action' => 'index']) ?></li>
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
        ['action' => 'delete', $indicadoresAccionSolicitud->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $indicadoresAccionSolicitud->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Indicadores Accion Solicitud'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Indicadors'), ['controller' => 'Indicadors', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Indicador'), ['controller' => 'Indicadors', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($indicadoresAccionSolicitud); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Indicadores Accion Solicitud']) ?></legend>
    <?php
    echo $this->Form->input('indicador_id', ['options' => $indicadors]);
    echo $this->Form->input('accion_solicitud_id');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
