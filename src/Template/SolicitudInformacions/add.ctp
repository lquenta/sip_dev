<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Añadir Solicitud de Información');
?>
<?= $this->Form->create($solicitud,['type' => 'file']); ?>
<fieldset>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Nueva Solicitud de Información</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">
                <div class="form-group">
                    <label for="inputTitulo">Codigo</label>
                    <input type="text" class="form-control" id="codigo" name='codigo' placeholder="" readonly="readonly" value="<?= h($codigo_solicitud) ?>">
                </div>
                 <div class="form-group">
                    <label for="inputTitulo">Referencia</label>
                    <textarea type="text" class="form-control" id="descripcion" name='descripcion' placeholder="" rows="3" required=""></textarea>
                </div>
                <?php
                    echo $this->Form->input('institucions', array('label'=>'Instituciones Responsables','multiple' => 'checkbox', 'options' => $institucions));
                   
                ?>
                </div>
            </div>
        </div>
    </div>
   

    
</fieldset>
<?= $this->Form->button('Grabar y Enviar',array('name'=>'btnGuardar','style'=>'btn btn-primary'));?>
<button class="btn btn-default" onclick = "volver()">Cancelar</button>
<?= $this->Form->end() ?>
<script type="text/javascript">
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
           
            'descripcion': {
                required: true
            }
        },
        
        
        messages: {
            'descripcion': {
                required: "La descripcion es requerida"
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
            $("#message").html("Debe seleccionar al menos una institución");            
            $('#popupMessage').modal('show');
            return false;
         }       

         $('#popupMessage').modal('show');
     });
</script>