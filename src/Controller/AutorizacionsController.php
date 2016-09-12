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
        $this->loadModel('AccionSolicitud');
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
        $this->loadModel('AccionSolicitud');
        $this->loadModel('Consolidados');
        $this->loadModel('AdjuntosConsolidados');
        $this->loadModel('Indicadors');
        $this->loadModel('ComiteRecomendacions');
        $this->loadModel('Comites');
        $this->loadModel('ConsolidadoIndicadores');

        $listIndicadores = $this->Indicadors->find('list')->toArray();
       
        $listGruGrupoIndicadores = $this->Indicadors->obtenerGruposIndicadors();

        

        $listInstitucionAccion = $this->Institucions->obtenerInstitucionAccion($id);

        $listInstitucionAccionUnique = array();
        

       foreach ($listInstitucionAccion as $institucion)
       {
          $existe = false;
          foreach ($listInstitucionAccionUnique as $key) {
            if ($key['descripcion'] == $institucion['descripcion']) {
              $existe = true;
            }
          }
           if (!$existe)
           {
              array_push($listInstitucionAccionUnique, $institucion);     
           }        
       }

        

        $ListIndicadresInstAccion = array();


        foreach ($listInstitucionAccion as $itemInsAccion) {
            $ListIndicadresInstAccion[$itemInsAccion["accion_sol_id"]] = $this->AccionSolicitud->getIndicadores($itemInsAccion['accion_sol_id']);  
        }
        
         

         $accion =$this->Accions->get($id,[
            'contain' => ['Users', 'Recomendacions', 'AdjuntosAccions']
        ]);
         $accion_solicitudes=$this->AccionSolicitud->find('all',[
            'contain' => ['Institucions']
        ])->where(['accion_id'=>$id]);
         $recomendacion = $this->Recomendacions->get($accion->recomendacion->id, [
            'contain' => ['Users', 'Estados', 'Accions', 'AdjuntosRecomendacions', 'DerechoRecomendacion', 'InstitucionRecomendacion', 'MecanismoRecomendacion', 'PoblacionRecomendacion', 'RecomendacionParametros']
        ]);
         $recomendacions = $this->PoblacionRecomendacion->find('list', ['limit' => 5]);
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
         
        $poblaciones = $this->Poblacions->find('list', ['limit' => 5])
        ->where(['id IN ' => $PoblacionRecomendacion])
        ->toArray();
        $derechosRecomendacion = $this->DerechoRecomendacion->find('list',[
            'keyField' => 'derecho_id',
            'valueField' => 'derecho_id'
        ])
         ->where(['DerechoRecomendacion.recomendacion_id ' => $id_recomendacion])->toArray();
        
        $derechos=$this->Derechos->find('list', ['limit' => 5])
        ->where(['id IN ' => $derechosRecomendacion])
        ->toArray();
        //obtenemos los indicadores por derechos
        $indicadores_derechos = $this->IndicadoresDerechos->find('list', 
            ['keyField' => 'indicador_id',
            'valueField' => 'indicador_id'
        ])
        ->where(['IndicadoresDerechos.derecho_id IN ' => $derechos])
        ->toArray();
        //$institucionsAccion = $accion_solicitudes->institucions->select(['id'])->toArray();
        $institucionsAccion = array();
        foreach ($accion_solicitudes as $solicitud ) {
          $institucionsAccion[]=$solicitud->institucion->id;
        }
        /*$institucionsAccion = $accion_solicitudes->find('list',[
            'keyField' => 'institucions.id',
            'valueField' => 'institucions.id'
        ])->toArray();*/
       
        $instituciones=$this->Institucions->find('list', ['limit' => 5])
        ->where(['id IN ' => $institucionsAccion])
        ->toArray();
         $comiteRecomendacion = $this->ComiteRecomendacions->find('list',[
             'keyField' => 'comite_id',
             'valueField' => 'comite_id'
         ])
          ->where(['ComiteRecomendacions.recomendacion_id ' => $id_recomendacion])->toArray();
          $comites=$this->Comites->find('list')->where(['idComite IN ' => $comiteRecomendacion])
         ->toArray();

         /*$mecanismoRecomendacion = $this->MecanismoRecomendacion->find('list',[
            'keyField' => 'mecanismo_id',
            'valueField' => 'mecanismo_id'
        ])
         ->where(['MecanismoRecomendacion.recomendacion_id ' => $id_recomendacion])->toArray();
        
        $mecanismos=$this->Mecanismos->find('list', ['limit' => 5])
        ->where(['id IN ' => $mecanismoRecomendacion])
        ->toArray();*/

        //debug(json_encode(array_keys($poblaciones), JSON_PRETTY_PRINT));die;
        $all_poblaciones = $this->Poblacions->find('list', ['limit' => 5])->toArray();
        $all_derechos = $this->Derechos->find('list', ['limit' => 5])->toArray();
        $all_instituciones = $this->Institucions->find('list', ['limit' => 5])->toArray();
        $all_mecanismos = $this->Mecanismos->find('list', ['limit' => 5])->toArray();
        $aprobarAccion = $this->Autorizacions->newEntity();
        $consolidado_datos = $this->Consolidados->find('all',['contain' => ['AdjuntosConsolidados']])
        ->where(['accion_id'=>$id])->first();

        
        $listIndicadoresCheck = array();
        $idConsolidado = 0;
        if ($consolidado_datos != null) {
          $listIndicadoresCheck = $this->Consolidados->getIndicadoresConsolidados($consolidado_datos->id);
          $listIndicadores = array();
          $idConsolidado = $consolidado_datos->id;
        }

         

        $autorizacion_actual=null;
        $texto_consolidado='';
        $texto_comentario='';

        if ($this->request->is(['patch', 'post', 'put'])) {
          $flag_guardado=false;
          $indicadores_consolidados= null;
          if (isset($this->request->data['indicadores_consolidado'])) {
            $indicadores_consolidados=$this->request->data['indicadores_consolidado'];
          }
          
            //obtener la autorizacion id a partir del recomendacion id y el id del usuario
            $autorizacion_actual=$this->Autorizacions->find('all', ['contain' => ['Accions']])
                ->where(['accion_id ' => $id,'Autorizacions.usuario_id'=>$this->Auth->user('id'),'Autorizacions.estado_id'=>'1'])->first();
            if($autorizacion_actual==null){
                $this->Flash->error(__('Usted no puede autorizar este segumiento de acción.'));
            }else{
                $autorizacion_actual->razon = $this->request->data['razon'];
                if (isset($this->request->data['btnAprobar'])) {
                  $autorizacion_actual->fecha_modificacion=date('Y-m-d H:i:s');
                  $autorizacion_actual->visto_bueno_fisico='0';
                  $autorizacion_actual->estado_id='3';

                  foreach ($accion_solicitudes as $solicitud ) {
                     $solicitud->estado_id='3';
                     $solicitud->observacion='aprobado';
                     $this->AccionSolicitud->save($solicitud);
                   }
                   //registrar autorizacion para recomendacion  Min Justicia -> 26 , Procuradoria -> 27 , -> Cancilleria -> 28
                   //si el estado es 10 entonces estamos en la aprobacion 1ra q es del min de justicia y debemos marcarlo y enviarlo para el 2do ejecutor que es procuradoria
                   if($accion->estado_id==10){
                        $accion->estado_id='3';
                        $accion->fecha=date('Y-m-d H:i:s');
                        $res_save_accion = $this->Accions->save($accion);
                        //buscamos los autorizadores de la procuradoria 
                        $autorizadores_procuradoria=$this->Users->find()->matching(
                            'Rols', function ($q) {
                                return $q->where(['Rols.institucion_id' => '27']);
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
                                'mensaje' => 'debe autorizar la accion con codigo:'.$accion->codigo,
                                'fecha'=>date('Y-m-d H:i:s'),
                                'estado'=>'pendiente'
                                );
                            $notificacion = $this->Notificacions->newEntity();
                            $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                            $this->Notificacions->save($notificacion);
                            
                            
                        }
                        
                   }elseif($accion->estado_id==3){
                    //se el estado es 5 quiere decir que la procuradoria ya acepto y debemos enviar a la ultima instancia, a cancilleria
                        $accion->estado_id='5';
                        $accion->fecha=date('Y-m-d H:i:s');
                        $res_save_accion = $this->Accions->save($accion);
                        //buscamos los autorizadores de la procuradoria 
                        $autorizadores_cancilleria=$this->Users->find()->matching(
                            'Rols', function ($q)  {
                                return $q->where(['Rols.institucion_id' => '28']);
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
                                'mensaje' =>'debe autorizar la accion con codigo:'.$accion->codigo,
                                'fecha'=>date('Y-m-d H:i:s'),
                                'estado'=>'pendiente'
                                );
                            $notificacion = $this->Notificacions->newEntity();
                            $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                            $this->Notificacions->save($notificacion);
                        }
                   }elseif($accion->estado_id==5){
                    //se el estado es 5 quiere decir que la cancilleria ya acepto y debemos marcar la recomendacion como aceptada
                       $accion->estado_id='9';
                        $accion->fecha=date('Y-m-d H:i:s');
                        $res_save_accion = $this->Accions->save($accion);
                       
                        
                   }
                   $id_consolidado=0;
                  if($consolidado_datos==null){
                    //no hay datos de consolidado se crea consolidado
                     //grabacion del consolidado este es el q se mostrara a procuraduria
                        $consolidado = $this->Consolidados->newEntity();
                        $req_consolidado = array(
                          'accion_id'=>$id,
                          'texto_consolidado'=>$this->request->data['texto_consolidado'],
                          'user_id'=>$this->Auth->user('id'),
                          'fecha_consolidado'=>date('Y-m-d H:i:s'),
                          'fuente'=>$this->request->data['fuente']
                          );
                        $consolidado = $this->Consolidados->patchEntity($consolidado,$req_consolidado);
                        $this->Consolidados->save($consolidado);
                        $id_consolidado=$consolidado->id;
                  }else{
                    $consolidado_datos->texto_consolidado = $this->request->data['texto_consolidado'];
                    $consolidado_datos->fecha_consolidado =date('Y-m-d H:i:s');
                    $consolidado_datos->user_id = $this->Auth->user('id');
                    $consolidado_datos->fuente =$this->request->data['fuente'];
                    $test=$this->Consolidados->save($consolidado_datos);
                    $id_consolidado=$consolidado_datos->id;
                  }
                  $texto_consolidado=$this->request->data['texto_consolidado'];
                  //grabacion de adjuntos
                  $adjuntos_consolidado = null;
                  if (isset($this->request->data['adjuntos_consolidado'])) {
                    $adjuntos_consolidado = $this->request->data['adjuntos_consolidado'];
                  }
                  if($adjuntos_consolidado != null && $adjuntos_consolidado[0]['name']!=''){
                    foreach ($adjuntos_consolidado as $adjunto ) {
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
                            'consolidado_id'=>$id_consolidado,
                            'link'=>$file_name_part);
                        $adjuntosConsolidados = $this->AdjuntosConsolidados->newEntity();
                        $adjuntosConsolidados = $this->AdjuntosConsolidados->patchEntity($adjuntosConsolidados, $adj_save);
                        $this->AdjuntosConsolidados->save($adjuntosConsolidados);
                    }
                  }

                } else if (isset($this->request->data['btnRechazar'])) 
                {
                   $autorizacion_actual->fecha_modificacion=date('Y-m-d H:i:s');
                   $autorizacion_actual->visto_bueno_fisico='0';
                   $autorizacion_actual->estado_id='4';
                   $autorizacion_actual->razon=$this->request->data['razon'];

                   if($accion->estado_id==10){
                        //se ha recibido un rechazo y se debe volver a las instituciones
                        //desaprobar todas las solicitudes de informacion
                        foreach ($accion_solicitudes as $solicitud ) {
                          $solicitud->estado_id='2';
                          $solicitud->observacion=$this->request->data['razon'];
                          $this->AccionSolicitud->save($solicitud);
                        }
                       foreach ($institucionsAccion as $institucion_responsable) {
                              $query =  $this->Users->find()->matching(
                                'Rols', function ($q) use ($institucion_responsable) {
                                    return $q->where(['Rols.institucion_id' => $institucion_responsable]);
                                }
                              );

                              foreach ($query  as $usuario) {
                                  //registramos la solicitud pendiente dwe respuesta
                                  $req_accion_solicitud_req=array(
                                    'accion_id'=>$accion->id,
                                    'institucion_id'=>$institucion_responsable,
                                    'fecha'=>date('Y-m-d H:i:s'),
                                    'respuesta'=>'',
                                    'link_adjunto'=>'',
                                    'estado_id'=>'1',
                                    'user_id'=>$usuario['id'],
                                    'link_adjunto_indicadores'=>''
                                    );
                                  $accionSolicitud = $this->AccionSolicitud->newEntity();
                                  $accionSolicitud = $this->AccionSolicitud->patchEntity($accionSolicitud, $req_accion_solicitud_req);
                                  $this->AccionSolicitud->save($accionSolicitud);
                                  //aca se registra notificacion de seguimiento para las instituciones
                                  $req_notificacion = array(
                                      'accion_id'=>$accion->id,
                                      'usuario_id'=>$usuario['id'],
                                      'mensaje' => 'Se rechazo su respuesta, por favor revise la solicitud:'.$accion->codigo,
                                      'fecha'=>date('Y-m-d H:i:s'),
                                      'estado'=>'pendiente'
                                      );
                                  $notificacion = $this->Notificacions->newEntity();
                                  $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                                  $this->Notificacions->save($notificacion);
                              }
                            
                            
                        }
                        $accion->estado_id='4';
                        $accion->fecha_modificacion=date('Y-m-d H:i:s');
                        $res_save_accion = $this->Accions->save($accion);
                        //buscamos los autorizadores de la procuradoria 
                   }elseif($accion->estado_id==3){
                    //se el estado es 5 quiere decir que la procuradoria ya acepto y debemos enviar a la ultima instancia, a cancilleria
                        $accion->estado_id='10';
                        $accion->fecha_modificacion=date('Y-m-d H:i:s');
                        $res_save_accion = $this->Accions->save($accion);
                        //buscamos los autorizadores de la procuradoria 
                        $autorizadores_minjus=$this->Users->find()->matching(
                            'Rols', function ($q)  {
                                return $q->where(['Rols.institucion_id' => '26']);
                            }
                        );
                        foreach ($autorizadores_minjus as $autorizador ) {
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
                                'mensaje' => 'Se rechazo la accion de seguimiento por procuraduria, debe revisar la accion con codigo:'.$accion->codigo,
                                'fecha'=>date('Y-m-d H:i:s'),
                                'estado'=>'pendiente'
                                );
                            $notificacion = $this->Notificacions->newEntity();
                            $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                            $this->Notificacions->save($notificacion);
                        }
                    $accion->estado_id='6';
                    $accion->fecha_modificacion=date('Y-m-d H:i:s');
                    $res_save_accion = $this->Accions->save($accion);     
                   }
                  if($accion->estado_id==5){
                  //se el estado es 5 quiere decir que la procuradoria ya acepto y debemos enviar a la ultima instancia, a cancilleria
                      $accion->estado_id='3';
                      $accion->fecha_modificacion=date('Y-m-d H:i:s');
                      $res_save_accion = $this->Accions->save($accion);
                      //buscamos los autorizadores de la procuradoria 
                      $autorizadores_procuradoria=$this->Users->find()->matching(
                          'Rols', function ($q)  {
                              return $q->where(['Rols.institucion_id' => '27']);
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
                              'mensaje' => 'Se rechazo la accion de seguimiento por cancilleria, debe revisar la accion con codigo:'.$accion->codigo,
                              'fecha'=>date('Y-m-d H:i:s'),
                              'estado'=>'pendiente'
                              );
                          $notificacion = $this->Notificacions->newEntity();
                          $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                          $this->Notificacions->save($notificacion);
                      }
                      
                }

                
                }elseif(isset($this->request->data['btnGuardar'])){
                  $id_consolidado=0;
                  if($consolidado_datos==null){
                    //no hay datos de consolidado se crea consolidado
                     //grabacion del consolidado este es el q se mostrara a procuraduria
                        $consolidado = $this->Consolidados->newEntity();
                        $req_consolidado = array(
                          'accion_id'=>$id,
                          'texto_consolidado'=>$this->request->data['texto_consolidado'],
                          'user_id'=>$this->Auth->user('id'),
                          'fecha_consolidado'=>date('Y-m-d H:i:s'),
                          'fuente'=>$this->request->data['fuente']
                          );
                        $consolidado = $this->Consolidados->patchEntity($consolidado,$req_consolidado);
                        $this->Consolidados->save($consolidado);
                        $id_consolidado=$consolidado->id;
                       
                  }else{
                    $consolidado_datos->texto_consolidado = $this->request->data['texto_consolidado'];
                    $consolidado_datos->fecha_consolidado =date('Y-m-d H:i:s');
                    $consolidado_datos->user_id = $this->Auth->user('id');
                    $consolidado_datos->fuente =$this->request->data['fuente'];
                    $test=$this->Consolidados->save($consolidado_datos);
                    $id_consolidado=$consolidado_datos->id;
                  }
                  //borramos los indicadores anteriores del consolidado
                  $indicadores_consolidado_borrar = $this->ConsolidadoIndicadores->find('all')->where(['consolidado_id'=>$id_consolidado]);
                  foreach ($indicadores_consolidado_borrar as $indicador_cons_borrar ) {
                    $this->ConsolidadoIndicadores->delete($indicador_cons_borrar);
                  }
                  
                  //if($indicadores_consolidados!=''){
                  if(isset($indicadores_consolidados)){
                    foreach ($indicadores_consolidados as $indicador_consolidado) {
                      $indicador_consolidado_req=array('consolidado_id' => $id_consolidado,'indicador_id'=> $indicador_consolidado);
                      $indicador_consolidado = $this->ConsolidadoIndicadores->newEntity();
                      $indicador_consolidado = $this->ConsolidadoIndicadores->patchEntity($indicador_consolidado,$indicador_consolidado_req);
                      $res=$this->ConsolidadoIndicadores->save($indicador_consolidado);
                    }  
                  }
                  
                  $texto_consolidado=$this->request->data['texto_consolidado'];
                  //grabacion de adjuntos
                  $adjuntos_consolidado = $this->request->data['adjuntos_consolidado'];
                  if($adjuntos_consolidado[0]['name']!=''){
                    foreach ($adjuntos_consolidado as $adjunto ) {
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
                            'consolidado_id'=>$id_consolidado,
                            'link'=>$file_name_part);
                        $adjuntosConsolidados = $this->AdjuntosConsolidados->newEntity();
                        $adjuntosConsolidados = $this->AdjuntosConsolidados->patchEntity($adjuntosConsolidados, $adj_save);
                        $this->AdjuntosConsolidados->save($adjuntosConsolidados);
                    }
                  }
                  $flag_guardado=true;
                 

                }
                //$autorizacion_actual = $this->Autorizacions->patchEntity($autorizacion, $autorizacion_req);
              if($flag_guardado==false){
                if ($this->Autorizacions->save($autorizacion_actual)) {
                //     if(true){
                     $todas_autorizaciones_pendientes = $this->Autorizacions->find('all')->where(['accion_id'=>$id,'estado_id'=>'1','id !='=>$autorizacion_actual->id]);
                     //debug($todas_autorizaciones_pendientes->all());die;
                     foreach ($todas_autorizaciones_pendientes as $aut_pendiente ) {
                       $aut_pendiente->fecha_modificacion=date('Y-m-d H:i:s');
                       $aut_pendiente->estado_id=$autorizacion_actual->estado_id;
                       //$this->Autorizacions->save($aut_pendiente);
                     }
                     $this->Flash->success(__('Accion actualizada correctamente.'));
                     return $this->redirect(['action' => 'index']);
                 } else {
                     $this->Flash->error(__('Error en la autorizacion por favor intente de nuevo.'));
                 }
                  $autorizacion_actual->fecha_modificacion=date('Y-m-d H:i:s');
                    $autorizacion_actual->visto_bueno_fisico='0';
                    $autorizacion_actual->estado_id='4';
                }else{
                   $this->Flash->success(__('Consolidado guardado correctamente.'));
                }
               $consolidado_datos = $this->Consolidados->find('all',['contain' => ['AdjuntosConsolidados']])
               ->where(['accion_id'=>$id])->first();

            }
            
           
                
            //return $this->redirect(['action' => 'index']);
            
        }else{
          if($consolidado_datos!=null){
            $texto_consolidado = $consolidado_datos->texto_consolidado;
          }
        }
        if($autorizacion_actual!=null){
          $texto_comentario = $autorizacion_actual->razon;
        }else{
          $texto_comentario = '';
        }
        $users = $this->Accions->Users->find('list', ['limit' => 200]);
        $recomendacions = $this->Accions->Recomendacions->find('list', ['limit' => 200]);
        if($this->Auth->user('rol_id')=='3'){
          $en_transito=true;
        }else{
          $en_transito=false;
        }        
        $listIndicadoresAll = $this->Indicadors->obtenerAllIndicadors($idConsolidado);
    
        $this->set(compact('aprobarAccion','accion','acciones', 'users', 'recomendacions','recomendacion','poblaciones','all_poblaciones','derechos','all_derechos','instituciones','all_instituciones','comites','all_mecanismos','accion_solicitudes','consolidado_datos','texto_consolidado','en_transito','listIndicadores', 'listInstitucionAccion','ListIndicadresInstAccion','listIndicadoresCheck','texto_comentario', 'listInstitucionAccionUnique','listGruGrupoIndicadores', 'listIndicadoresAll'));
        $this->set('_serialize', ['accion']);
    }
}
