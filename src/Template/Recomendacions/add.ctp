<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
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
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($recomendacion,['type' => 'file']); ?>
<fieldset>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Accion</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                <?php
                    echo $this->Form->input('titulo');
                    echo $this->Form->input('descripcion');
                    echo $this->Form->input('año');
                    echo $this->Form->input('poblaciones', array('multiple' => 'checkbox', 'options' => $poblaciones));
                    echo $this->Form->input('derecho', array('multiple' => 'checkbox', 'options' => $derecho));
                    echo $this->Form->input('institucions', array('multiple' => 'checkbox', 'options' => $institucions));
                    echo $this->Form->input('mecanismos', array('multiple' => 'checkbox', 'options' => $mecanismos));
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse2">Archivos iniciales</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                <?php
                   echo $this->Form->input('adjuntos_recomendacion[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Añadir Archivos']);
                ?>
                </div>
            </div>
        </div>
    </div>

    
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
