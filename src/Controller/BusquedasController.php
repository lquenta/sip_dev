<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\I18n\Time;
use Cake\Utility\Text;

class BusquedasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
         $this->Auth->allow(['index','view','simple','avanzada','parametrosBusqueda']);
    }

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    public function parametrosBusqueda(){
        //
         /*$gruposInstitucioones = $this->Institucions->find();
        $gruposInstitucioones->select(['grupo'])->distinct(['grupo'])->all();
*/
        $this->loadModel('Derechos');
        $this->loadModel('Institucions');
        $this->loadModel('Comites');
        $this->loadModel('Poblacions');
        $this->loadModel('Recomendacions');
        $gestiones = $this->Recomendacions->obtenerAñosRecomendaciones();
        $solo_anios=array();
        foreach ($gestiones as $anios => $value) {
            foreach ($value as $anio_este ) {
               $solo_anios[]=$anio_este;
            }
        }
        
        $array_años=array('2016');
        $array_derechos = $this->Derechos->find('list');
        $array_institucion =$this->Institucions->find('list');
        $array_mecanismo =$this->Comites->find('list');
        $array_poblacion =$this->Poblacions->find('list');

        $resultados = array(
            'anios'=>$solo_anios,
            'derechos'=>$array_derechos,
            'institucions'=>$array_institucion,
            'mecanismos'=>$array_mecanismo,
            'poblacions'=>$array_poblacion
            );

        $this->set([
            'resultados' => $resultados,
            '_serialize' => ['resultados']
        ]);
        
    }
    public function simple(){
        //buscamos recomendaciones que coincidan con el texto y descripcion
        $full_url=Router::url('/', true);;

        $resultados=array();
        $textoBusqueda=$this->request->data('textoBuscar');
        $this->loadModel('Recomendacions');
        $this->loadModel('Accions');
        $this->loadModel('ComiteRecomendacions');
        $this->loadModel('Comites');
        $this->loadModel('ConsolidadoIndicadores');
        $this->loadModel('Consolidados');
        $this->loadModel('AdjuntosConsolidados');
        
        
        
        if($textoBusqueda!=''){
             $recomendaciones = $this->Recomendacions->find('all',[
            'contain' => ['Users', 'Estados', 'AdjuntosRecomendacions', 'DerechoRecomendacion.Derechos', 'InstitucionRecomendacion.Institucions', 'MecanismoRecomendacion.Mecanismos', 'PoblacionRecomendacion.Poblacions', 'RecomendacionParametros']
        ])
       ->where(["MATCH(Recomendacions.descripcion) AGAINST(:search IN BOOLEAN MODE)"])
       ->bind(":search", $textoBusqueda);
       //debug($recomendaciones);
        //SELECT * FROM recomendacions WHERE MATCH (descripcion)
        //->where(['title LIKE' => '%First%'])
        //->where(['Recomendacions.descripcion LIKE ' =>'%'.$textoBusqueda.'%']);
        }else{
             $recomendaciones = $this->Recomendacions->find('all',[
            'contain' => ['Users', 'Estados', 'AdjuntosRecomendacions', 'DerechoRecomendacion.Derechos', 'InstitucionRecomendacion.Institucions', 'MecanismoRecomendacion.Mecanismos', 'PoblacionRecomendacion.Poblacions', 'RecomendacionParametros']
            ]);
        }
       
        //->where(["MATCH(recomendacions.descripcion) AGAINST(:search)"])
        //->bind(":search", $textoBusqueda);
        $recomendaciones_vinculadas=array();
        foreach ($recomendaciones as $recomendacion ) {
            //obtenemos las acciones asociadas
            $recomendacion_vinculada=array();
            $id_recomendacion = $recomendacion->id;
            $mecanismo_proteccion = '';
            foreach ($recomendacion->mecanismo_recomendacion as $item_mecanismo) {
                $mecanismo_proteccion.=' '.$item_mecanismo->mecanismo->descripcion;
            }
            
            $comiteRecomendacion = $this->ComiteRecomendacions->find('list',[
                'keyField' => 'comite_id',
                'valueField' => 'comite_id'
            ])
             ->where(['ComiteRecomendacions.recomendacion_id ' => $id_recomendacion])->toArray();
             $comites=$this->Comites->find('list')->where(['idComite IN ' => $comiteRecomendacion])
            ->toArray();


            $fecha_recomendacion=$recomendacion->fecha_modificacion->i18nFormat('yyyy-MM-dd');
            $grupo_poblacional='';
             foreach ($recomendacion->poblacion_recomendacion as $item_poblacion) {
                $grupo_poblacional.=' '.$item_poblacion->poblacion->descripcion;
            }
            $derechos='';
            foreach ($recomendacion->derecho_recomendacion as $item_derecho) {
                $derechos.=' '.$item_derecho->derecho->descripcion;
            }
            $institucion ='';
            foreach ($recomendacion->institucion_recomendacion as $item_institucion) {
                $institucion.=' '.$item_institucion->institucion->descripcion;
            }
            if($recomendacion->adjuntos_recomendacions==null){
                $observaciones_finales='';
            }else{
                $observaciones_finales=$full_url.'/uploads/'.$recomendacion->adjuntos_recomendacions[0]->link;
            }
            $textoBusqueda = str_replace('+',' ',$textoBusqueda);
            $textoBusqueda = str_replace('-',' ',$textoBusqueda);
            $textoBusqueda = str_replace('~',' ',$textoBusqueda);
            $array_textoBusqueda = explode(" ",$textoBusqueda);
            $recomendacion_text=$recomendacion->descripcion;
            foreach ($array_textoBusqueda as $text ) {
                $recomendacion_text= Text::highlight(
                    $recomendacion_text,
                    $text,
                    ['format' => '<span class="highlight">\1</span>']
                );

            }
           
            //$recomendacion = $recomendacion->descripcion;
            $acciones = $this->Accions->find('all',['contain' => ['Users','AdjuntosAccions' ]])->where(['recomendacion_id'=> $id_recomendacion,'estado_id'=>'9' ]);
            $acciones_recomendacion =array();
            foreach ($acciones as $accion ) {
               
                //obtenemos el consolidado de la accion
                $consolidado = $this->Consolidados->find('all')->where(['accion_id'=>$accion->id])->first();
                $adjunto_consolidado = $this->AdjuntosConsolidados->find('all')->where(['consolidado_id'=>$accion->id])->first();
                 if($adjunto_consolidado==null){
                    $adjunto_link='';
                }else{
                    $adjunto_link=$full_url.'/uploads/'.$adjunto_consolidado->link;
                }
                //debug($consolidado);
                $consolidado_indicadores = $this->ConsolidadoIndicadores->find('all',['contain' => ['Indicadors']])->where(['consolidado_id'=>$consolidado->id])->toArray();
                $indicadores_consolidado=array();
                foreach ($consolidado_indicadores as $cons_indicador) {
                    $indicadores_consolidado[]=array('nombre'=>$cons_indicador->indicador->nombre,'link'=>$cons_indicador->indicador->link,'grupo'=>$cons_indicador->indicador->Grupo);
                }
                $accion_vinculada = array(
                    'id_accion'=>$accion->id,
                    'descripcion'=>$accion->descripcion,
                    'fecha'=>$accion->fecha->i18nFormat('yyyy-MM-dd'),
                    'indicadores'=>$indicadores_consolidado,
                    'informe_estado'=>$adjunto_link,
                    'fuente'=>$consolidado->fuente
                    );
                $acciones_recomendacion[]=$accion_vinculada;
            }

            $recomendacion_vinculada=array(
                'id_recomendacion'=>$id_recomendacion,
                'mecanismo_proteccion'=>array_values($comites),
                'fecha_recomendacion'=> $fecha_recomendacion,
                'grupo_poblacional'=>$grupo_poblacional,
                'derechos'=>$derechos,
                'institucion'=>$institucion,
                'observaciones_finales'=>$observaciones_finales,
                'recomendacion'=>$recomendacion_text,
                'acciones'=>$acciones_recomendacion
                );
            $recomendaciones_vinculadas[]=$recomendacion_vinculada;

        }
        $resultados=array('resultados'=>$recomendaciones_vinculadas);
        /* $resultados=array(
            'resultados'=>
                array(

                    array('id_recomendacion'=>,
                'mecanismo_proteccion'=>,
                'fecha_recomendacion'=> ,
                'grupo_poblacional'=>,
                'derechos'=>'',
                'institucion'=>'',
                'observaciones_finales'=>'',
                'recomendacion'=>'',
                'acciones'=>array(
                    array( 'id_accion'=>'1',
                    'descripcion'=>'(1)129. Se está revisando el Código<strong> Niño</strong>, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas,<strong> niños</strong> y adolescentes, resaltando el interés superior del<strong> niño</strong>/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas,<strong> niños</strong> y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>array(
                        'justicia' =>array('Índices Gini y razón de percentil de la distribución de ingresos','Distribución de ingreso regular en la ocupación principal de mujeres en relación a hombres (Brecha salarial)'),
                        'trabajo' =>array('Ingreso promedio mensual en la ocupacion principal, según grupo ocupacional')
                        ),
                    'informe_estado'=>'cerberus-test.com/upload/archivo2_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010'),
                array( 'id_accion'=>'2',
                    'descripcion'=>'(1)129. Se está revisando el Código<strong> Niño</strong>, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas,<strong> niños</strong> y adolescentes, resaltando el interés superior del<strong> niño</strong>/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas,<strong> niños</strong> y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                     'indicadores'=>array(
                       'salud' =>array('Porcentaje de Mujeres GESTANTES beneficiarias del Bono Juana Azurduy.'),
                       'educacion' =>array('Incidencia de la pobreza extrema')
                       ),
                    'informe_estado'=>'cerberus-test.com/upload/archivo3_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010')                   
                    )),
        ));*/
        
        $this->set([
            'resultados' => $resultados,
            '_serialize' => ['resultados']
        ]);
    }
    public function avanzada(){
        //buscamos recomendaciones que coincidan con el texto y descripcion
        $full_url=Router::url('/', true);;

        $resultados=array();
        $textoBusqueda=$this->request->data('textoBuscar');
        $this->loadModel('Recomendacions');
        $this->loadModel('Accions');
        $this->loadModel('ComiteRecomendacions');
        $this->loadModel('Comites');
        $this->loadModel('ConsolidadoIndicadores');
        $this->loadModel('Consolidados');
        $this->loadModel('AdjuntosConsolidados');
        
        
        
        if($textoBusqueda!=''){
             $recomendaciones = $this->Recomendacions->find('all',[
            'contain' => ['Users', 'Estados', 'AdjuntosRecomendacions', 'DerechoRecomendacion.Derechos', 'InstitucionRecomendacion.Institucions', 'MecanismoRecomendacion.Mecanismos', 'PoblacionRecomendacion.Poblacions', 'RecomendacionParametros','ComiteRecomendacions.Comites']
        ])
       ->where(["MATCH(Recomendacions.descripcion) AGAINST(:search IN BOOLEAN MODE)"])
       ->bind(":search", $textoBusqueda);
       //debug($recomendaciones);
        //SELECT * FROM recomendacions WHERE MATCH (descripcion)
        //->where(['title LIKE' => '%First%'])
        //->where(['Recomendacions.descripcion LIKE ' =>'%'.$textoBusqueda.'%']);
        }else{
             $recomendaciones = $this->Recomendacions->find('all',[
            'contain' => ['Users', 'Estados', 'AdjuntosRecomendacions', 'DerechoRecomendacion.Derechos', 'InstitucionRecomendacion.Institucions', 'MecanismoRecomendacion.Mecanismos', 'PoblacionRecomendacion.Poblacions', 'RecomendacionParametros','ComiteRecomendacions.Comites']
            ]);
        }
        //por año
        $anios_filtro = $this->request->data('anios');
        $anios_filtro=json_decode($anios_filtro);
        if($anios_filtro!=null){
            $recomendaciones = $recomendaciones->where(['YEAR(Recomendacions.fecha_creacion) IN ' => $anios_filtro]);
        }
       
         //busqueda por derechos
        $derechos_filtro=$this->request->data('derechos');
        $derechos_filtro=json_decode($derechos_filtro);
        if($derechos_filtro!=null){
            //$recomendaciones = $recomendaciones->where(['DerechoRecomendacion.Derechos.id IN'=>$derechos_filtro]);
            $recomendaciones = $recomendaciones->matching(
                'DerechoRecomendacion.Derechos', function ($q) use ($derechos_filtro) {
                    return $q->where(['Derechos.id IN' => $derechos_filtro]);
                }
            );
        }
        $institucions_filtro=$this->request->data('institucions');
        $institucions_filtro=json_decode($institucions_filtro);
        if($institucions_filtro!=null){
            //$recomendaciones = $recomendaciones->where(['DerechoRecomendacion.Derechos.id IN'=>$institucions_filtro]);
            $recomendaciones = $recomendaciones->matching(
                'InstitucionRecomendacion.Institucions', function ($q) use ($institucions_filtro) {
                    return $q->where(['Institucions.id IN' => $institucions_filtro]);
                }
            );
        }
        $mecanismos_filtro=$this->request->data('mecanismos');
        $mecanismos_filtro=json_decode($mecanismos_filtro);
        if($mecanismos_filtro!=null){
            //$recomendaciones = $recomendaciones->where(['DerechoRecomendacion.Derechos.id IN'=>$mecanismos_filtro]);
            $recomendaciones = $recomendaciones->matching(
                'ComiteRecomendacions.Comites', function ($q) use ($mecanismos_filtro) {
                    return $q->where(['Comites.IdComite IN' => $mecanismos_filtro]);
                }
            );
        }
        $poblacions_filtro=$this->request->data('poblacions');
        $poblacions_filtro=json_decode($poblacions_filtro);
        if($poblacions_filtro!=null){
            //$recomendaciones = $recomendaciones->where(['DerechoRecomendacion.Derechos.id IN'=>$poblacions_filtro]);
            $recomendaciones = $recomendaciones->matching(
                'PoblacionRecomendacion.Poblacions', function ($q) use ($poblacions_filtro) {
                    return $q->where(['Poblacions.id IN' => $poblacions_filtro]);
                }
            );
        }
        

        
       
        //->where(["MATCH(recomendacions.descripcion) AGAINST(:search)"])
        //->bind(":search", $textoBusqueda);
        $recomendaciones_vinculadas=array();
        foreach ($recomendaciones as $recomendacion ) {
            //obtenemos las acciones asociadas
            $recomendacion_vinculada=array();
            $id_recomendacion = $recomendacion->id;
            $mecanismo_proteccion = '';
            foreach ($recomendacion->mecanismo_recomendacion as $item_mecanismo) {
                $mecanismo_proteccion.=' '.$item_mecanismo->mecanismo->descripcion;
            }
            
            $comiteRecomendacion = $this->ComiteRecomendacions->find('list',[
                'keyField' => 'comite_id',
                'valueField' => 'comite_id'
            ])
             ->where(['ComiteRecomendacions.recomendacion_id ' => $id_recomendacion])->toArray();
             $comites=$this->Comites->find('list')->where(['idComite IN ' => $comiteRecomendacion])
            ->toArray();

            $fecha_recomendacion=$recomendacion->fecha_modificacion->i18nFormat('yyyy-MM-dd');
            $grupo_poblacional='';
             foreach ($recomendacion->poblacion_recomendacion as $item_poblacion) {
                $grupo_poblacional.=' '.$item_poblacion->poblacion->descripcion;
            }
            $derechos='';
            foreach ($recomendacion->derecho_recomendacion as $item_derecho) {
                $derechos.=' '.$item_derecho->derecho->descripcion;
            }
            $institucion ='';
            foreach ($recomendacion->institucion_recomendacion as $item_institucion) {
                $institucion.=' '.$item_institucion->institucion->descripcion;
            }
            if($recomendacion->adjuntos_recomendacions==null){
                $observaciones_finales='';
            }else{
                $observaciones_finales=$full_url.'/uploads/'.$recomendacion->adjuntos_recomendacions[0]->link;
            }
            $textoBusqueda = str_replace('+',' ',$textoBusqueda);
            $textoBusqueda = str_replace('-',' ',$textoBusqueda);
            $textoBusqueda = str_replace('~',' ',$textoBusqueda);
            $array_textoBusqueda = explode(" ",$textoBusqueda);
            $recomendacion_text=$recomendacion->descripcion;
            foreach ($array_textoBusqueda as $text ) {
                $recomendacion_text= Text::highlight(
                    $recomendacion_text,
                    $text,
                    ['format' => '<span class="highlight">\1</span>']
                );

            }
           
            //$recomendacion = $recomendacion->descripcion;
            $acciones = $this->Accions->find('all',['contain' => ['Users','AdjuntosAccions' ]])->where(['recomendacion_id'=> $id_recomendacion,'estado_id'=>'9' ]);
            $acciones_recomendacion =array();
            foreach ($acciones as $accion ) {
               
                //obtenemos el consolidado de la accion
                $consolidado = $this->Consolidados->find('all')->where(['accion_id'=>$accion->id])->first();
                $adjunto_consolidado = $this->AdjuntosConsolidados->find('all')->where(['consolidado_id'=>$accion->id])->first();
                 if($adjunto_consolidado==null){
                    $adjunto_link='';
                }else{
                    $adjunto_link=$full_url.'/uploads/'.$adjunto_consolidado->link;
                }
                //debug($consolidado);
                $consolidado_indicadores = $this->ConsolidadoIndicadores->find('all',['contain' => ['Indicadors']])->where(['consolidado_id'=>$consolidado->id])->toArray();
                $indicadores_consolidado=array();
                foreach ($consolidado_indicadores as $cons_indicador) {
                    $indicadores_consolidado[]=array('nombre'=>$cons_indicador->indicador->nombre,'link'=>$cons_indicador->indicador->link,'grupo'=>$cons_indicador->indicador->Grupo);
                }
                $accion_vinculada = array(
                    'id_accion'=>$accion->id,
                    'descripcion'=>$accion->descripcion,
                    'fecha'=>$accion->fecha->i18nFormat('yyyy-MM-dd'),
                    'indicadores'=>$indicadores_consolidado,
                    'informe_estado'=>$adjunto_link,
                    'fuente'=>$consolidado->fuente
                    );
                $acciones_recomendacion[]=$accion_vinculada;
            }

            $recomendacion_vinculada=array(
                'id_recomendacion'=>$id_recomendacion,
                'mecanismo_proteccion'=>array_values($comites),
                'fecha_recomendacion'=> $fecha_recomendacion,
                'grupo_poblacional'=>$grupo_poblacional,
                'derechos'=>$derechos,
                'institucion'=>$institucion,
                'observaciones_finales'=>$observaciones_finales,
                'recomendacion'=>$recomendacion_text,
                'acciones'=>$acciones_recomendacion
                );
            $recomendaciones_vinculadas[]=$recomendacion_vinculada;

        }
        $resultados=array('resultados'=>$recomendaciones_vinculadas);
        /* $resultados=array(
            'resultados'=>
                array(

                    array('id_recomendacion'=>,
                'mecanismo_proteccion'=>,
                'fecha_recomendacion'=> ,
                'grupo_poblacional'=>,
                'derechos'=>'',
                'institucion'=>'',
                'observaciones_finales'=>'',
                'recomendacion'=>'',
                'acciones'=>array(
                    array( 'id_accion'=>'1',
                    'descripcion'=>'(1)129. Se está revisando el Código<strong> Niño</strong>, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas,<strong> niños</strong> y adolescentes, resaltando el interés superior del<strong> niño</strong>/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas,<strong> niños</strong> y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>array(
                        'justicia' =>array('Índices Gini y razón de percentil de la distribución de ingresos','Distribución de ingreso regular en la ocupación principal de mujeres en relación a hombres (Brecha salarial)'),
                        'trabajo' =>array('Ingreso promedio mensual en la ocupacion principal, según grupo ocupacional')
                        ),
                    'informe_estado'=>'cerberus-test.com/upload/archivo2_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010'),
                array( 'id_accion'=>'2',
                    'descripcion'=>'(1)129. Se está revisando el Código<strong> Niño</strong>, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas,<strong> niños</strong> y adolescentes, resaltando el interés superior del<strong> niño</strong>/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas,<strong> niños</strong> y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                     'indicadores'=>array(
                       'salud' =>array('Porcentaje de Mujeres GESTANTES beneficiarias del Bono Juana Azurduy.'),
                       'educacion' =>array('Incidencia de la pobreza extrema')
                       ),
                    'informe_estado'=>'cerberus-test.com/upload/archivo3_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010')                   
                    )),
        ));*/
        
        $this->set([
            'resultados' => $resultados,
            '_serialize' => ['resultados']
        ]);
    }
    public function index(){
        $this->loadModel('Recomendacions');
        $this->loadModel('Poblacions');
        $this->loadModel('PoblacionRecomendacion');
        $this->loadModel('DerechoRecomendacion');
        $this->loadModel('Derechos');
        $this->loadModel('InstitucionRecomendacion');
        $this->loadModel('Institucions');
        $this->loadModel('MecanismoRecomendacion');
        $this->loadModel('Mecanismos');
        $this->loadModel('IndicadoresDerechos');
        $this->loadModel('AdjuntosAccions');
        $resultados=array(
            'resultados'=>array('id_recomendacion'=>1)
            );
        $this->set([
            'resultados' => $resultados,
            '_serialize' => ['resultados']
        ]);
    }
    public function view($textoBusqueda){
       

    }

}