<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SolicitudInformacions Controller
 *
 * @property \App\Model\Table\SolicitudInformacionsTable $SolicitudInformacions
 */
class SolicitudInformacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Estados']
        ];
        $solicitudesPendientes=$this->SolicitudInformacions->find('all')->where(['usuario_id'=>$this->Auth->user('id'),'estado_id'=>'1']);
        $solicitudInformacions = $this->paginate($solicitudesPendientes);

        $this->set(compact('solicitudInformacions'));
        $this->set('_serialize', ['solicitudInformacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitud Informacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudInformacion = $this->SolicitudInformacions->get($id, [
            'contain' => ['Users', 'Estados', 'InstitucionSolicitudes', 'SolicitudRespuestas']
        ]);

        $this->set('solicitudInformacion', $solicitudInformacion);
        $this->set('_serialize', ['solicitudInformacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Institucions');
        $this->loadModel('InstitucionSolicitudes');
        $this->loadModel('Users');
        $this->loadModel('SolicitudesPendientesRespuestas');
        $this->loadModel('InstitucionRecomendacion');
        
        
        
        $solicitud = $this->SolicitudInformacions->newEntity();
        if ($this->request->is('post')) {
             //if (isset($this->request->data['btnGuardar'])) {
                $estado=1;
             //}
             //else if (isset($this->request->data['btnPublicar'])) {
             //   $estado=9;
             //}
            //para recomendacion entity
            $codigo_solicitud=$this->SolicitudInformacions->obtenerUltimoCodigoSolicitud();
            $request = $this->request->data;
            $solicitud_req = array(
                'codigo'=>$codigo_solicitud,
                'descripcion'=>$request['descripcion'],
                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                'usuario_id'=>$this->Auth->user('id'),
                'estado_id'=>$estado
                );
            $solicitud = $this->SolicitudInformacions->patchEntity($solicitud, $solicitud_req);
            $res_save_solicitud = $this->SolicitudInformacions->save($solicitud);
            
            if ($res_save_solicitud) {
                $last_id_solicitud = $res_save_solicitud->id;
                //para los relacionados a Poblacion_recomendacion
                
                
                foreach ($request['institucions'] as $institucion) {
                      $institucionSolicitud = $this->InstitucionSolicitudes->newEntity();
                      $institucion_solicitud_req = array(
                          'solicitud_informacion_id'=>$last_id_solicitud,
                          'institucion_id'=>$institucion
                          );
                      $institucionSolicitud = $this->InstitucionRecomendacion->patchEntity($institucionSolicitud, $institucion_solicitud_req);
                      $res_save_ins_rec=$this->InstitucionSolicitudes->save($institucionSolicitud); 
                       //$res_save_ins_rec=$this->InstitucionRecomendacion->save($institucionRecomendacion); 
                       //obtener todos los usuarios asociados a la institucion+
                      $query =  $this->Users->find()->matching(
                          'Rols', function ($q) use ($institucion) {
                              return $q->where(['Rols.institucion_id' => $institucion]);
                          }
                      );
                      foreach ($query  as $usuario) {
                          //registrar autorizacion para recomendacion
                          $solicitudesPendientes = $this->SolicitudesPendientesRespuestas->newEntity();
                          $req_solicitud_respuesta = array(
                              'usuario_id'=>$usuario['id'],
                              'solicitud_informacion_id'=>$last_id_solicitud,
                              'estado_id'=>1,
                              'fecha_modificacion'=>date('Y-m-d H:i:s')
                              );
                          $solicitudesPendientes = $this->SolicitudesPendientesRespuestas->patchEntity($solicitudesPendientes,  $req_solicitud_respuesta);
                          $this->SolicitudesPendientesRespuestas->save($solicitudesPendientes);
                         
                      }
                  
                  }
                
                /*$adjuntos_recomendacion = $this->request->data['adjuntos_recomendacion'];
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
                        'recomendacion_id'=>$last_id_solicitud,
                        'link'=>$file_name_part);
                    $adjuntosRecomendacion = $this->AdjuntosRecomendacions->newEntity();
                    $adjuntosRecomendacion = $this->AdjuntosRecomendacions->patchEntity($adjuntosRecomendacion, $adj_save);
                    $this->AdjuntosRecomendacions->save($adjuntosRecomendacion);
                }*/
                
                
                $this->Flash->success(__('La Solicitud se ha guardado.'));
                //return $this->redirect(['action' => 'index']);
                return $this->redirect("/");
            } else {
                $this->Flash->error(__('La Solicitud no se ha guardado, por favor intente de nuevo.'));
            }
           
        }
        $users = $this->SolicitudInformacions->Users->find('list', ['limit' => 200]);
        $estados = $this->SolicitudInformacions->Estados->find('list', ['limit' => 200]);
       
        $institucions = $this->Institucions->find('list', ['limit' => 200])->toArray();
        $codigo_solicitud=$this->SolicitudInformacions->obtenerUltimoCodigoSolicitud();
        $this->set(compact('solicitud', 'users', 'estados','institucions','codigo_solicitud'));
        $this->set('_serialize', ['solicitud']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitud Informacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudInformacion = $this->SolicitudInformacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudInformacion = $this->SolicitudInformacions->patchEntity($solicitudInformacion, $this->request->data);
            if ($this->SolicitudInformacions->save($solicitudInformacion)) {
                $this->Flash->success(__('The solicitud informacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitud informacion could not be saved. Please, try again.'));
            }
        }
        $users = $this->SolicitudInformacions->Users->find('list', ['limit' => 200]);
        $estados = $this->SolicitudInformacions->Estados->find('list', ['limit' => 200]);
        $this->set(compact('solicitudInformacion', 'users', 'estados'));
        $this->set('_serialize', ['solicitudInformacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitud Informacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudInformacion = $this->SolicitudInformacions->get($id);
        if ($this->SolicitudInformacions->delete($solicitudInformacion)) {
            $this->Flash->success(__('The solicitud informacion has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitud informacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
