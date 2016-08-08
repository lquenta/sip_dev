<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Autorizacions Controller
 *
 * @property \App\Model\Table\AutorizacionsTable $Autorizacions
 */
class AutorizacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Accions', 'Estados']
        ];
        $autorizacions = $this->Autorizacions->find('all')
            ->where(['Autorizacions.usuario_id ' => $this->Auth->user('id'),'Autorizacions.estado_id '=>'1']);
        //debug($autorizacions);
        $autorizacions = $this->paginate($autorizacions);
        $this->set(compact('autorizacions'));
        $this->set('_serialize', ['autorizacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Autorizacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autorizacion = $this->Autorizacions->get($id, [
            'contain' => ['Users', 'Estados', 'Accions']
        ]);

        $this->set('autorizacion', $autorizacion);
        $this->set('_serialize', ['autorizacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autorizacion = $this->Autorizacions->newEntity();
        if ($this->request->is('post')) {
            $autorizacion = $this->Autorizacions->patchEntity($autorizacion, $this->request->data);
            if ($this->Autorizacions->save($autorizacion)) {
                $this->Flash->success(__('The autorizacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The autorizacion could not be saved. Please, try again.'));
            }
        }
        $users = $this->Autorizacions->Users->find('list', ['limit' => 200]);
        $estados = $this->Autorizacions->Estados->find('list', ['limit' => 200]);
        $accions = $this->Autorizacions->Accions->find('list', ['limit' => 200]);
        $this->set(compact('autorizacion', 'users', 'estados', 'accions'));
        $this->set('_serialize', ['autorizacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Autorizacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autorizacion = $this->Autorizacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autorizacion = $this->Autorizacions->patchEntity($autorizacion, $this->request->data);
            if ($this->Autorizacions->save($autorizacion)) {
                $this->Flash->success(__('The autorizacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The autorizacion could not be saved. Please, try again.'));
            }
        }
        $users = $this->Autorizacions->Users->find('list', ['limit' => 200]);
        $estados = $this->Autorizacions->Estados->find('list', ['limit' => 200]);
        $accions = $this->Autorizacions->Accions->find('list', ['limit' => 200]);
        $this->set(compact('autorizacion', 'users', 'estados', 'accions'));
        $this->set('_serialize', ['autorizacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Autorizacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autorizacion = $this->Autorizacions->get($id);
        if ($this->Autorizacions->delete($autorizacion)) {
            $this->Flash->success(__('The autorizacion has been deleted.'));
        } else {
            $this->Flash->error(__('The autorizacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function aprobarAccion($id){
        $this->loadModel('Accions');
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
        $this->loadModel('Notificacions');
        
         $accion =$this->Accions->get($id,[
            'contain' => ['Users', 'Recomendacions', 'AdjuntosAccions']
        ]);
         $recomendacion = $this->Recomendacions->get($accion->recomendacion->id, [
            'contain' => ['Users', 'Estados', 'Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion', 'InstitucionRecomendacion', 'MecanismoRecomendacion', 'PoblacionRecomendacion', 'RecomendacionParametros']
        ]);
         $recomendacions = $this->PoblacionRecomendacion->find('list', ['limit' => 200]);
         $id_recomendacion = $recomendacion->id;
         $acciones =$this->Accions->find('all',[
            'contain' => ['Users', 'Recomendacions', 'AdjuntosAccions']
        ])
         ->where(['Accions.recomendacion_id ' => $id_recomendacion])->toArray();
         $PoblacionRecomendacion =$this->PoblacionRecomendacion->find('list',[
            'keyField' => 'poblacion_id',
            'valueField' => 'poblacion_id'
        ])
         ->where(['PoblacionRecomendacion.recomendacion_id ' =>$id_recomendacion])->toArray();
         
        $poblaciones = $this->Poblacions->find('list', ['limit' => 200])
        ->where(['id IN ' => $PoblacionRecomendacion])
        ->toArray();
        $derechosRecomendacion = $this->DerechoRecomendacion->find('list',[
            'keyField' => 'derecho_id',
            'valueField' => 'derecho_id'
        ])
         ->where(['DerechoRecomendacion.recomendacion_id ' => $id_recomendacion])->toArray();
        
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
         ->where(['InstitucionRecomendacion.recomendacion_id ' => $id_recomendacion])->toArray();
        
        $instituciones=$this->Institucions->find('list', ['limit' => 200])
        ->where(['id IN ' => $institucionsRecomendacion])
        ->toArray();
         $mecanismoRecomendacion = $this->MecanismoRecomendacion->find('list',[
            'keyField' => 'mecanismo_id',
            'valueField' => 'mecanismo_id'
        ])
         ->where(['MecanismoRecomendacion.recomendacion_id ' => $id_recomendacion])->toArray();
        
        $mecanismos=$this->Mecanismos->find('list', ['limit' => 200])
        ->where(['id IN ' => $mecanismoRecomendacion])
        ->toArray();
        //debug(json_encode(array_keys($poblaciones), JSON_PRETTY_PRINT));die;
        $all_poblaciones = $this->Poblacions->find('list', ['limit' => 200])->toArray();
        $all_derechos = $this->Derechos->find('list', ['limit' => 200])->toArray();
        $all_instituciones = $this->Institucions->find('list', ['limit' => 200])->toArray();
        $all_mecanismos = $this->Mecanismos->find('list', ['limit' => 200])->toArray();
        $aprobarAccion = $this->Autorizacions->newEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            //obtener la autorizacion id a partir del recomendacion id y el id del usuario
            $autorizacion_actual=$this->Autorizacions->find('all', ['limit' => 200])
                ->where(['accion_id ' => $id,'usuario_id'=>$this->Auth->user('id')])->first();
            if($autorizacion_actual==null){
                $this->Flash->error(__('Usted no puede autorizar esta recomendacion.'));
            }else{
                $autorizacion_req=array();
                if (isset($this->request->data['btnAprobar'])) {
                   $autorizacion_req = array(
                       'fecha_modificacion'=>date('Y-m-d H:i:s'),
                       'visto_bueno_fisico'=>0,
                      'estado_id'=>'3'
                  );
                   //registrar autorizacion para recomendacion  Min Justicia -> 1 , Procuradoria -> 3 , -> Cancilleria -> 4
                   //si el estado es 2 entonces estamos en la aprobacion 1ra q es del min de justicia y debemos marcarlo y enviarlo para el 2do ejecutor que es procuradoria
                   if($recomendacion->estado_id==2){
                        $recomendacion_req = array(
                          'id'=>$recomendacion->id,
                          'descripcion'=>$recomendacion->descripcion,
                          'fecha_creacion'=>$recomendacion->fecha_creacion,
                          'fecha_modificacion'=>date('Y-m-d H:i:s'),
                          'estado_id'=>'3',
                          'año'=>$recomendacion->año,
                          'codigo'=>$recomendacion->codigo
                          );
                        $recomendacion = $this->Recomendacions->patchEntity($recomendacion, $recomendacion_req);
                        $res_save_recomendacion = $this->Recomendacions->save($recomendacion);
                        //buscamos los autorizadores de la procuradoria 
                        $autorizadores_procuradoria=$this->Users->find()->matching(
                            'Rols', function ($q) {
                                return $q->where(['Rols.institucion_id' => '3']);
                            }
                        );
                        foreach ($autorizadores_procuradoria as $autorizador ) {
                          //registrar autorizacion para recomendacion  Min Justicia -> 1 , Procuradoria -> 3 , -> Cancilleria -> 4
                          //aca una vez que el min de justicia acepte se envia a procuradoria para su atorizacion
                          $autorizacion = $this->Autorizacions->newEntity();
                            $req_autorizacion = array(
                                'usuario_id'=>$autorizador['id'],
                                'accion_id'=>$id,
                                'estado_id'=>1,
                                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                                'visto_bueno_fisico'=>0
                                );
                            $autorizacion = $this->Autorizacions->patchEntity($autorizacion,  $req_autorizacion);
                            $this->Autorizacions->save($autorizacion);
                             $req_notificacion = array(
                                'accion_id'=>$id,
                                'usuario_id'=>$autorizador['id'],
                                'mensaje' => 'debe autorizar la recomendacion con codigo:'.$recomendacion->codigo,
                                'fecha'=>date('Y-m-d H:i:s'),
                                'estado'=>'pendiente'
                                );
                            $notificacion = $this->Notificacions->newEntity();
                            $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                            $this->Notificacions->save($notificacion);
                        }
                   }
                   if($recomendacion->estado_id==3){
                    //se el estado es 5 quiere decir que la procuradoria ya acepto y debemos enviar a la ultima instancia, a cancilleria
                        $recomendacion_req = array(
                          'id'=>$recomendacion->id,
                          'descripcion'=>$recomendacion->descripcion,
                          'fecha_creacion'=>$recomendacion->fecha_creacion,
                          'fecha_modificacion'=>date('Y-m-d H:i:s'),
                          'estado_id'=>'5',
                          'año'=>$recomendacion->año,
                          'codigo'=>$recomendacion->codigo
                          );
                        $recomendacion = $this->Recomendacions->patchEntity($recomendacion, $recomendacion_req);
                        $res_save_recomendacion = $this->Recomendacions->save($recomendacion);
                        //buscamos los autorizadores de la procuradoria 
                        $autorizadores_cancilleria=$this->Users->find()->matching(
                            'Rols', function ($q)  {
                                return $q->where(['Rols.institucion_id' => '4']);
                            }
                        );
                        foreach ($autorizadores_cancilleria as $autorizador ) {
                          //registrar autorizacion para recomendacion  Min Justicia -> 1 , Procuradoria -> 3 , -> Cancilleria -> 4
                          //aca una vez que el min de justicia acepte se envia a procuradoria para su atorizacion
                          $autorizacion = $this->Autorizacions->newEntity();
                            $req_autorizacion = array(
                                'usuario_id'=>$autorizador['id'],
                                'accion_id'=>$id,
                                'estado_id'=>1,
                                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                                'visto_bueno_fisico'=>0
                                );
                            $autorizacion = $this->Autorizacions->patchEntity($autorizacion,  $req_autorizacion);
                            $this->Autorizacions->save($autorizacion);
                             $req_notificacion = array(
                                'accion_id'=>$id,
                                'usuario_id'=>$autorizador['id'],
                                'mensaje' => 'debe autorizar la recomendacion con codigo:'.$recomendacion->codigo,
                                'fecha'=>date('Y-m-d H:i:s'),
                                'estado'=>'pendiente'
                                );
                            $notificacion = $this->Notificacions->newEntity();
                            $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                            $this->Notificacions->save($notificacion);
                        }
                   }
                   if($recomendacion->estado_id==5){
                    //se el estado es 5 quiere decir que la cancilleria ya acepto y debemos marcar la recomendacion como aceptada
                        $recomendacion_req = array(
                          'id'=>$recomendacion->id,
                          'descripcion'=>$recomendacion->descripcion,
                          'fecha_creacion'=>$recomendacion->fecha_creacion,
                          'fecha_modificacion'=>date('Y-m-d H:i:s'),
                          'estado_id'=>'9',
                          'año'=>$recomendacion->año,
                          'codigo'=>$recomendacion->codigo
                          );
                        $recomendacion = $this->Recomendacions->patchEntity($recomendacion, $recomendacion_req);
                        $res_save_recomendacion = $this->Recomendacions->save($recomendacion);
                        
                   }
                } else if (isset($this->request->data['btnRechazar'])) {
                   $autorizacion_req = array(
                        'fecha_modificacion'=>date('Y-m-d H:i:s'),
                        'visto_bueno_fisico'=>0,
                       'estado_id'=>'4'
                       );
                }
                //$autorizacion_actual = $this->Autorizacions->patchEntity($autorizacion, $autorizacion_req);

                //if ($this->Autorizacions->save($autorizacion_actual)) {
                    if(true){
                    $this->Flash->success(__('Recomendacion actualizada correctamente.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('Error en la autorizacion por favor intente de nuevo.'));
                }
            }
            
           
                
            //return $this->redirect(['action' => 'index']);
            
        }
        $users = $this->Accions->Users->find('list', ['limit' => 200]);
        $recomendacions = $this->Accions->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('aprobarAccion','accion','acciones', 'users', 'recomendacions','recomendacion','poblaciones','all_poblaciones','derechos','all_derechos','instituciones','all_instituciones','mecanismos','all_mecanismos',''));
        $this->set('_serialize', ['accion']);
    }
}
