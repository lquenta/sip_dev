
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
                    <label for="inputDescripcion">Descripcion</label>
                    <input type="text" class="form-control" id="inputDescripcion" placeholder="" readonly="readonly" value="<?= h($accionSolicitud->accion->descripcion) ?>">
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
                        <label for="obs_ant">Observacion</label>
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
                    <label for="respuesta">Respuesta</label>
                    <textarea type="text" class="form-control" id="respuesta" name="respuesta" cols=3 rows=4 placeholder="Ingrese su respuesta aqui..." > </textarea>  
                     <?php echo $this->Form->input('adjunto_respuesta', ['type' => 'file', 'label' => 'Añadir Archivo sobre indicadores']);?>
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
                              echo $this->Form->input('derecho', array('label'=>'','multiple' => 'checkbox', 'options' => $listIndicadores));
                          ?>
                     <div class="form-group">
                                     <label>Otro Indicador</label>
                                     <span>
                                         <input type="text" id="descripcionIndicador" placeholder="Indicador Nuevo">
                                     </span>
                                 </div>
                     </div>

                 </div>
             </div>
         </div>


   
</fieldset>
<?= $this->Form->button(__("Grabar")); ?>
<?= $this->Form->end() ?>
