<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Aprobacion de Accion de Seguimiento ');
?>
<?= $this->Form->create($aprobarAccion,['type' => 'file']); ?>
<fieldset>
    <h1 class="page-header"><?= __('Aprobacion Accion de Seguimiento - Ejecutores ') ?></h1>
   
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Datos Ficha</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                     <div class="form-group">
                        <label for="inputTitulo">Codigo</label>
                        <input type="text" class="form-control" id="inputCodigo" placeholder="" readonly="readonly" value="<?= h($accion->codigo) ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputDetalle">Detalle de la recomendacion</label>
                        <input type="text" class="form-control" id="inputDetalle" placeholder="" readonly="readonly" value="<?= h($accion->recomendacion->descripcion) ?>">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"><label for="inputAño">Año</label>
                                <input type="text" class="form-control" id="inputAño" placeholder="" readonly="readonly" value="<?= h($accion->recomendacion->año) ?>">
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('derechos', array('multiple' => 'checkbox', 'options' => $all_derechos,'value'=>array_keys($derechos),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                            <div class="col-md-12">
                                <?php echo $this->Form->input('poblaciones', array('multiple' => 'checkbox', 'options' => $all_poblaciones,'value'=>array_keys($poblaciones),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('instituciones', array('multiple' => 'checkbox', 'options' => $all_instituciones,'value'=>array_keys($instituciones),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('mecanismos', array('multiple' => 'checkbox', 'options' => $all_mecanismos,'value'=>array_keys($mecanismos),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse2">Archivos Iniciales</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                     <div class="form-group">
                        <label for="inputDetalle">Archivos Iniciales</label>
                        <?php foreach ($recomendacion->adjuntos_recomendacions as $adjunto) : 
                            echo $this->Html->link(
                                '<i class="glyphicon glyphicon-save-file">'.$adjunto->link.'</i>',
                                '/uploads/'.$adjunto->link,
                                ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                            );
                            
                        endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
      <?php foreach ($instituciones as $institucion) : ?>
             <li role="presentation"><a href="#" aria-controls="<?php echo $institucion?>" role="tab" data-toggle="tab"><?php echo $institucion?></a></li>
      <?php endforeach; ?>
        <li role="presentation"><a href="#respuesta_consolidada" aria-controls="respuesta_consolidada" role="tab" data-toggle="tab">Respuesta Consolidada</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
       

                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse3">Accion de Seguimiento <?= h($accion->codigo) ?></a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <label for="inputDescripcion">Descripcion</label>
                                    <input type="text" class="form-control" id="inputDescripcion" placeholder="" readonly="readonly" value="<?= h($accion->descripcion) ?>">
                                    <label for="inputListado">Listado</label>
                                    <textarea type="text" class="form-control" id="inputListado" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($accion->listado) ?></textarea>  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse4">Archivos Accion de seguimiento</a>
                              </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse in">
                                <div class="panel-body">
                                <?php foreach ($accion->adjuntos_accions as $adjunto) : 
                                    echo $this->Html->link(
                                        '<i class="glyphicon glyphicon-save-file">'.$adjunto->link.'</i>',
                                        '/uploads/'.$adjunto->link,
                                        ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                                    );
                                            
                                endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse5">Respuestas consolidadas</a>
                              </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse in">
                                <div class="panel-body">
                                   <?php foreach ($accion_solicitudes as $solicitud) : ?>
                                           <label for="inputDescripcion">Institucion</label>
                                           <input type="text" class="form-control" id="inputDescripcion" placeholder="" readonly="readonly" value="<?= h($solicitud->institucion->descripcion) ?>">
                                            <label for="inputRespuesta">Respuesta</label>
                                           <textarea type="text" class="form-control" id="inputRespuesta" cols=3 rows=4 
                                           placeholder="" readonly="readonly"> <?= h($solicitud->respuesta) ?></textarea>  
                                           <label>Archivo Adjunto de indicadores</label>
                                          <?php  echo $this->Html->link(
                                            '<i class="glyphicon glyphicon-save-file">'.$solicitud->link_adjunto.'</i>',
                                            '/uploads/'.$adjunto->link,
                                            ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                                        ); ?>
                                   <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
            
      </div>

    </div>
  
   
</fieldset>

<?= $this->Form->button('Aprobar',array('name'=>'btnAprobar'));?>
<?= $this->Form->button('Rechazar',array('name'=>'btnRechazar'));?>
<!--<?= $this->Form->button(__("Rechazar")); ?> -->
<?= $this->Form->end() ?>
