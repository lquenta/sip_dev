<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Accions Controller
 *
 * @property \App\Model\Table\AccionsTable $Accions
 */
class AccionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Recomendacions']
        ];
        $accions = $this->paginate($this->Accions);

        $this->set(compact('accions'));
        $this->set('_serialize', ['accions']);
    }

    /**
     * View method
     *
     * @param string|null $id Accion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accion = $this->Accions->get($id, [
            'contain' => ['Users', 'Recomendacions', 'AdjuntosAccions']
        ]);

        $this->set('accion', $accion);
        $this->set('_serialize', ['accion']);
    }
     function sanitize($string, $force_lowercase = true, $anal = false) {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]","}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;","â€”", "â€“", ",", "<",">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
        return ($force_lowercase) ?
            (function_exists('mb_strtolower')) ?
                mb_strtolower($clean, 'UTF-8') :
                strtolower($clean) :
            $clean;
    }
    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {
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
        $this->loadModel('Users');
        $this->loadModel('Autorizacions');
        $this->loadModel('Notificacions');
        
        
        
         $recomendacion = $this->Recomendacions->get($id, [
            'contain' => ['Users', 'Estados', 'Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion', 'InstitucionRecomendacion', 'MecanismoRecomendacion', 'PoblacionRecomendacion', 'RecomendacionParametros', 'Revisions', 'Versions']
        ]);
         $recomendacions = $this->PoblacionRecomendacion->find('list', ['limit' => 200]);
         $PoblacionRecomendacion =$this->PoblacionRecomendacion->find('list',[
            'keyField' => 'poblacion_id',
            'valueField' => 'poblacion_id'
        ])
         ->where(['PoblacionRecomendacion.recomendacion_id ' => $id])->toArray();
        $poblaciones = $this->Poblacions->find('list', ['limit' => 200])
        ->where(['id IN ' => $PoblacionRecomendacion])
        ->toArray();
        $derechosRecomendacion = $this->DerechoRecomendacion->find('list',[
            'keyField' => 'derecho_id',
            'valueField' => 'derecho_id'
        ])
         ->where(['DerechoRecomendacion.recomendacion_id ' => $id])->toArray();
       
        $derechos=$this->Derechos->find('list', ['limit' => 200])
        ->where(['id IN ' => $derechosRecomendacion])
        ->toArray();
        //obtenemos los indicadores por derechos
        $indicadores_derechos = $this->IndicadoresDerechos->find('list', 
            ['keyField' => 'indicador_id',
            'valueField' => 'indicador_id'
        ])
        ->where(['IndicadoresDerechos.derecho_id IN ' => $derechos])
        ->toArray();
        $institucionsRecomendacion = $this->InstitucionRecomendacion->find('list',[
            'keyField' => 'institucion_id',
            'valueField' => 'institucion_id'
        ])
         ->where(['InstitucionRecomendacion.recomendacion_id ' => $id])->toArray();
        $instituciones=$this->Institucions->find('list', ['limit' => 200])
        ->where(['id IN ' => $institucionsRecomendacion])
        ->toArray();
         $mecanismoRecomendacion = $this->MecanismoRecomendacion->find('list',[
            'keyField' => 'mecanismo_id',
            'valueField' => 'mecanismo_id'
        ])
         ->where(['MecanismoRecomendacion.recomendacion_id ' => $id])->toArray();
        
        $mecanismos=$this->Mecanismos->find('list', ['limit' => 200])
        ->where(['id IN ' => $mecanismoRecomendacion])
        ->toArray();
        //debug(json_encode(array_keys($poblaciones), JSON_PRETTY_PRINT));die;
        $all_poblaciones = $this->Poblacions->find('list', ['limit' => 200])->toArray();
        $all_derechos = $this->Derechos->find('list', ['limit' => 200])->toArray();
        $all_instituciones = $this->Institucions->find('list', ['limit' => 200])->toArray();
        $all_mecanismos = $this->Mecanismos->find('list', ['limit' => 200])->toArray();
        $accion = $this->Accions->newEntity();
        if ($this->request->is('post')) {
            //para recomendacion entity
            $codigo_accion=$this->Accions->obtenerUltimoCodigoAccion($id);
            $request = $this->request->data;
            $accion_req = array(
                'codigo'=>$codigo_accion,
                'descripcion'=>$request['descripcion'],
                'fecha'=>date('Y-m-d H:i:s'),
                'usuario_id'=>$this->Auth->user('id'),
                'recomendacion_id'=>$id,
                'listado' =>$request['listado'],
                );
            $accion = $this->Accions->newEntity();
            $accion = $this->Accions->patchEntity($accion, $accion_req);
            $res_save_accion = $this->Accions->save($accion);
            if ($res_save_accion) {
                 $last_id_accion = $res_save_accion->id;
                foreach ($institucionsRecomendacion as $institucion) {
                     debug($institucion);
                       //obtener todos los usuarios asociados a la institucion+
                      $query =  $this->Users->find()->matching(
                          'Rols', function ($q) use ($institucion) {
                              return $q->where(['Rols.institucion_id' => $institucion]);
                          }
                      );
                      debug($query);die;
                      foreach ($query  as $usuario) {
                          //registrar autorizacion para recomendacion
                          $autorizacion = $this->Autorizacions->newEntity();
                          $req_autorizacion = array(
                              'usuario_id'=>$usuario['id'],
                              'accion_id'=>$last_id_accion,
                              'estado_id'=>1,
                              'fecha_modificacion'=>date('Y-m-d H:i:s'),
                              'visto_bueno_fisico'=>0
                              );
                          $autorizacion = $this->Autorizacions->patchEntity($autorizacion,  $req_autorizacion);
                          $this->Autorizacions->save($autorizacion);
                          //registrar notificacion
                          $req_notificacion = array(
                              'accion_id'=>$last_id_accion,
                              'usuario_id'=>$usuario['id'],
                              'mensaje' => 'debe revisar la recomendacion con codigo:'.$codigo_accion,
                              'fecha'=>date('Y-m-d H:i:s'),
                              'estado'=>'pendiente'
                              );
                          $notificacion = $this->Notificacions->newEntity();
                          $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                          $this->Notificacions->save($notificacion);
                      }
                       
                  }
               
                $adjuntos_accion = $this->request->data['adjuntos_accion'];
                foreach ($adjuntos_accion as $adjunto ) {
                    $adjunto_req = [
                        'name' => $adjunto['name'],
                        'type' => $adjunto['type'],
                        'tmp_name' => $adjunto['tmp_name'],
                        'error' => $adjunto['error'],
                        'size' => $adjunto['size']
                    ];
                    $adjunto_req['name']=$this->sanitize($adjunto_req['name']);
                    //$file_name =  ROOT .DS. 'uploads' .DS. time().'_'.$adjunto_req['name'];
                    $file_name_part = time().'_'.$adjunto_req['name'];
                    $file_name =  ROOT .DS. 'webroot'.DS.'uploads'.DS. $file_name_part;
                    $res=move_uploaded_file($adjunto_req['tmp_name'],$file_name); 
                    $adj_save = array(
                        'accion_id'=>$last_id_accion,
                        'link'=>$file_name_part);
                    $adjuntosAccions = $this->AdjuntosAccions->newEntity();
                    $adjuntosAccions = $this->AdjuntosAccions->patchEntity($adjuntosAccions, $adj_save);
                    $this->AdjuntosAccions->save($adjuntosAccions);
                }
                $this->Flash->success(__('La accion se ha guardado.'));
                return $this->redirect(['controller'=>'Autorizacions','action' => 'index']);
            } else {
                $this->Flash->error(__('La accion no se ha guardado, por favor intente de nuevo.'));
            }
        }
        $users = $this->Accions->Users->find('list', ['limit' => 200]);
        $incidencia_indicadores = [
           'Derecho 1' => [
              '0' => 'Indicador 1',
           ],
           'Derecho 2' => [
              '1' => 'Indicador 2'
           ]
        ];
         $codigo_accion=$this->Accions->obtenerUltimoCodigoAccion($id);
        $recomendacions = $this->Accions->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('accion', 'users', 'recomendacions','recomendacion','poblaciones','all_poblaciones','derechos','all_derechos','instituciones','all_instituciones','mecanismos','all_mecanismos','codigo_accion','incidencia_indicadores'));
        $this->set('_serialize', ['accion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Accion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accion = $this->Accions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accion = $this->Accions->patchEntity($accion, $this->request->data);
            if ($this->Accions->save($accion)) {
                $this->Flash->success(__('The accion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The accion could not be saved. Please, try again.'));
            }
        }
        $users = $this->Accions->Users->find('list', ['limit' => 200]);
        $recomendacions = $this->Accions->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('accion', 'users', 'recomendacions'));
        $this->set('_serialize', ['accion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Accion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accion = $this->Accions->get($id);
        if ($this->Accions->delete($accion)) {
            $this->Flash->success(__('The accion has been deleted.'));
        } else {
            $this->Flash->error(__('The accion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
