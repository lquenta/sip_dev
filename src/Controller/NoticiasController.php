<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
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
        $this->response->cors($this->request)
            ->allowOrigin(['*'])
            ->allowMethods(['GET', 'POST'])
            ->allowHeaders(['X-CSRF-Token'])
            ->allowCredentials()
            ->exposeHeaders(['Link'])
            ->maxAge(300)
            ->build();
         $full_url=Router::url('/', true);;
        $resultados=array(
            'resultados'=>
                array(
                    array('id_noticia'=>1,
                        'titular'=>'BOLIVIA en el Examen Periódico Universal 2014',
                        'contenido'=> 'En Octubre de 2014, en el marco de su segundo informe al Examen Periódico Universal (EPU), el Estado boliviano se comprometió voluntariamente a la “Creación de un espacio interministerial en derechos humanos para la elaboración de informes periódicos.”  A partir de entonces, y en cumplimiento a este compromiso, el Ministerio de Relaciones Exteriores, el Ministerio de Justicia y la Procuraduría General del Estado, con el apoyo de la OACNUDH Bolivia, trabajaron en la conformación de un espacio de coordinación interinstitucional para la elaboración, presentación y defensa de Informes del Estado Plurinacional de Bolivia ante los diferentes mecanismos de protección de los derechos humanos de la Organización de Naciones Unidas, y en la creación paralela de un Sistema de Seguimiento, Monitoreo y Estadísticas de las recomendaciones sobre derechos humanos aceptadas por el Estado, denominado SIPLUS Bolivia. Este esfuerzo fue oficializado a través de un Convenio de Cooperación firmado el 01 de diciembre de 2015 entre estas instituciones.<br\>El EPU es el mecanismo de protección más reciente creado por el Consejo de Derechos Humanos de la Organización de Naciones Unidas. Es un proceso único al que los 193 Estados Miembros de la ONU se presentan voluntariamente para dar a conocer ante sus pares la situación de los derechos humanos en sus países y asumen, en muchos casos, compromisos voluntarios en materia de derechos humanos. Tras un diálogo interactivo entre Estados, el Estado examinado recibe recomendaciones con la posibilidad de aceptarlas o rechazarlas. <br\>Bolivia presentó dos informes EPU en 2010 y 2014. <br\>
                            •   <a href="http://www.ohchr.org/EN/HRBodies/UPR/Pages/BOSession20.aspx">Aquí</a>.    Informes de Bolivia ante el Examen Periódico Universal.<br\>
                            •   <a href="http://webtv.un.org/meetings-events/watch/bolivia-upr-report-consideration-38th-meeting-28th-regular-session-human-rights-council/4119476801001">Aquí</a>.    Video de la presentación del segundo informe EPU de Bolivia el año 2014.',
                        'fecha'=>'01-10-2012',
                        'estado'=>'1',
                        'link_imagen'=>$full_url.'/images/noticia1.jpg'
                    ),
                    array('id_noticia'=>2,
                        'titular'=>'Presentación oficial del Sistema Plurinacional de Seguimiento, Monitoreo y Estadística de Recomendaciones sobre Derechos Humanos en Bolivia: SIPLUS Bolivia',
                        'contenido'=> 'El 10 de diciembre 2015, en conmemoración al Día Internacional de los Derechos Humanos, el Ministerio de Justicia, el Ministerio de Relaciones Exteriores y la Procuraduría General de Estado, con el apoyo técnica de la Oficina en Bolivia del Alto Comisionado de las Naciones Unidas para los Derechos Humanos, realizaron la presentación de la primera versión del Sistema Plurinacional de Seguimiento, Monitoreo y Estadística de Recomendaciones sobre Derechos Humanos en Bolivia (SIPLUS Bolivia).<br/>
                            El Viceministro de Justicia y Derechos Fundamentales, Sr. Diego Jiménez, expresó:  “El objeto es facilitar la búsqueda de recomendaciones, hacer el seguimiento de las acciones llevadas a cabo por el Estado respecto a éstas y conocer datos estadísticos vinculados  a los esfuerzos del Estado en el cumplimiento de sus obligaciones en materia de derechos humanos”.',
                        'fecha'=>'11-12-2015',
                        'estado'=>'1',
                        'link_imagen'=>$full_url.'/images/noticia2.jpg'
                    ),
                     array('id_noticia'=>3,
                        'titular'=>'Informe del Estado Plurinacional de Bolivia ante el Comité de los Derechos de las Personas con Discapacidad de la Organización de las Naciones Unidas (ONU)',
                        'contenido'=> 'La delegación del Estado Plurinacional de Bolivia, encabezada por la Ministra de Justicia, Dra. Virginia Velasco Condori, y la Embajadora de la Misión Permanente de Bolivia ante la Organización de las Naciones Unidas, Dra. Nardi Suxo Iturry, junto a su equipo técnico, participaron  en la ciudad de Ginebra- Suiza los días 17 y 18 de agosto de 2016, en la presentación del Informe del Estado ante el Comité de los Derechos de las Personas con Discapacidad. <br/>
El Informe fue revisado en el marco del espacio de coordinación interinstitucional para la elaboración, presentación y defensa de Informes del Estado Plurinacional de Bolivia ante los diferentes mecanismos de protección de los derechos humanos de la Organización de Naciones Unidas. Fue una primera experiencia exitosa de trabajo de este espacio en la que, además de las instituciones que conforman esta instancia, participó el equipo técnico del Viceministerio de Igualdad de Oportunidades del Ministerio de Justicia, quienes se encargaron de la elaboración de este informe. Además de la revisión del informe, el espacio de coordinación interinstitucional sirvió para preparar a la delegación del Estado respecto a aspectos técnicos de la modalidad de trabajo del Comité de los Derechos de las Personas con Discapacidad.<br/>
Las recomendaciones emitidas por el Comité de los Derechos de las Personas con Discapacidad serán incorporadas en la base de datos del SIPLUS Bolivia.

Video de la presentación del Informe de Bolivia ante el Comité de los Derechos de las Personas con Discapacidad 2016: <a href="http://webtv.un.org/meetings-events/watch/bolivia-16th-session-of-committee-on-rights-of-persons-with-disabilities/5104154403001">http://webtv.un.org/meetings-events/watch/bolivia-16th-session-of-committee-on-rights-of-persons-with-disabilities/5104154403001"</a>
',
                        'fecha'=>'17-08-2016',
                        'estado'=>'1',
                        'link_imagen'=>$full_url.'/images/noticia3.jpg'
                    ),
                      array('id_noticia'=>4,
                        'titular'=>'¡Baja la aplicación del SIPLUS en tu celular! ',
                        'contenido'=> 'http://www.boliviaentusmanos.com/noticias/.',
                        'fecha'=>'09-06-2014',
                        'estado'=>'1',
                        'link_imagen'=>$full_url.'/images/noticia1.jpg'
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