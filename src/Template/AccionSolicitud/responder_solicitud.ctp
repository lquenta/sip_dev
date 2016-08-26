
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard_restringido');
$this->assign('title', 'Responder Solicitud');

?>
<?= $this->Form->create($accionSolicitud,['type' => 'file']); ?>
<fieldset>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse3">Requerimiento</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
                <div class="panel-body">
                 
                <div class="form-group">
                     <label for="inputCodigo">Código</label>
                        <input type="text" class="form-control" id="inputCodigo" placeholder="" readonly="readonly" value="<?= h($accionSolicitud->accion->codigo) ?>">                        
                </div>
                 <div class="form-group">                     
                        <label for="inputRecomendacion">Recomandación</label>
                        <textarea type="text" class="form-control" id="inputRecomendacion" name='inputRecomendacion' placeholder="" rows="3" readonly="readonly"><?= h($accionSolicitud->accion->recomendacion->descripcion) ?></textarea>
                </div>
                <div class="form-group">                     
                        <label for="inputDescripcion">Descripción</label>
                        <textarea type="text" class="form-control" id="inputDescripcion" name='inputDescripcion' placeholder="" rows="3" readonly="readonly"><?= h($accionSolicitud->accion->descripcion) ?></textarea>
                </div>
                

                    <div class="row">
                         <div class="form-group">
                        <label for="inputAdjuntosRecomendacion">Archivos Iniciales de Recomendación</label>
                         <div class="col-sm-10">
                            <?php foreach ($accionSolicitud->accion->recomendacion->adjuntos_recomendacions as $adjunto) : 
                                echo $this->Html->link(
                                    '<i class="glyphicon glyphicon-save-file">'.$adjunto->link.'</i>',
                                    '/uploads/'.$adjunto->link,
                                    ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                                );
                            endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-group">
                            <label for="inputDetalle">Archivos Iniciales de seguimiento de acción</label>
                             <div class="col-sm-10">
                            <?php foreach ($accionSolicitud->accion->adjuntos_accions as $adjunto) : 
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
        </div>
    </div>
    <? if($respuestas_anteriores != null){ ?>
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse4">Respuestas anteriores</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse in">
                <div class="panel-body">
                    <?php foreach ($respuestas_anteriores as $respuesta_ant) : ?>
                        <label for="resp_ant">Respuesta</label>
                        <textarea type="text" class="form-control" id="resp_ant" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($respuesta_ant->respuesta) ?></textarea>  
                        <label for="obs_ant">Observación</label>
                        <textarea type="text" class="form-control" id="obs_ant" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($respuesta_ant->observacion) ?></textarea>  
                     <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <? }?>
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse5">Respuesta</a>
              </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse in">
                <div class="panel-body">
                 <div class="form-group">
                    <label for="respuesta">Respuesta</label>
                    <textarea type="text" class="form-control" id="respuesta" name="respuesta" cols=3 rows=4 placeholder="Ingrese su respuesta aqui..."  maxlength="500"> </textarea>  
                    <h6 class="pull-right" id="count_message"></h6>                     
                </div>
                    <?php echo $this->Form->input('adjunto_respuesta', ['type' => 'file', 'label' => 'Añadir Archivo adjunto']);?>
                </div>
            </div>
        </div>
    </div>

     <div class="panel-group">
             <div class="panel panel-default">
                 <div class="panel-heading">
                   <h4 class="panel-title">
                     <a data-toggle="collapse" href="#collapse5">Indicadores</a>
                   </h4>
                 </div>
                 <div id="collapse5" class="panel-collapse collapse in">
                     <div class="panel-body">
                              <?php
                                  echo $this->Form->input('indicadores', array('label'=>'','multiple' => 'checkbox', 'options' => $listIndicadores));
                              ?>
                         <div class="form-group">
                             <label>Otro Indicador</label>
                             <span>
                                 <input type="text" id="descripcionIndicador" name="descripcionIndicador" placeholder="Indicador Nuevo">
                                 
                             </span>
                         </div>
                         <?php echo $this->Form->input('adjunto_respuesta_indicadores', ['type' => 'file', 'label' => 'Añadir Archivo adjunto de Indicadores']);?>


                      <div class="form-group">
                        <label for="inputDetalleRecomandacion">Unidad Organizacional Responsable </label>
                        <div>
                            <input type="text" placeholder="Unidad Organizacional Responsable" class="form-control" />
                        </div>
                    
                     
                     </div>
                     
                    </div>
                 </div>
             </div>
         </div>


   
</fieldset>
<?= $this->Form->button(__("Grabar")); ?>
<?= $this->Form->end() ?>
<script type="text/javascript">
    var text_max = 500;
    $('#count_message').html(text_max + ' restantes');

    $('#respuesta').keyup(function() {
      var text_length = $('#respuesta').val().length;
      var text_remaining = text_max - text_length;
      
      $('#count_message').html(text_remaining + ' restantes');
});
</script>