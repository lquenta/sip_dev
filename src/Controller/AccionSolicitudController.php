<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AccionSolicitud Controller
 *
 * @property \App\Model\Table\AccionSolicitudTable $AccionSolicitud
 */
class AccionSolicitudController extends AppController
{

    public function responderSolicitud($id){


         $accionSolicitud = $this->AccionSolicitud->get($id, [
            'contain' => ['Accions', 'Institucions', 'Estados', 'Users','Accions.AdjuntosAccions','Accions.Recomendacions.AdjuntosRecomendacions']
        ]);
         //debug($accionSolicitud);
        $this->loadModel('Indicadors');

        $listIndicadores = $this->Indicadors->find('list', ['limit' => 5])->toArray();
        $listGruGrupoIndicadores = $this->Indicadors->obtenerGruposIndicadors();
        $listIndicadoresAll = $this->Indicadors->obtenerAllIndicadors(0);

        $respuestas_anteriores = $this->AccionSolicitud->find('all')->where(['accion_id'=>$accionSolicitud->accion_id,'estado_id !='=>'1']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            
             $this->loadModel('Users');
             $this->loadModel('Notificacions');
             $this->loadModel('Accions');
             $this->loadModel('Autorizacions');
             $this->loadModel('Indicadors');
             $this->loadModel('IndicadoresAccionSolicitud');
             
            $adjunto_respuesta = $this->request->data['adjunto_respuesta'];
            if($adjunto_respuesta!=''){
                $adjunto_respuesta['name']=$this->sanitize($adjunto_respuesta['name']);
                //$file_name =  ROOT .DS. 'uploads' .DS. time().'_'.$adjunto_respuesta['name'];
                $file_name_part = time().'_'.$adjunto_respuesta['name'];
                $file_name =  ROOT .DS. 'webroot'.DS.'uploads'.DS. $file_name_part;
                move_uploaded_file($adjunto_respuesta['tmp_name'],$file_name); 
            }
                
            $adjunto_respuesta_indicadores = $this->request->data['adjunto_respuesta_indicadores'];
            if($adjunto_respuesta_indicadores!=''){
                $adjunto_respuesta_indicadores['name']=$this->sanitize($adjunto_respuesta_indicadores['name']);
                //$file_name =  ROOT .DS. 'uploads' .DS. time().'_'.$adjunto_respuesta_indicadores['name'];
                $file_name_part_adjunto_indicadores = time().'_'.$adjunto_respuesta_indicadores['name'];
                $file_name_adjunto_indicadores =  ROOT .DS. 'webroot'.DS.'uploads'.DS. $file_name_part_adjunto_indicadores;
                move_uploaded_file($adjunto_respuesta_indicadores['tmp_name'],$file_name_adjunto_indicadores); 
            }
            $req_accion_solicitud=array(
                'id'=>$id,
                'accion_id'=>$accionSolicitud->accion_id,
                'institucion_id'=>$accionSolicitud->institucion_id,
                'fecha'=>date('Y-m-d H:i:s'),
                'respuesta'=>$this->request->data['respuesta'],
                'link_adjunto'=>$file_name_part,
                'estado_id'=>10,
                'user_id'=>$this->Auth->user('id'),
                'link_adjunto_indicadores'=>$file_name_part_adjunto_indicadores
                );
            $accionSolicitud = $this->AccionSolicitud->patchEntity($accionSolicitud,  $req_accion_solicitud);
            if ($this->AccionSolicitud->save($accionSolicitud)) {
                if(isset($this->request->data['descripcionIndicador'])
                    && isset($this->request->data['GrupoIndicador'])
                    && isset($this->request->data['UrlIndicador'])
                  ){
                    //nuevo indicador
                    $req_nuevo_indicador = array(
                        'nombre'=>$this->request->data['descripcionIndicador'],
                        'link'=>$this->request->data['UrlIndicador'],
                        'Grupo'=>$this->request->data['GrupoIndicador'],
                        );
                    $nuevo_indicador = $this->Indicadors->newEntity();
                    $nuevo_indicador = $this->Indicadors->patchEntity($nuevo_indicador,$req_nuevo_indicador);
                    $this->Indicadors->save($nuevo_indicador);
                    $id_nuevo_indicador = $nuevo_indicador->id;
                }

                $indicadores= array();

                if (isset($this->request->data['indicadores'])) {
                  $indicadores=$this->request->data['indicadores'];
                }

                if(isset($id_nuevo_indicador) && $id_nuevo_indicador!=''){
                    $indicadores[]=$id_nuevo_indicador;
                }
                foreach ($indicadores as $indicador_marcado ) {
                    $req_indicadores_solicitud = array(
                        'indicador_id'=> $indicador_marcado,
                        'accion_solicitud_id'=>$accionSolicitud->id
                        );
                    $indicador_solicitud = $this->IndicadoresAccionSolicitud->newEntity();
                    $indicador_solicitud = $this->IndicadoresAccionSolicitud->patchEntity($indicador_solicitud,$req_indicadores_solicitud);
                    
                    $res_save=$this->IndicadoresAccionSolicitud->save($indicador_solicitud);
                }
                 $pendientes_respuesta=$this->AccionSolicitud->find('all')->where(['accion_id'=>$accionSolicitud->accion_id,'estado_id'=>'1'])->first();
                 if($pendientes_respuesta==null){
                    //se espera q todos las instituciones revisen antes de mandar notificacion
                    $id_nuevo_indicador='';

                    if($this->request->data['descripcionIndicador']){
                        //nuevo indicador
                        $req_nuevo_indicador = array(
                            'nombre'=>$this->request->data['descripcionIndicador'],
                            'link'=>' '
                            );
                        $nuevo_indicador = $this->Indicadors->newEntity();
                        $nuevo_indicador = $this->Indicadors->patchEntity($nuevo_indicador,$req_nuevo_indicador);
                        $this->Indicadors->save($nuevo_indicador);
                        $id_nuevo_indicador = $nuevo_indicador->id;
                    }

                    $indicadores=null;
                    if (isset($this->request->data['indicadores'])) {
                       $indicadores = $this->request->data['indicadores'];
                    }
                    /*if($id_nuevo_indicador!=''){
                        $indicadores[]=$id_nuevo_indicador;
                    }
                    foreach ($indicadores as $indicador_marcado ) {
                        $req_indicadores_solicitud = array(
                            'indicador_id'=> $indicador_marcado,
                            'accion_solicitud_id'=>$accionSolicitud->id
                            );
                        $indicador_solicitud = $this->IndicadoresAccionSolicitud->newEntity();
                        $indicador_solicitud = $this->IndicadoresAccionSolicitud->patchEntity($indicador_solicitud,$req_indicadores_solicitud);
                        $res_save=$this->IndicadoresAccionSolicitud->save($indicador_solicitud);
                    }*/

                    $institucion_responsable=26;
                    $query =  $this->Users->find()->matching(
                      'Rols', function ($q) use ($institucion_responsable) {
                          return $q->where(['Rols.institucion_id' => $institucion_responsable]);
                      }
                    );
                    foreach ($query  as $usuario) {
                        //registramos autorizacion de accion para min. justicia
                         $autorizacion = $this->Autorizacions->newEntity();
                          $req_autorizacion = array(
                              'usuario_id'=>$usuario['id'],
                              'accion_id'=>$accionSolicitud->accion_id,
                              'estado_id'=>1,
                              'fecha_modificacion'=>date('Y-m-d H:i:s'),
                              'visto_bueno_fisico'=>'0'
                              );
                          $autorizacion = $this->Autorizacions->patchEntity($autorizacion,  $req_autorizacion);
                          //debug($autorizacion);die;
                          $this->Autorizacions->save($autorizacion);
                        //aca se registra notificacion de seguimiento para las instituciones
                        $req_notificacion = array(
                            'accion_id'=>$accionSolicitud->accion_id,
                            'usuario_id'=>$usuario['id'],
                            'mensaje' => 'Solicitudes respondidas, favor revisar accion:'.$accionSolicitud->accion->codigo,
                            'fecha'=>date('Y-m-d H:i:s'),
                            'estado'=>'pendiente'
                            );
                        $notificacion = $this->Notificacions->newEntity();
                        $notificacion = $this->Notificacions->patchEntity($notificacion, $req_notificacion);
                        $this->Notificacions->save($notificacion);
                    }
                    //marcar la accion como respondida por todos
                     $accion=$this->Accions->get($accionSolicitud->accion_id);
                       $accion->estado_id=10;
                       $accion->fecha=date('Y-m-d H:i:s');
                       $resp_1=$this->Accions->save($accion);
                 }
                $this->Flash->success(__('La respuesta se ha enviado exitosamente.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('la respuesta no pudo ser grabada, por favor reintente.'));
            }
        }

        $this->set(compact('accionSolicitud','respuestas_anteriores','listIndicadores', 'listGruGrupoIndicadores', 'listIndicadoresAll'));
        $this->set('_serialize', ['accionSolicitud']);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Accions', 'Institucions', 'Estados', 'Users']
        ];
        $accionSolicitud = $this->AccionSolicitud->find('all',[
            'contain' => ['Accions', 'Institucions', 'Estados', 'Users']
        ])->where(['AccionSolicitud.estado_id'=>'1','user_id'=>$this->Auth->user('id')]);
        $accionSolicitud = $this->paginate($accionSolicitud);

        //debug($accionSolicitud);

        $this->set(compact('accionSolicitud'));
        $this->set('_serialize', ['accionSolicitud']);
    }

    /**
     * View method
     *
     * @param string|null $id Accion Solicitud id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accionSolicitud = $this->AccionSolicitud->get($id, [
            'contain' => ['Accions', 'Institucions', 'Estados', 'Users']
        ]);

        $this->set('accionSolicitud', $accionSolicitud);
        $this->set('_serialize', ['accionSolicitud']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accionSolicitud = $this->AccionSolicitud->newEntity();
        if ($this->request->is('post')) {
            $accionSolicitud = $this->AccionSolicitud->patchEntity($accionSolicitud, $this->request->data);
            if ($this->AccionSolicitud->save($accionSolicitud)) {
                $this->Flash->success(__('The accion solicitud has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The accion solicitud could not be saved. Please, try again.'));
            }
        }
        $accions = $this->AccionSolicitud->Accions->find('list', ['limit' => 200]);
        $institucions = $this->AccionSolicitud->Institucions->find('list', ['limit' => 200]);
        $estados = $this->AccionSolicitud->Estados->find('list', ['limit' => 200]);
        $users = $this->AccionSolicitud->Users->find('list', ['limit' => 200]);
        $this->set(compact('accionSolicitud', 'accions', 'institucions', 'estados', 'users'));
        $this->set('_serialize', ['accionSolicitud']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Accion Solicitud id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accionSolicitud = $this->AccionSolicitud->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accionSolicitud = $this->AccionSolicitud->patchEntity($accionSolicitud, $this->request->data);
            if ($this->AccionSolicitud->save($accionSolicitud)) {
                $this->Flash->success(__('The accion solicitud has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The accion solicitud could not be saved. Please, try again.'));
            }
        }
        $accions = $this->AccionSolicitud->Accions->find('list', ['limit' => 200]);
        $institucions = $this->AccionSolicitud->Institucions->find('list', ['limit' => 200]);
        $estados = $this->AccionSolicitud->Estados->find('list', ['limit' => 200]);
        $users = $this->AccionSolicitud->Users->find('list', ['limit' => 200]);
        $this->set(compact('accionSolicitud', 'accions', 'institucions', 'estados', 'users'));
        $this->set('_serialize', ['accionSolicitud']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Accion Solicitud id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accionSolicitud = $this->AccionSolicitud->get($id);
        if ($this->AccionSolicitud->delete($accionSolicitud)) {
            $this->Flash->success(__('The accion solicitud has been deleted.'));
        } else {
            $this->Flash->error(__('The accion solicitud could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
