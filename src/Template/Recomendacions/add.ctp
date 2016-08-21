<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Añadir Recomendacion');
?>
<?= $this->Form->create($recomendacion,['type' => 'file']); ?>
<fieldset>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Nueva Recomendación</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                <div class="form-group">
                    <label for="inputTitulo">Codigo</label>
                    <input type="text" class="form-control" id="codigo" name='codigo' placeholder="" readonly="readonly" value="<?= h($codigo_recomendacion) ?>">
                </div>
                 <div class="form-group">
                    <label for="inputTitulo">Descripcion</label>
                    <textarea type="text" class="form-control" id="descripcion" name='descripcion' placeholder="" rows="3" required=""></textarea>
                </div>
                <?php
                    //mecanismo
                    foreach($listmecanismos as $item)
                    {
                            $mensajeCodigo = "cambiarCodigo('$item->Prefijo')";
                            echo "<div class='checkbox'>";
                            echo "<label for = 'institucions-".$item->id."'>";
                            echo '<input type="checkbox" name="mecanismos[]" value="'.$item->id.'" id="mecanismos-'.$item->id.'" onchange="'.$mensajeCodigo.'">';
                            echo $item->descripcion;
                            echo "</label>";
                            echo "</div>";
                    }
                    //echo $this->Form->input('mecanismos',array('label'=>'Mecanismo de Protección','multiple' => 'checkbox', 'options' => $mecanismos, ));

                    echo $this->Form->input('año',array('min'=>'0','max'=>'9999'));
                    echo $this->Form->input('poblaciones', array('label'=>'Grupo Poblacional','multiple' => 'checkbox', 'options' => $poblaciones));
                    echo $this->Form->input('derecho', array('label'=>'Derecho(s)','multiple' => 'checkbox', 'options' => $derecho));
                    $indexGrupo = 0;
                    echo $this->Form->label("Instituciones Responsables");

                    //instituciones
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
                            echo "<div class='checkbox'>";
                            echo "<label for = 'institucions-$indexGrupo'>";
                            echo '<input type="checkbox" name="institucions[]" value="'.$insFil->id.'" id="institucions-'.$insFil->id.'">';
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
                <a data-toggle="collapse" href="#collapse2">Archivos iniciales</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                <?php
                   echo $this->Form->input('adjuntos_recomendacion[]', ['type' => 'file', 'multiple' => 'true', 'label' => 'Añadir Archivos']);
                ?>
                </div>
            </div>
        </div>
    </div>

    
</fieldset>
<?= $this->Form->button('Grabar',array('name'=>'btnGuardar'));?>
<?= $this->Form->button('Grabar y Publicar',array('name'=>'btnPublicar'));?>
<?= $this->Form->end() ?>
<script>
    var codigoOriginal = $("#codigo").val();
    function cambiarCodigo(prefijo){
        $("#codigo").val(prefijo + codigoOriginal);
    }
</script>