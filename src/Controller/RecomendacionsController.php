<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recomendacions Controller
 *
 * @property \App\Model\Table\RecomendacionsTable $Recomendacions
 */
class RecomendacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Estados','Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion.Derechos', 'InstitucionRecomendacion.Institucions', 'MecanismoRecomendacion.Mecanismos', 'PoblacionRecomendacion.Poblacions', 'RecomendacionParametros']
        ];

        $recomendacions = $this->paginate($this->Recomendacions->find()->order(['Recomendacions.id' => 'DESC']));

        $this->set(compact('recomendacions'));
        $this->set('_serialize', ['recomendacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recomendacion = $this->Recomendacions->get($id, [
            'contain' => ['Users', 'Estados', 'Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion', 'InstitucionRecomendacion', 'MecanismoRecomendacion', 'PoblacionRecomendacion', 'RecomendacionParametros']
        ]);

        $this->set('recomendacion', $recomendacion);
        $this->set('_serialize', ['recomendacion']);
    }

    

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Poblacions');
        $this->loadModel('Derechos');
        $this->loadModel('Institucions');
        $this->loadModel('Mecanismos');
        $this->loadModel('PoblacionRecomendacion');
        $this->loadModel('DerechoRecomendacion');
        $this->loadModel('InstitucionRecomendacion');
        $this->loadModel('MecanismoRecomendacion');
        $this->loadModel('AdjuntosRecomendacions');
        $this->loadModel('Users');
        $this->loadModel('Notificacions');
        $this->loadModel('Autorizacions');
        $this->loadModel('Comites');

        
        $recomendacion = $this->Recomendacions->newEntity();
        if ($this->request->is('post')) {
             if (isset($this->request->data['btnGuardar'])) {
                $estado=1;
             }
             else if (isset($this->request->data['btnPublicar'])) {
                $estado=9;
             }
            //para recomendacion entity
            $codigo_recomendacion=$this->Recomendacions->obtenerUltimoCodigoRecomendacion();
            $request = $this->request->data;
            $recomendacion_req = array(
                'codigo'=>$codigo_recomendacion,
                'descripcion'=>$request['descripcion'],
                'fecha_creacion'=>date('Y-m-d H:i:s'),
                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                'usuario_id'=>$this->Auth->user('id'),
                'estado_id'=>$estado
                );
            $recomendacion = $this->Recomendacions->patchEntity($recomendacion, $recomendacion_req);
            $res_save_recomendacion = $this->Recomendacions->save($recomendacion);
            
            if ($res_save_recomendacion) {
                $last_id_recomendacion = $res_save_recomendacion->id;
                //para los relacionados a Poblacion_recomendacion
                
                foreach ($request['poblaciones'] as $poblacion) {
                    $poblacionRecomendacion = $this->PoblacionRecomendacion->newEntity();
                      $poblacion_recomendacion_req = array(
                        'recomendacion_id'=>$last_id_recomendacion,
                        'poblacion_id'=>$poblacion
                        );
                    $poblacionRecomendacion = $this->PoblacionRecomendacion->patchEntity($poblacionRecomendacion, $poblacion_recomendacion_req);
                     $res_save_pob_rec=$this->PoblacionRecomendacion->save($poblacionRecomendacion); 
                    
                }
                foreach ($request['derecho'] as $derecho) {
                    $derechoRecomendacion = $this->DerechoRecomendacion->newEntity();
                    $derecho_recomendacion_req = array(
                        'recomendacion_id'=>$last_id_recomendacion,
                        'derecho_id'=>$derecho
                        );
                    $derechoRecomendacion = $this->DerechoRecomendacion->patchEntity($derechoRecomendacion, $derecho_recomendacion_req);
                     $res_save_der_rec=$this->DerechoRecomendacion->save($derechoRecomendacion); 
                }
                foreach ($request['institucions'] as $institucion) {
                      $institucionRecomendacion = $this->InstitucionRecomendacion->newEntity();
                      $institucion_recomendacion_req = array(
                          'recomendacion_id'=>$last_id_recomendacion,
                          'institucion_id'=>$institucion
                          );
                      $institucionRecomendacion = $this->InstitucionRecomendacion->patchEntity($institucionRecomendacion, $institucion_recomendacion_req);
                       //$res_save_ins_rec=$this->InstitucionRecomendacion->save($institucionRecomendacion); 
                       //obtener todos los usuarios asociados a la institucion+
                      $query =  $this->Users->find()->matching(
                          'Rols', function ($q) use ($institucion) {
                              return $q->where(['Rols.institucion_id' => $institucion]);
                          }
                      );
                      /*foreach ($query  as $usuario) {
                          //registrar autorizacion para recomendacion
                          $autorizacion = $this->Autorizacions->newEntity();
                          $req_autorizacion = array(
                              'usuario_id'=>$usuario['id'],
                              'recomendacion_id'=>$last_id_recomendacion,
                              'estado_id'=>1,
                              'fecha_modificacion'=>date('Y-m-d H:i:s'),
                              'visto_bueno_fisico'=>0
                              );
                          $autorizacion = $this->Autorizacions->patchEntity($autorizacion,  $req_autorizacion);
                          $this->Autorizacions->save($autorizacion);
                          //registrar notificacion
                          $req_notificacion = array(
                              'recomendacion_id'=>$last_id_recomendacion,
                              'usuario_id'=>$usuario['id'],
                              'mensaje' => 'debe revisar la recomendacion con id:'.$last_id_recomendacion,
                              'fecha'=>date('Y-m-d H:i:s'),
                              'estado'=>'pendiente'
                              );
                          $notificacion = $this->Notificacions->newEntity();
                          $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                          $this->Notificacions->save($notificacion);
                      }*/
                       
                  }
                foreach ($request['institucions'] as $institucions) {
                    $institucionRecomendacion = $this->InstitucionRecomendacion->newEntity();
                    $institucion_recomendacion_req = array(
                        'recomendacion_id'=>$last_id_recomendacion,
                        'institucion_id'=>$institucions
                        );
                    $institucionRecomendacion = $this->InstitucionRecomendacion->patchEntity($institucionRecomendacion, $institucion_recomendacion_req);
                     $res_save_ins_rec=$this->InstitucionRecomendacion->save($institucionRecomendacion); 
                     //obtener todos los usuarios asociados a la institucion+
                     
                     
                }
                foreach ($request['mecanismos'] as $mecanismos) {
                    $mecanismoRecomendacion = $this->MecanismoRecomendacion->newEntity();
                    $mecanismo_recomendacion_req = array(
                        'recomendacion_id'=>$last_id_recomendacion,
                        'mecanismo_id'=>$mecanismos
                        );
                    $mecanismoRecomendacion = $this->MecanismoRecomendacion->patchEntity($mecanismoRecomendacion, $mecanismo_recomendacion_req);
                     $res_save_mec_rec=$this->MecanismoRecomendacion->save($mecanismoRecomendacion); 
                }
                $adjuntos_recomendacion = $this->request->data['adjuntos_recomendacion'];
                foreach ($adjuntos_recomendacion as $adjunto ) {
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
                        'recomendacion_id'=>$last_id_recomendacion,
                        'link'=>$file_name_part);
                    $adjuntosRecomendacion = $this->AdjuntosRecomendacions->newEntity();
                    $adjuntosRecomendacion = $this->AdjuntosRecomendacions->patchEntity($adjuntosRecomendacion, $adj_save);
                    $this->AdjuntosRecomendacions->save($adjuntosRecomendacion);
                }
                
                
                $this->Flash->success(__('La recomendacion se ha guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La recomendacion no se ha guardado, por favor intente de nuevo.'));
            }
           
        }
        $users = $this->Recomendacions->Users->find('list', ['limit' => 5]);
        $estados = $this->Recomendacions->Estados->find('list', ['limit' => 5]);
       
        $poblaciones = $this->Poblacions->find('list', ['limit' => 5])->toArray();
        $derecho = $this->Derechos->find('list', ['limit' => 5])->toArray();
        $institucions = $this->Institucions->find('list')->toArray();

        $mecanismos = $this->Mecanismos->find('list', ['limit' => 5])->toArray();
        $listmecanismos = $this->Mecanismos->find()->toArray();
        $codigo_recomendacion=$this->Recomendacions->obtenerUltimoCodigoRecomendacion();
        $gruposInstitucioones = $this->Institucions->find();
        $gruposInstitucioones->select(['grupo'])->distinct(['grupo'])->all();
        $institucionesNew = $this->Institucions->find()->toArray();
        $comites = $this->Comites->find()->toArray();

        $this->set(compact('recomendacion', 'users', 'estados','poblaciones','derecho','institucions','mecanismos','codigo_recomendacion', 'gruposInstitucioones','institucionesNew','listmecanismos', 'comites'));
        $this->set('_serialize', ['recomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
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
        
         $recomendacion = $this->Recomendacions->get($id, [
            'contain' => ['Users', 'Estados', 'Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion', 'InstitucionRecomendacion', 'MecanismoRecomendacion', 'Notificacions', 'PoblacionRecomendacion', 'RecomendacionParametros', 'Revisions', 'Versions']
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
        //if ($this->request->is(['patch', 'post', 'put'])) {
        if ($this->request->is(['post'])) {
            debug($this->request->data);
             if (isset($this->request->data['btnGuardar'])) {
                $estado=1;
             }
             else if (isset($this->request->data['btnPublicar'])) {
                $estado=9;
             }
            //para recomendacion entity
            $request = $this->request->data;
            $recomendacion_req = array(
                'id'=>$id,
                'codigo'=>$request['codigo'],
                'descripcion'=>$request['descripcion'],
                'fecha_creacion'=>date('Y-m-d H:i:s'),
                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                'año'=>$request['año'],
                'usuario_id'=>$this->Auth->user('id'),
                'estado_id'=>$estado
                );
            $recomendacion = $this->Recomendacions->patchEntity($recomendacion, $recomendacion_req);
            $res_save_recomendacion = $this->Recomendacions->save($recomendacion);
            
            if ($res_save_recomendacion) {
                //para los relacionados a Poblacion_recomendacion
                
                foreach ($request['poblaciones'] as $poblacion) {
                    $poblacionRecomendacion = $this->PoblacionRecomendacion->newEntity();
                      $poblacion_recomendacion_req = array(
                        'recomendacion_id'=>$id,
                        'poblacion_id'=>$poblacion
                        );
                    $poblacionRecomendacion = $this->PoblacionRecomendacion->patchEntity($poblacionRecomendacion, $poblacion_recomendacion_req);
                     $res_save_pob_rec=$this->PoblacionRecomendacion->save($poblacionRecomendacion); 
                    
                }
                foreach ($request['derecho'] as $derecho) {
                    $derechoRecomendacion = $this->DerechoRecomendacion->newEntity();
                    $derecho_recomendacion_req = array(
                        'recomendacion_id'=>$id,
                        'derecho_id'=>$derecho
                        );
                    $derechoRecomendacion = $this->DerechoRecomendacion->patchEntity($derechoRecomendacion, $derecho_recomendacion_req);
                     $res_save_der_rec=$this->DerechoRecomendacion->save($derechoRecomendacion); 
                }
               
                foreach ($request['institucions'] as $institucions) {
                    $institucionRecomendacion = $this->InstitucionRecomendacion->newEntity();
                    $institucion_recomendacion_req = array(
                        'recomendacion_id'=>$id,
                        'institucion_id'=>$institucions
                        );
                    $institucionRecomendacion = $this->InstitucionRecomendacion->patchEntity($institucionRecomendacion, $institucion_recomendacion_req);
                     $res_save_ins_rec=$this->InstitucionRecomendacion->save($institucionRecomendacion); 
                     //obtener todos los usuarios asociados a la institucion+
                     
                     
                }
                foreach ($request['mecanismos'] as $mecanismos) {
                    $mecanismoRecomendacion = $this->MecanismoRecomendacion->newEntity();
                    $mecanismo_recomendacion_req = array(
                        'recomendacion_id'=>$id,
                        'mecanismo_id'=>$mecanismos
                        );
                    $mecanismoRecomendacion = $this->MecanismoRecomendacion->patchEntity($mecanismoRecomendacion, $mecanismo_recomendacion_req);
                     $res_save_mec_rec=$this->MecanismoRecomendacion->save($mecanismoRecomendacion); 
                }
                $adjuntos_recomendacion = $this->request->data['adjuntos_recomendacion'];
                foreach ($adjuntos_recomendacion as $adjunto ) {
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
                        'recomendacion_id'=>$id,
                        'link'=>$file_name_part);
                    $adjuntosRecomendacion = $this->AdjuntosRecomendacions->newEntity();
                    $adjuntosRecomendacion = $this->AdjuntosRecomendacions->patchEntity($adjuntosRecomendacion, $adj_save);
                    $this->AdjuntosRecomendacions->save($adjuntosRecomendacion);
                }
                
                
                $this->Flash->success(__('La recomendacion se ha guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La recomendacion no se ha guardado, por favor intente de nuevo.'));
            }
           
        }
        $users = $this->Recomendacions->Users->find('list', ['limit' => 200]);
        $recomendacions = $this->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact( 'users', 'recomendacions','recomendacion','poblaciones','all_poblaciones','derechos','all_derechos','instituciones','all_instituciones','mecanismos','all_mecanismos'));
        $this->set('_serialize', ['recomendacion']);
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recomendacion = $this->Recomendacions->get($id);
        if ($this->Recomendacions->delete($recomendacion)) {
            $this->Flash->success(__('The recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The recomendacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
