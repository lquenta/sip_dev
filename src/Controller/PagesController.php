<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
    public function home(){
        $this->loadModel('Autorizacions');
        $this->loadModel('SolicitudInformacions');
        $this->loadModel('Institucions');
        $this->loadModel('Recomendacions');
        
        
        $autorizacions =  $this->Autorizacions->find('all', [
            'contain' => ['Users', 'Accions', 'Estados']
        ])
            ->where(['Autorizacions.usuario_id ' => $this->Auth->user('id'),'Autorizacions.estado_id '=>'1']);
        //$autorizacions = $this->paginate($autorizacions);
        $solicitudInformacions=$this->SolicitudInformacions->find('all')->where(['usuario_id'=>$this->Auth->user('id'),'estado_id'=>'1']);
        //$solicitudInformacions = $this->paginate($solicitudInformacions);

         

        //seguimientos que necesitan complementar informacion de las instituciones reponsables
        //obtener la institucion asociada al usuario

        $institucion=$this->Institucions->find('all')->where(['id'=>$this->Auth->user('rol_id')])->first();
        /*$recomendaciones_segumiento = $this->Recomendacions->find('all',[
            'contain' => ['Users', 'Estados','Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion.Derechos', 'InstitucionRecomendacion.Institucions', 'MecanismoRecomendacion.Mecanismos', 'PoblacionRecomendacion.Poblacions', 'RecomendacionParametros','InstitucionRecomendacion']
        ])
         ->where(['InstitucionRecomendacion.institucion_id ' => $institucion->id]);
       debug($recomendaciones_segumiento->all());*/

        $this->set(compact('autorizacions','solicitudInformacions'));
        $this->set('_serialize', ['solicitudInformacions']);

        //$solicitudInstituciones= 

    }
}
