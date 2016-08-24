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
                          <?php echo $this->Form->input('Comite', array('label'=>'Comite de Protección','multiple' => 'checkbox', 'options' => $comites,'readonly' => 'readonly','disabled'=>'disabled','value'=>array_keys($comites)));
                          ?>
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
                    <?php
                        //instituciones
                        $indexGrupo = 0;
                        foreach($gruposInstitucioones as $a)
                        {
                            $nombreGrupo = $a['grupo'];
                            $listInstituciones = array();
                            foreach($institucionesNew as $ins){
                                if($nombreGrupo == $ins->Grupo ){

                                    array_push($listInstituciones, $ins);
                                }
                            }

                            //$listInstituciones = array_map(create_function('$x', 'return $x->descripcion;'), $listInstituciones);
                            echo "<div class='panel panel-default'>";
                            echo "<div class='panel-heading' style='cursor: pointer;' data-toggle='collapse' data-target='#institucionesDiv$indexGrupo'>".$nombreGrupo."</div>";
                            echo "<div class='collapse panel-body' id='institucionesDiv$indexGrupo'><div>";
                            foreach($listInstituciones as $insFil)
                            {
                                $disabledInsititucion = 'disabled';
                                foreach ($institucionesRol as $itemInsRol) {
                                    if ($insFil->id == $itemInsRol['institucion_id']) {
                                        $disabledInsititucion = '';
                                    }
                                }
                                echo "<div class='checkbox'>";
                                echo "<label for = 'institucions-$indexGrupo'>";
                                echo '<input type="checkbox" name="institucions[]" value="'.$insFil->id.'" id="institucions-'.$insFil->id.'" '.$disabledInsititucion.'>';
                                echo $insFil->descripcion;
                                echo "</label>";
                                echo "</div>";
                            }
                            echo "</div> </div>";
                            $indexGrupo = $indexGrupo + 1;
                        }
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