<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SolicitudRespuestas Controller
 *
 * @property \App\Model\Table\SolicitudRespuestasTable $SolicitudRespuestas
 */
class SolicitudRespuestasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SolicitudInformacions', 'Users']
        ];
        $solicitudRespuestas = $this->paginate($this->SolicitudRespuestas);

        $this->set(compact('solicitudRespuestas'));
        $this->set('_serialize', ['solicitudRespuestas']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitud Respuesta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudRespuesta = $this->SolicitudRespuestas->get($id, [
            'contain' => ['SolicitudInformacions', 'Users', 'AdjuntosSolicitudRespuestas']
        ]);

        $this->set('solicitudRespuesta', $solicitudRespuesta);
        $this->set('_serialize', ['solicitudRespuesta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {
         
        $this->loadModel('SolicitudInformacions');
        $this->loadModel('InstitucionSolicitudes');
        $this->loadModel('Institucions');
        $this->loadModel('SolicitudesPendientesRespuestas');
        $this->loadModel('AdjuntosSolicitudRespuestas');

        
       $solicitudInformacion = $this->SolicitudInformacions->get($id, [
            'contain' => ['Users', 'Estados', 'InstitucionSolicitudes', 'SolicitudRespuestas']
        ]);
         
        $institucionsSolicitudes = $this->InstitucionSolicitudes->find('list',[
            'keyField' => 'institucion_id',
            'valueField' => 'institucion_id'
        ])
         ->where(['InstitucionSolicitudes.solicitud_informacion_id ' => $id])->toArray();
        $instituciones=$this->Institucions->find('list', ['limit' => 200])
        ->where(['id IN ' => $institucionsSolicitudes])
        ->toArray();
        
        //debug(json_encode(array_keys($poblaciones), JSON_PRETTY_PRINT));die;
        $all_instituciones = $this->Institucions->find('list', ['limit' => 200])->toArray();
        $solicitud_respuesta = $this->SolicitudRespuestas->newEntity();
        if ($this->request->is('post')) {
            $user_id=$this->Auth->user('id');
            //para recomendacion entity
           $solicitudPendienteRespuesta = $this->SolicitudesPendientesRespuestas->find('all')->where(['usuario_id'=> $user_id,'solicitud_informacion_id'=>$id])->first();
           if($solicitudPendienteRespuesta==null){
                $this->Flash->error(__('Usted no puede responder esta solicitud.'));
                return $this->redirect(['action' => 'index']);
           }
            $request = $this->request->data;
            $solicitud_respuesta_req = array(
                'respuesta'=>$request['respuesta'],
                'fecha_respuesta'=>date('Y-m-d H:i:s'),
                'usuario_id'=>$this->Auth->user('id'),
                'solicitud_informacion_id'=>$id,
                );
            $solicitud_respuesta = $this->SolicitudRespuestas->newEntity();
            $solicitud_respuesta = $this->SolicitudRespuestas->patchEntity($solicitud_respuesta, $solicitud_respuesta_req);
            $res_save_respuesta = $this->SolicitudRespuestas->save($solicitud_respuesta);
            if ($res_save_respuesta) {
                 $last_id_respuesta = $res_save_respuesta->id;
                 //actualizar estado de solicitud pendiente como respondido
                 //buscamos en la tabla solicitudes_pendientes_respuestas el user id con el id de solicitud de informacion

                 $solicitud_pendiente_req=array(
                    'id'=>$solicitudPendienteRespuesta->id,
                    'usuario_id'=>$this->Auth->user('id'),
                    'estado_id'=>10,
                    'fecha_modificacion'=>date('Y-m-d H:i:s'),
                    'solicitud_informacion_id'=>$id
                    );
                 $solicitudesPendientesRespuestas = $this->SolicitudesPendientesRespuestas->patchEntity($solicitudPendienteRespuesta, $solicitud_pendiente_req);
                 $solicitudesPendientesRespuestas= $this->SolicitudesPendientesRespuestas->save($solicitudesPendientesRespuestas);
               
                $adjuntos_respuesta = $this->request->data['adjuntos_respuesta'];
                foreach ($adjuntos_respuesta as $adjunto ) {
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
                        'solicitud_respuesta_id'=>$last_id_respuesta,
                        'link'=>$file_name_part);
                    $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->newEntity();
                    $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->patchEntity($adjuntosSolicitudRespuesta, $adj_save);
                    $this->AdjuntosSolicitudRespuestas->save($adjuntosSolicitudRespuesta);
                }
                $this->Flash->success(__('La accion se ha guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La accion no se ha guardado, por favor intente de nuevo.'));
            }
        }
        //$codigo_solicitud=$this->SolicitudInformacions->obtenerUltimoCodigoSolicitud();
        $this->set(compact('solicitud_respuesta', 'solicitudInformacion','institucionsSolicitudes','instituciones','all_instituciones'));
        $this->set('_serialize', ['solicitud_respuesta']);

    
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitud Respuesta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudRespuesta = $this->SolicitudRespuestas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudRespuesta = $this->SolicitudRespuestas->patchEntity($solicitudRespuesta, $this->request->data);
            if ($this->SolicitudRespuestas->save($solicitudRespuesta)) {
                $this->Flash->success(__('The solicitud respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitud respuesta could not be saved. Please, try again.'));
            }
        }
        $solicitudInformacions = $this->SolicitudRespuestas->SolicitudInformacions->find('list', ['limit' => 200]);
        $users = $this->SolicitudRespuestas->Users->find('list', ['limit' => 200]);
        $this->set(compact('solicitudRespuesta', 'solicitudInformacions', 'users'));
        $this->set('_serialize', ['solicitudRespuesta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitud Respuesta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudRespuesta = $this->SolicitudRespuestas->get($id);
        if ($this->SolicitudRespuestas->delete($solicitudRespuesta)) {
            $this->Flash->success(__('The solicitud respuesta has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitud respuesta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
