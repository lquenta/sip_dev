<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
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
                    <input type="text" class="form-control" id="inputDescripcion" placeholder="" readonly="readonly" value="<?= h($accion_item->descripcion) ?>">
                    <label for="inputListado">Listado</label>
                    <textarea type="text" class="form-control" id="inputListado" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($accion_item->listado) ?></textarea>  
                   
                </div>
            </div>
        </div>
    </div>

     <label for="inputDescripcion">Descripcion</label>
    <input type="text" class="form-control" id="inputDescripcion" placeholder="" readonly="readonly" value="<?= h($accion_item->descripcion) ?>">
    <label for="inputListado">Listado</label>
    <textarea type="text" class="form-control" id="inputListado" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($accion_item->listado) ?></textarea>  
    <?php
    echo $this->Form->input('respuesta');
    echo $this->Form->input('incidencia_indicadores', array('multiple' => 'checkbox', 'options' => $incidencia_indicadores));
    echo $this->Form->input('adjunto_solicitud_accion', ['type' => 'file', 'label' => 'Añadir Archivo sobre indicadores']);
    ?>
</fieldset>
<?= $this->Form->button(__("Grabar")); ?>
<?= $this->Form->end() ?>
