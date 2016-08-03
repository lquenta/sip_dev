<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
class NoticiasController extends AppController
{
    public function beforeFilter(Event $event)
    {
        // allow only login, forgotpassword
         $this->Auth->allow(['index','view','todas']);
    }

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    public function todas(){
        $resultados=array(
            'resultados'=>
                array(
                    array('id_noticia'=>1,
                        'titular'=>'Noticia no publicada 1',
                        'contenido'=> '<strong>Lorem</strong> ipsum dolor sit amet, consectetur adipiscing elit. Proin in placerat lacus. Quisque bibendum tincidunt est id pretium. Nulla vitae nisl eget metus rutrum euismod. Maecenas sit amet nibh viverra eros volutpat tincidunt. Duis mi turpis, fermentum pretium luctus sit amet, mattis a tellus. Praesent in nibh maximus, dignissim eros eget, fermentum urna. Donec vehicula mauris lectus, vel porta nisi vestibulum eget. Morbi aliquam urna at aliquet mollis. Ut ultricies risus nec purus mollis tincidunt. Fusce vehicula a urna eget iaculis. Proin ac dui placerat elit consequat efficitur. Fusce ac massa id ex iaculis iaculis sit amet nec mi. Fusce suscipit, felis et mollis elementum, nisl orci accumsan dui, sit amet congue sem risus in dui. Nunc ac pharetra quam. Sed eleifend leo eget justo volutpat viverra. Aenean sed risus neque. Quisque sit amet nisi eu mauris consectetur facilisis sit amet eget ipsum. Maecenas massa libero, elementum vitae mattis sit amet, vulputate blandit metus. Sed egestas sagittis sapien, id tempor quam.<br\>Ut placerat quam orci, eu vulputate metus euismod vel. Quisque interdum sodales ornare. Quisque vel turpis dictum lacus pellentesque lobortis a at turpis. Aenean lacus lectus, porttitor vel eros nec, mollis sagittis lectus. Sed et fringilla tellus. Aliquam tempor mauris sit amet tincidunt faucibus. Morbi tempor in dui quis cursus.',
                        'fecha'=>'09-06- 2012',
                        'estado'=>'0',
                        'link_imagen'=>'https://placebear.com/g/200/300'
                    ),
                    array('id_noticia'=>2,
                        'titular'=>'Noticia no publicada 2',
                        'contenido'=> '<strong>Lorem</strong> ipsum dolor sit amet, consectetur adipiscing elit. Proin in placerat lacus. Quisque bibendum tincidunt est id pretium. Nulla vitae nisl eget metus rutrum euismod. Maecenas sit amet nibh viverra eros volutpat tincidunt. Duis mi turpis, fermentum pretium luctus sit amet, mattis a tellus. Praesent in nibh maximus, dignissim eros eget, fermentum urna. Donec vehicula mauris lectus, vel porta nisi vestibulum eget. Morbi aliquam urna at aliquet mollis. Ut ultricies risus nec purus mollis tincidunt. Fusce vehicula a urna eget iaculis. Proin ac dui placerat elit consequat efficitur. Fusce ac massa id ex iaculis iaculis sit amet nec mi. Fusce suscipit, felis et mollis elementum, nisl orci accumsan dui, sit amet congue sem risus in dui. Nunc ac pharetra quam. Sed eleifend leo eget justo volutpat viverra. Aenean sed risus neque. Quisque sit amet nisi eu mauris consectetur facilisis sit amet eget ipsum. Maecenas massa libero, elementum vitae mattis sit amet, vulputate blandit metus. Sed egestas sagittis sapien, id tempor quam.<br\>Ut placerat quam orci, eu vulputate metus euismod vel. Quisque interdum sodales ornare. Quisque vel turpis dictum lacus pellentesque lobortis a at turpis. Aenean lacus lectus, porttitor vel eros nec, mollis sagittis lectus. Sed et fringilla tellus. Aliquam tempor mauris sit amet tincidunt faucibus. Morbi tempor in dui quis cursus.',
                        'fecha'=>'09-06- 2011',
                        'estado'=>'0',
                        'link_imagen'=>'https://placebear.com/g/200/300'
                    ),
                     array('id_noticia'=>3,
                        'titular'=>'Noticia si publicada 3',
                        'contenido'=> '<strong>Lorem</strong> ipsum dolor sit amet, consectetur adipiscing elit. Proin in placerat lacus. Quisque bibendum tincidunt est id pretium. Nulla vitae nisl eget metus rutrum euismod. Maecenas sit amet nibh viverra eros volutpat tincidunt. Duis mi turpis, fermentum pretium luctus sit amet, mattis a tellus. Praesent in nibh maximus, dignissim eros eget, fermentum urna. Donec vehicula mauris lectus, vel porta nisi vestibulum eget. Morbi aliquam urna at aliquet mollis. Ut ultricies risus nec purus mollis tincidunt. Fusce vehicula a urna eget iaculis. Proin ac dui placerat elit consequat efficitur. Fusce ac massa id ex iaculis iaculis sit amet nec mi. Fusce suscipit, felis et mollis elementum, nisl orci accumsan dui, sit amet congue sem risus in dui. Nunc ac pharetra quam. Sed eleifend leo eget justo volutpat viverra. Aenean sed risus neque. Quisque sit amet nisi eu mauris consectetur facilisis sit amet eget ipsum. Maecenas massa libero, elementum vitae mattis sit amet, vulputate blandit metus. Sed egestas sagittis sapien, id tempor quam.<br\>Ut placerat quam orci, eu vulputate metus euismod vel. Quisque interdum sodales ornare. Quisque vel turpis dictum lacus pellentesque lobortis a at turpis. Aenean lacus lectus, porttitor vel eros nec, mollis sagittis lectus. Sed et fringilla tellus. Aliquam tempor mauris sit amet tincidunt faucibus. Morbi tempor in dui quis cursus.',
                        'fecha'=>'09-06-2010',
                        'estado'=>'1',
                        'link_imagen'=>'https://placebear.com/g/200/300'
                    ),
                      array('id_noticia'=>4,
                        'titular'=>'Noticia si publicada 4 solo link',
                        'contenido'=> 'http://www.boliviaentusmanos.com/noticias/.',
                        'fecha'=>'09-06-2014',
                        'estado'=>'1',
                        'link_imagen'=>'https://placebear.com/g/200/300'
                    ),
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
    public function view($textoBusqueda,$mecanismo_proteccion,$grupo_poblacional,$derechos,$institucion,$año_recomendacion){
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

}