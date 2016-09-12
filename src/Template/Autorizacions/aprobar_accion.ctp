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
                        <label for="inputDetalleRecomandacion">Detalle de la recomendacion</label>
                        <textarea type="text" class="form-control" id="inputDetalleRecomandacion" name="inputDetalleRecomandacion" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($accion->recomendacion->descripcion) ?></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
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
                                <?php echo $this->Form->input('Comite', array('label'=>'Comite de Protección','multiple' => 'checkbox', 'options' => $comites,'readonly' => 'readonly','disabled'=>'disabled','value'=>array_keys($comites)));?>

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
               <a data-toggle="collapse" href="#collapse3">Accion de Seguimiento <?= h($accion->codigo) ?></a>
             </h4>
           </div>
           <div id="collapse3" class="panel-collapse collapse in">
               <div class="panel-body">
                   <label for="inputDescripcion">Descripcion</label>
                   <input type="text" class="form-control" id="inputDescripcion" placeholder="" readonly="readonly" value="<?= h($accion->descripcion) ?>">
                   <div style="display:none">
                   <label for="inputListado">Listado</label>
                   <textarea type="text" class="form-control" id="inputListado" cols=3 rows=4 placeholder="" readonly="readonly"> <?= h($accion->listado) ?></textarea>  
                  </div>
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
               <a data-toggle="collapse" href="#collapse5">Respuestas de Instituciones</a>
             </h4>
           </div>
           <div id="collapse5" class="panel-collapse collapse in">
               <div class="panel-body">
                 <ul class="nav nav-tabs" role="tablist">
                 <?php foreach ($listInstitucionAccionUnique as $institucionUnique) : ?>
                        <li role="presentation"><a href="#" aria-controls="<?php echo $institucionUnique['descripcion']?>" role="tab" data-toggle="tab"
                        onclick="$('div[name=tabsRespuestas]').hide();$('#tab<?php echo $institucionUnique['id_institucion']?>').show();"><?php echo $institucionUnique['descripcion']?></a></li>
                 <?php endforeach; ?>
                 </ul>
                <?php foreach ($listInstitucionAccionUnique as $institucionUnique) : ?>
                 <!-- Tab panes -->
                 <div class="tab-content">
                 <?php $diplayTab = '';
                 foreach ($listInstitucionAccion as $institucion) : 
                  ?>
                 <div role="tabpanel" class="tab-pane active" id="tab<?php echo $institucion['id_institucion']?>" name="tabsRespuestas" style="display:<?php echo $diplayTab?>">                                    
                          <label for="inputRespuesta">Respuesta</label>
                           <textarea type="text" class="form-control" id="inputRespuesta" cols=3 rows=4 
                           placeholder="" readonly="readonly"> <?= h($institucion['respuesta']) ?></textarea>
                           <?php if($institucion['link_adjunto']!=null){
                           ?>  
                             <label>Archivo Adjunto de respuesta</label>
                            <?php  echo $this->Html->link(
                              '<i class="glyphicon glyphicon-save-file">'.$institucion['link_adjunto'].'</i>',
                              '/uploads/'.$institucion['link_adjunto'],
                              ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                          ); ?>
                            <?php } ?>                   
                 <label class="form-control">Indicadores</label>
                 <ul class="list">
                  <?php 
                  foreach ($ListIndicadresInstAccion[$institucion['accion_sol_id']] as $institucionIndicador) :?>

                    <li class="list-group-item">
                    [<?php echo $institucionIndicador['Grupo'] ?>]<?php echo $institucionIndicador['nombre'] ?>
                      
                    </li>
                   <?php endforeach; ?>
                   <label>Archivo Adjunto de indicadores</label>
                     <?php echo $this->Html->link(
                       '<i class="glyphicon glyphicon-save-file">'.$institucion['link_adjunto_indicadores'].'</i>',
                       '/uploads/'.$institucion['link_adjunto_indicadores'],
                       ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                   ); ?>
                 </ul>
                 </div>
                  <?php endforeach; ?>
                  <?php $diplayTab = 'none'?>
                <?php endforeach; ?>

                 
                  </div>
               </div>
           </div>
       </div>
   </div>
   <div class="panel-group">
       <div class="panel panel-default">
           <div class="panel-heading">
             <h4 class="panel-title">
               <a data-toggle="collapse" href="#collapse4">Consolidado final</a>
             </h4>
           </div>
           <div id="collapse4" class="panel-collapse collapse in">
               <div class="panel-body">
                   <label for="inputTexto">Texto</label>
                   <textarea type="text" class="form-control" id="texto_consolidado" name="texto_consolidado" cols=3 rows=4 placeholder=""><?=h($texto_consolidado); ?> </textarea> 
                   <?php if($consolidado_datos!=null){?>
                      <?php foreach ($consolidado_datos->adjuntos_consolidados as $adjunto) : 
                         echo $this->Html->link(
                             '<i class="glyphicon glyphicon-save-file">'.$adjunto->link.'</i>',
                             '/uploads/'.$adjunto->link,
                             ['class' => 'btn btn-default btn-lg', 'target' => '_blank','escape' => false]
                         );
                         endforeach; ?>
                     <?php }?>
                     <?php if($en_transito==true){
                      echo $this->Form->input('adjuntos_consolidado[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Añadir Archivos']);
                      }
                      if(isset($consolidado_datos->fuente)){
                        echo $this->Form->input('fuente',['value'=>$consolidado_datos->fuente]);
                      }else{
                        echo $this->Form->input('fuente');
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
                        <a data-toggle="collapse" href="#collapse5">Indicadores</a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse in">
                        <div class="panel-body">
                             <?php
                                 $indexGrupo = 0;
                                 foreach($listGruGrupoIndicadores as $a)
                                  {
                                      $nombreGrupo = $a['grupo'];
                                      
                                      //$listInstituciones = array_map(create_function('$x', 'return $x->descripcion;'), $listInstituciones);
                                      echo "<div class='panel panel-default'>";
                                      echo "<div class='panel-heading' style='cursor: pointer;' data-toggle='collapse' data-target='#indicadorsDiv$indexGrupo'>".$nombreGrupo."</div>";
                                      echo "<div class='collapse panel-body' id='indicadorsDiv$indexGrupo'>";
                                      foreach($listIndicadoresAll as $insFil)
                                      {
                                          if ($insFil['Grupo'] == $nombreGrupo ) {
                                            $cheked = $insFil['checked'] == 1?'checked':'';
                                            echo "<div class='checkbox'>";
                                            echo "<label>";
                                            echo '<input type="checkbox" name="indicadores_consolidado[]" value="'.$insFil['id'].'" id="indicadors-'.$insFil['id'].'"'.$cheked.'>';
                                            echo $insFil['nombre'];
                                            echo "</label>";
                                            echo "</div>";
                                          }
                                          
                                      }
                                      echo "</div>";
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
              <a data-toggle="collapse" href="#collapse5">Comentario</a>
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse in">
              <div class="panel-body">
                <textarea type="text" class="form-control" id="razon" cols=3 rows=4  name="razon" placeholder="Comentario" > <?=h($texto_comentario); ?></textarea> 
              </div>
          </div>
      </div>
  </div>
</fieldset>

<?= $this->Form->button('Guardar',array('name'=>'btnGuardar','class'=>'btn btn-primary'));?>
<?= $this->Form->button('Aprobar y enviar',array('name'=>'btnAprobar','class'=>'btn btn-danger'));?>
<?= $this->Form->button('Rechazar',array('class'=>'btn btn-danger','name'=>'btnRechazar'));?>
<!--<?= $this->Form->button(__("Rechazar")); ?> -->
<?= $this->Form->end() ?>
