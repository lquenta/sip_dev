<style type="text/css">
    table {
        width: 100%;
    }

/*thead, tbody, tr, td, th { display: block; }*/

tr:after {
    content: '';
    display: block;
    visibility: hidden;
    clear: both;
}

thead th {
    /*height: 30px;*/

    /*text-align: left;*/
}

tbody {
    height: 400px;
    overflow-y: auto;
}

thead {
    /* fallback */
}


tbody td, thead th {
    /*width: 19.2%;
    float: left;*/
}
</style>
<?php
/* @var $this \Cake\View\View */
//$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->assign('title', 'Lista de todas las recomendaciones');
?>
<script language="javascript">
$(function(){ /* to make sure the script runs after page load */

    $('.descripcion').each(function(event){ /* select all divs with the item class */
    
        var max_length = 150; /* set the max content length before a read more link will be added */
        
        if($(this).html().length > max_length){ /* check for content length */
            
            var short_content   = $(this).html().substr(0,max_length); /* split the content in two parts */
            var long_content    = $(this).html().substr(max_length);
            
            $(this).html(short_content+
                         '<a href="#" class="read_more"><br/>Read More</a>'+
                         '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
                         
            $(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).hide(); /* hide the read more button */
                $(this).parents('.descripcion').find('.more_text').show(); /* show the .more_text span */
         
            });
            
        }
        
    });
 
 
});
        function doSearch()
        {
            var tableReg = document.getElementById('datos');
            var searchText = document.getElementById('searchTerm').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
 
            // Recorremos todas las filas con contenido de la tabla
            for (var i = 1; i < tableReg.rows.length; i++)
            {
                cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                console.log(cellsOfRow);
                found = false;
                // Recorremos todas las celdas
                for (var j = 0; j < cellsOfRow.length && !found; j++)
                {
                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }
        }
    </script>
    <form class="form-inline">
      <div class="row">
          <div class="form-group col-md-12">      
            <label for="searchTerm">Busqueda</label>
            <input id="searchTerm" class="form-control" type="text" onkeyup="doSearch()" />
          </div>
      </div>
    </form>
    <div class="" style="overflow-y: scroll; max-height: 400px; min-width:200%; margin:10px;">
<table class="table table-striped" cellpadding="0" cellspacing="0" id="datos">
    <thead>
        <tr>
            <th><?= h('Código'); ?></th>
            <th><?= h('Mecanismos'); ?></th>
            <th><?= h('Descripción'); ?></th>
            <th><?= h('Año'); ?></th>
            <th><?= h('Grupo Poblacional'); ?></th>
            <th><?= h('Derechos'); ?></th>
            <th><?= h('Instituciones'); ?></th>
            <th><?= h('Fecha Modificación'); ?></th>
            <th><?= h('Usuario'); ?></th>
            <th><?= h('Estado'); ?></th>
            
            
            <th class="actions"><?= __('Accesos Directos'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($recomendacions as $recomendacion): ?>
            <?php 
            $poblaciones_item_recomendacion='';
            $mecanismos_item_recomendacion='';
            $institucion_item_recomendacion='';
            $derecho_item_recomendacion='';
            foreach ($recomendacion->poblacion_recomendacion as $item_poblacion) {
                $poblaciones_item_recomendacion.=' '.$item_poblacion->poblacion->descripcion;
            }
            foreach ($recomendacion->mecanismo_recomendacion as $item_mecanismo) {
                $mecanismos_item_recomendacion.=' '.$item_mecanismo->mecanismo->descripcion;
            }
            foreach ($recomendacion->institucion_recomendacion as $item_institucion) {
                $institucion_item_recomendacion.=' '.$item_institucion->institucion->descripcion;
            }
            foreach ($recomendacion->derecho_recomendacion as $item_derecho) {
                $derecho_item_recomendacion.=' '.$item_derecho->derecho->descripcion;
            }
            //debug($recomendacion->poblacion_recomendacion[0]->poblacion->descripcion);?>
        <tr>
            <td class="filterable-cell"><?= h($recomendacion->codigo) ?></td>
            <td class="filterable-cell"><?= $mecanismos_item_recomendacion; ?></td>
            <td class="descripcion"><?= h($recomendacion->descripcion)?></td>
            <td class="filterable-cell"><?= $this->Number->format($recomendacion->año) ?></td>
            <td class="filterable-cell"><?= $poblaciones_item_recomendacion; ?></td>
            <td class="filterable-cell"><?= $derecho_item_recomendacion; ?></td>
            <td class="filterable-cell"><?= $institucion_item_recomendacion; ?></td>
            <td class="filterable-cell"><?= h($recomendacion->fecha_modificacion) ?></td>
            <td class="filterable-cell">
                <?= $recomendacion->has('user') ? $this->Html->link($recomendacion->user->nombre_usuario, ['controller' => 'Users', 'action' => 'view', $recomendacion->user->id]) : '' ?>
            </td>
            <td class="filterable-cell">
                <?= $recomendacion->estado->descripcion; ?>
            </td>
            
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $recomendacion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
               <?= $this->Html->link('', ['controller'=>'Accions','action' => 'add', $recomendacion->id], ['title' => __('Añadir Seguimiento'), 'class' => 'btn btn-default glyphicon glyphicon-plus']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<!-- <div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previo')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('siguiente') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div> -->