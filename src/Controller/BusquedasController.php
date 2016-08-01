<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
class BusquedasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
         $this->Auth->allow(['index','view','simple','avanzada']);
    }

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    public function simple(){
         $resultados=array(
            'resultados'=>
                array(
                    array('id_recomendacion'=>1,
                'mecanismo_proteccion'=>'Examen Periódico Universal 2010',
                'fecha_recomendacion'=> '09-06- 2010',
                'grupo_poblacional'=>'Niñas, niños y adolescentes',
                'derechos'=>'Desarrrollo , Interés superior del niño/a, Participación',
                'institucion'=>'Estado',
                'observaciones_finales'=>'cerberus-test.com/upload/archivo1.pdf',
                'recomendacion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                'acciones'=>array(
                    array( 'id_accion'=>'1',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo2_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010'),
                array( 'id_accion'=>'2',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo3_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010')                   
                    )),
                array('id_recomendacion'=>2,
                'mecanismo_proteccion'=>'Examen Periódico Universal 2010',
                'fecha_recomendacion'=> '09-06- 2010',
                'grupo_poblacional'=>'Niñas, niños y adolescentes',
                'derechos'=>'Desarrrollo , Interés superior del niño/a, Participación',
                'institucion'=>'Estado',
                'observaciones_finales'=>'cerberus-test.com/upload/archivo2.pdf',
                'recomendacion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                'acciones'=>array(
                    array( 'id_accion'=>'3',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo4_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010'),
                array( 'id_accion'=>'4',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo5_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010')                   
                    ))
                ));
        $this->set([
            'resultados' => $resultados,
            '_serialize' => ['resultados']
        ]);
    }
    public function avanzada(){
         $resultados=array(
            'resultados'=>
                array(
                    array('id_recomendacion'=>1,
                'mecanismo_proteccion'=>'Examen Periódico Universal 2010',
                'fecha_recomendacion'=> '09-06- 2010',
                'grupo_poblacional'=>'Niñas, niños y adolescentes',
                'derechos'=>'Desarrrollo , Interés superior del niño/a, Participación',
                'institucion'=>'Estado',
                'observaciones_finales'=>'cerberus-test.com/upload/archivo1.pdf',
                'recomendacion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                'acciones'=>array(
                    array( 'id_accion'=>'1',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo2_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010'),
                array( 'id_accion'=>'2',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo3_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010')                   
                    )),
                array('id_recomendacion'=>2,
                'mecanismo_proteccion'=>'Examen Periódico Universal 2010',
                'fecha_recomendacion'=> '09-06- 2010',
                'grupo_poblacional'=>'Niñas, niños y adolescentes',
                'derechos'=>'Desarrrollo , Interés superior del niño/a, Participación',
                'institucion'=>'Estado',
                'observaciones_finales'=>'cerberus-test.com/upload/archivo2.pdf',
                 'recomendacion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                'acciones'=>array(
                    array( 'id_accion'=>'3',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo4_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010'),
                array( 'id_accion'=>'4',
                    'descripcion'=>'(1)129. Se está revisando el Código Niño, Niña y Adolescentederecvio, incorporando la protección jurídica integral de los derechos de las niñas, niños y adolescentes, resaltando el interés superior del niño/a, el derecho a la familia, al desarrollo integral, la filiación sin  discriminación alguna y el derecho a la identidad. Además, sanciona y prohíbe toda forma de violencia, trabajo forzoso y explotación en contra de niñas, niños y adolescentes y armoniza procedimientos administrativos y judiciales para la adopción, con el fin de garantizarles una familia.',
                    'fecha'=>'21-07-2014',
                    'indicadores'=>'datos de indicadores,pendiente',
                    'informe_estado'=>'cerberus-test.com/upload/archivo5_informe.pdf',
                    'fuente'=>'Informe Bolivia - CERD 2010')                   
                    ))
                ));
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