<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucionSolicitude->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucionSolicitude->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucion Solicitudes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $institucionSolicitude->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $institucionSolicitude->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Institucion Solicitudes'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($institucionSolicitude); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Institucion Solicitude']) ?></legend>
    <?php
    echo $this->Form->input('institucion_id', ['options' => $institucions]);
    echo $this->Form->input('solicitud_informacion_id', ['options' => $solicitudInformacions]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
