<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Editar Recomendación');
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
                        <label for="inputCodigo">Codigo</label>
                        <input type="text" class="form-control" id="inputCodigo" name="inputCodigo" placeholder="" readonly="readonly" value="<?= h($recomendacion->codigo) ?>"></input>
                    </div>
                    <div class="form-group">
                        <label for="inputDetalle">Detalle de la recomendacion</label>
                        <textarea type="text" class="form-control" id="inputDetalle" name="inputDetalle" placeholder="" rows="5"><?= h($recomendacion->descripcion) ?></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fechaRecomendacion">Fecha Recomendacion</label>
                                <input type="date" class="form-control" id="fechaRecomendacion" name='fechaRecomendacion' placeholder="" required="" value="<?php echo date('Y-m-d',strtotime($recomendacion->fecha_creacion)) ?>" />
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('derechos', array('multiple' => 'checkbox', 'options' => $derechos,'value'=>array_keys($derechos),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                            <div class="col-md-12">
                                <?php echo $this->Form->input('poblaciones', array('multiple' => 'checkbox', 'options' => $poblaciones,'value'=>array_keys($poblaciones),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('instituciones', array('multiple' => 'checkbox', 'options' => $instituciones,'value'=>array_keys($instituciones),'readonly' => 'readonly','disabled'=>'disabled'));
                                  ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->Form->input('comites', array('multiple' => 'checkbox', 'options' => $comites,'value'=>array_keys($comites),'readonly' => 'readonly','disabled'=>'disabled'));
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

