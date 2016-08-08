<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Edit Institucion Solicitude'), ['action' => 'edit', $institucionSolicitude->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion Solicitude'), ['action' => 'delete', $institucionSolicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionSolicitude->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucion Solicitudes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Solicitude'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Edit Institucion Solicitude'), ['action' => 'edit', $institucionSolicitude->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Institucion Solicitude'), ['action' => 'delete', $institucionSolicitude->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institucionSolicitude->id)]) ?> </li>
<li><?= $this->Html->link(__('List Institucion Solicitudes'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion Solicitude'), ['action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Institucions'), ['controller' => 'Institucions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Institucion'), ['controller' => 'Institucions', 'action' => 'add']) ?> </li>
<li><?= $this->Html->link(__('List Solicitud Informacions'), ['controller' => 'SolicitudInformacions', 'action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Solicitud Informacion'), ['controller' => 'SolicitudInformacions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($institucionSolicitude->id) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Institucion') ?></td>
            <td><?= $institucionSolicitude->has('institucion') ? $this->Html->link($institucionSolicitude->institucion->descripcion, ['controller' => 'Institucions', 'action' => 'view', $institucionSolicitude->institucion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Solicitud Informacion') ?></td>
            <td><?= $institucionSolicitude->has('solicitud_informacion') ? $this->Html->link($institucionSolicitude->solicitud_informacion->id, ['controller' => 'SolicitudInformacions', 'action' => 'view', $institucionSolicitude->solicitud_informacion->id]) : '' ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($institucionSolicitude->id) ?></td>
        </tr>
    </table>
</div>

