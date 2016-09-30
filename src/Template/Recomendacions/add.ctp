<style type="text/css">
    .divDerechos {
        display: block;
        max-height: 250px;
        overflow-y: scroll;
        padding: 5px;
        border: 1px solid #ddd;
        margin: 2px;
    }

</style>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Añadir Recomendación');
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
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="fechaRecomendacion">Fecha Recomendacion</label>
                        <input type="date" class="form-control" id="fechaRecomendacion" name='fechaRecomendacion' placeholder="" required="" />
                    </div>
                </div>
                <?php
                    $indexGrupo = 0;
                    //mecanismo
                    //echo "<div class='panel panel-default'></div>";
                    echo $this->Form->label("Mecanismo de protección");
                    foreach($listmecanismos as $item)
                    {
                            
                            echo "<div class='panel'>";
                            echo "<div class='panel-heading' style='cursor: pointer; border:1px; background-color:#e4e6e9' data-toggle='collapse' data-target='#mecanismosDiv$indexGrupo'>".$item->descripcion."</div>";
                                                     

                            echo "<div class='collapse panel-body' id='mecanismosDiv$indexGrupo'><div>";
                            
                            ///////////comites
                            foreach ($comites as $item_comite) {
                                if ($item_comite->mecanismo_id == $item->id) {
                                    $mensajeCodigo = "cambiarCodigo('$item->Prefijo$item_comite->Prefijo')";
                                    echo "<div class='radio'>";
                                    echo "<label for = 'comites-".$item_comite->id."'>";
                                    echo '<input type="radio" name="comites[]" value="'.$item_comite->IdComite.'" id="comites-'.$item_comite->IdComite.'" onchange="'.$mensajeCodigo.'">';
                                    echo $item_comite->Descripcion;
                                    echo "</label>";
                                    echo "</div>";
                                }
                                
                            }                            
                            ////////////fin comites

                            echo "</div> </div>";
                            $indexGrupo = $indexGrupo + 1;
                    }
                    //echo $this->Form->input('mecanismos',array('label'=>'Mecanismo de Protección','multiple' => 'checkbox', 'options' => $mecanismos, ));
                    
                    echo '<div class="divDerechos">';
                    echo $this->Form->input('poblaciones', array('label'=>'Grupo Poblacional','multiple' => 'checkbox', 'options' => $poblaciones));
                    echo '</div>';
                    echo '<div class="divDerechos">';
                    echo $this->Form->input('derecho', array('label'=>'Derecho(s)','multiple' => 'checkbox', 'options' => $derecho));
                    echo '</div>';
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
                        echo "<div class='collapse panel-body' id='institucionesDiv$indexGrupo'>";
                        foreach($listInstituciones as $insFil)
                        {
                            echo "<div class='checkbox'>";
                            echo "<label for = 'institucions-$insFil->id'>";
                            echo '<input type="checkbox" name="institucions[]" value="'.$insFil->id.'" id="institucions-'.$insFil->id.'">';
                            echo $insFil->descripcion;
                            echo "</label>";
                            echo "</div>";
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
<button class="btn btn-default" onclick = "volver()">Cancelar</button>
<?= $this->Form->end() ?>
<script>
    var codigoOriginal = $("#codigo").val();
    function cambiarCodigo(prefijo){
        $("#codigo").val(prefijo + codigoOriginal);
    }

    /**************validacion del formulario*****************/
    // override jquery validate plugin defaults
$.validator.setDefaults({
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
            //$(element).closest('td').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
            //$(element).closest('td').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.help-block').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertBefore(element);
            }
        }
});

    $("form").first().validate({ 
        rules: {
            'poblaciones[]': {
                required: true
            },
            'derecho[]': {
                required: true
            },
            'descripcion': {
                required: true
            },
            'fechaRecomendacion': {
                required: true
            },
            'adjuntos_recomendacion[]': {
                required: true
            }
        },
        
        
        messages: {
            'descripcion': {
                required: "La descripción es requerida"
            },
            'fechaRecomendacion': {
                required: "La fecha de recomendación es requerida"
            },
            'poblaciones[]': {
                required: "Debe seleccionar al menos un item de Grupo Poblacional"
            },
            'derecho[]': {
                required: "Debe seleccionar al menos un Derecho"
            },
            'adjuntos_recomendacion[]': {
                required: "Debe Añadir un archivo"
            }
            
        },
        
        
        errorPlacement: function(error, element) {
            $("#message").html("");            
            error.appendTo("#message");            
        }
    });

  

    $("form").first().on('submit', function() {
         
         //aqui atrapamos lo que el pluugin no valida
         if($('input[name="institucions[]"]:checked').length ==  0)
         {
            $("#message").html("Debe seleccionar al menos una institucion");            
            $('#popupMessage').modal('show');
            return false;
         }

         if($('input[name="comites[]"]:checked').length ==  0)
         {
            $("#message").html("Debe seleccionar al menos un Mecanismo De Protección");            
            $('#popupMessage').modal('show');
            return false;
         }

         $('#popupMessage').modal('show');
     });
</script>