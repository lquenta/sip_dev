<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $solicitudInformacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudInformacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Institucion Solicitudes'), ['controller' => 'InstitucionSolicitudes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Solicitude'), ['controller' => 'InstitucionSolicitudes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $solicitudInformacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudInformacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Institucion Solicitudes'), ['controller' => 'InstitucionSolicitudes', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Solicitude'), ['controller' => 'InstitucionSolicitudes', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Solicitud Respuestas'), ['controller' => 'SolicitudRespuestas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Respuesta'), ['controller' => 'SolicitudRespuestas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($solicitudInformacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Solicitud Informacion']) ?></legend>
    <?php
    echo $this->Form->input('codigo');
    echo $this->Form->input('descripcion');
    echo $this->Form->input('fecha_modificacion');
    echo $this->Form->input('usuario_id', ['options' => $users]);
    echo $this->Form->input('estado_id', ['options' => $estados]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
