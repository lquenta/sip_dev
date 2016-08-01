<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
?>
<?= $this->Form->create($recomendacion); ?>
<fieldset>
     <legend><?= __('Editar {0}', ['Recomendacion']) ?></legend>
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
                        <label for="inputDetalle">Estado</label>
                        <input type="text" class="form-control" id="inputDetalle" placeholder="" readonly="readonly" value="<?= h($recomendacion->estado_id) ?>"></input>
                    </div>
                    <div class="form-group">
                        <label for="inputDetalle">Codigo</label>
                        <input type="text" class="form-control" id="inputDetalle" placeholder="" readonly="readonly" value="<?= h($recomendacion->codigo) ?>"></input>
                    </div>
                    <div class="form-group">
                        <label for="inputDetalle">Detalle de la recomendacion</label>
                        <textarea type="text" class="form-control" id="inputDetalle" placeholder="" rows="5"><?= h($recomendacion->descripcion) ?></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"><label for="inputAño">Año</label>
                                <input type="text" class="form-control" id="inputAño" placeholder=""  value="<?= h($recomendacion->año) ?>">
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
    

    
</fieldset>
<?= $this->Form->button('Grabar',array('name'=>'btnGuardar'));?>
<?= $this->Form->button('Grabar y Publicar',array('name'=>'btnPublicar'));?>
<?= $this->Form->end() ?>

