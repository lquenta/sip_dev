<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Añadir Segumiento');
?>

<?= $this->Form->create($accion,['type' => 'file']); ?>
<fieldset>
    <legend><?= __('Añadir Segumiento') ?></legend>
   
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
                        <div class="row">
                            <div class="col-md-12"><label for="inputCodigo">Codigo</label>
                                <input type="text" class="form-control" id="inputCodigo" placeholder="" readonly="readonly" value="<?= h($recomendacion->codigo) ?>">
                            </div>
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDetalle">Recomendacion</label>
                        <textarea type="text" class="form-control" id="inputDetalle" placeholder="" readonly="readonly" rows="5"><?= h($recomendacion->descripcion) ?></textarea>
                    </div>
                     <div class="form-group">
                        <?php echo $this->Form->input('mecanismos', array('label'=>'Mecanismos de Protección','multiple' => 'checkbox', 'options' => $all_mecanismos,'value'=>array_keys($mecanismos),'readonly' => 'readonly','disabled'=>'disabled'));
                          ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12"><label for="inputAño">Año</label>
                                <input type="text" class="form-control" id="inputAño" placeholder="" readonly="readonly" value="<?= h($recomendacion->año) ?>">
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
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse3">Seguimiento</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control" id="codigo" name='codigo' placeholder="" readonly="readonly" value="<?= h($codigo_accion) ?>">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Referencia</label>
                        <textarea type="text" class="form-control" id="descripcion" name='descripcion' placeholder="" rows="3" required=""></textarea>
                    </div>
                     <div class="form-group">
                        <label for="listado">Información requerida</label>
                        <textarea type="text" class="form-control" id="listado" name='listado' placeholder="" rows="3" required=""></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
   
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse5">Incidencia Indicadores</a>
              </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse in">
                <div class="panel-body">

                <?php
                   /*$options = [
                       'Derecho 1' => [
                          '0' => 'Indicador 1',
                       ],
                       'Derecho 2' => [
                          '1' => 'Indicador 2'
                       ]
                    ];*/
                    echo $this->Form->input('incidencia_indicadores', array('multiple' => 'checkbox', 'options' => $incidencia_indicadores));
                    //echo $this->Form->input('incidencia_indicadores');
                ?>
                </div>
            </div>
        </div>
    </div>
     <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse4">Archivos Adjuntos Segumiento</a>
              </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse in">
                <div class="panel-body">
                <?php
                   echo $this->Form->input('adjuntos_accion[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Añadir Archivos']);
                ?>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<?= $this->Form->button(__("Grabar y Enviar")); ?>
<?= $this->Form->end() ?>