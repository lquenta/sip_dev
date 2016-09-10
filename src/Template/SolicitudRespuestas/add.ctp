<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Responder Solicitud de Información');
?>

<?= $this->Form->create($solicitud_respuesta,['type' => 'file']); ?>
<fieldset>
    <legend><?= __('Responder Solicitud de Información') ?></legend>
   
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Datos Solicitud</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12"><label for="inputCodigo">Código</label>
                                <input type="text" class="form-control" id="inputCodigo" placeholder="" readonly="readonly" value="<?= h($solicitudInformacion->codigo) ?>">
                            </div>
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDetalle">Solicitud</label>
                        <textarea type="text" class="form-control" id="inputDetalle" placeholder="" readonly="readonly" rows="5"><?= h($solicitudInformacion->descripcion) ?></textarea>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
     
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse3">Respuesta</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
                <div class="panel-body">
                   
                    <div class="form-group">
                        <label for="respuesta">Contenido de la respuesta </label>
                        <textarea type="text" class="form-control" id="respuesta" name='respuesta' placeholder="" rows="3" required=""></textarea>
                    </div>
                     
                </div>
            </div>
        </div>
    </div>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse4">Archivos Adjuntos Respuesta</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse in">
                <div class="panel-body">
                <?php
                   echo $this->Form->input('adjuntos_respuesta[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Añadir Archivos']);
                ?>
                </div>
            </div>
        </div>
    </div>
   
   
</fieldset>
<?= $this->Form->button(__("Grabar")); ?>
<button class="btn btn-default" onclick = "volver()">Cancelar</button>
<?= $this->Form->end() ?>


