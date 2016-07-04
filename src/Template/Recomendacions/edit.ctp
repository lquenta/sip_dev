<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $recomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Institucion Recomendacion'), ['controller' => 'InstitucionRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Notificacion'), ['controller' => 'Notificacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacion Parametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => 'RecomendacionParametros', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $recomendacion->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $recomendacion->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Recomendacions'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Accions'), ['controller' => 'Accions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Accion'), ['controller' => 'Accions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Adjuntos Recomendacions'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Adjuntos Recomendacion'), ['controller' => 'AdjuntosRecomendacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Autorizacions'), ['controller' => 'Autorizacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Autorizacion'), ['controller' => 'Autorizacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Derecho Recomendacion'), ['controller' => 'DerechoRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Mecanismo Recomendacion'), ['controller' => 'MecanismoRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Notificacions'), ['controller' => 'Notificacions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Notificacion'), ['controller' => 'Notificacions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Poblacion Recomendacion'), ['controller' => 'PoblacionRecomendacion', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Recomendacion Parametros'), ['controller' => 'RecomendacionParametros', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Recomendacion Parametro'), ['controller' => 'RecomendacionParametros', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Revisions'), ['controller' => 'Revisions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Revision'), ['controller' => 'Revisions', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('List Versions'), ['controller' => 'Versions', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Version'), ['controller' => 'Versions', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($recomendacion); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Recomendacion']) ?></legend>
    <?php
    echo $this->Form->input('titulo');
    echo $this->Form->input('descripcion');
    echo $this->Form->input('fecha_creacion');
    echo $this->Form->input('fecha_modificacion');
    echo $this->Form->input('usuario_id', ['options' => $users]);
    echo $this->Form->input('estado_id', ['options' => $estados]);
    echo $this->Form->input('año');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
