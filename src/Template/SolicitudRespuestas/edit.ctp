<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $solicitudRespuesta->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudRespuesta->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Solicitud Respuestas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $solicitudRespuesta->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudRespuesta->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Solicitud Respuestas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Adjuntos Solicitud Respuestas'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Adjuntos Solicitud Respuesta'), ['controller' => 'AdjuntosSolicitudRespuestas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($solicitudRespuesta); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Solicitud Respuesta']) ?></legend>
    <?php
    echo $this->Form->input('solicitud_informacion_id', ['options' => $solicitudInformacions]);
    echo $this->Form->input('respuesta');
    echo $this->Form->input('fecha_respuesta');
    echo $this->Form->input('usuario_id', ['options' => $users]);
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
