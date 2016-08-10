<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Añadir Solicitud de informacion');
?>
<?= $this->Form->create($solicitud,['type' => 'file']); ?>
<fieldset>
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse1">Nueva Solicitud de informacion</a>
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
<?= $this->Form->end() ?>
