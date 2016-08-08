<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SolicitudesPendientesRespuestas Controller
 *
 * @property \App\Model\Table\SolicitudesPendientesRespuestasTable $SolicitudesPendientesRespuestas
 */
class SolicitudesPendientesRespuestasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Estados', 'SolicitudInformacions']
        ];
        $solicitudesPendientesRespuestas = $this->paginate($this->SolicitudesPendientesRespuestas);

        $this->set(compact('solicitudesPendientesRespuestas'));
        $this->set('_serialize', ['solicitudesPendientesRespuestas']);
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudes Pendientes Respuesta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudesPendientesRespuesta = $this->SolicitudesPendientesRespuestas->get($id, [
            'contain' => ['Users', 'Estados', 'SolicitudInformacions']
        ]);

        $this->set('solicitudesPendientesRespuesta', $solicitudesPendientesRespuesta);
        $this->set('_serialize', ['solicitudesPendientesRespuesta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitudesPendientesRespuesta = $this->SolicitudesPendientesRespuestas->newEntity();
        if ($this->request->is('post')) {
            $solicitudesPendientesRespuesta = $this->SolicitudesPendientesRespuestas->patchEntity($solicitudesPendientesRespuesta, $this->request->data);
            if ($this->SolicitudesPendientesRespuestas->save($solicitudesPendientesRespuesta)) {
                $this->Flash->success(__('The solicitudes pendientes respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitudes pendientes respuesta could not be saved. Please, try again.'));
            }
        }
        $users = $this->SolicitudesPendientesRespuestas->Users->find('list', ['limit' => 200]);
        $estados = $this->SolicitudesPendientesRespuestas->Estados->find('list', ['limit' => 200]);
        $solicitudInformacions = $this->SolicitudesPendientesRespuestas->SolicitudInformacions->find('list', ['limit' => 200]);
        $this->set(compact('solicitudesPendientesRespuesta', 'users', 'estados', 'solicitudInformacions'));
        $this->set('_serialize', ['solicitudesPendientesRespuesta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudes Pendientes Respuesta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudesPendientesRespuesta = $this->SolicitudesPendientesRespuestas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudesPendientesRespuesta = $this->SolicitudesPendientesRespuestas->patchEntity($solicitudesPendientesRespuesta, $this->request->data);
            if ($this->SolicitudesPendientesRespuestas->save($solicitudesPendientesRespuesta)) {
                $this->Flash->success(__('The solicitudes pendientes respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The solicitudes pendientes respuesta could not be saved. Please, try again.'));
            }
        }
        $users = $this->SolicitudesPendientesRespuestas->Users->find('list', ['limit' => 200]);
        $estados = $this->SolicitudesPendientesRespuestas->Estados->find('list', ['limit' => 200]);
        $solicitudInformacions = $this->SolicitudesPendientesRespuestas->SolicitudInformacions->find('list', ['limit' => 200]);
        $this->set(compact('solicitudesPendientesRespuesta', 'users', 'estados', 'solicitudInformacions'));
        $this->set('_serialize', ['solicitudesPendientesRespuesta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudes Pendientes Respuesta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudesPendientesRespuesta = $this->SolicitudesPendientesRespuestas->get($id);
        if ($this->SolicitudesPendientesRespuestas->delete($solicitudesPendientesRespuesta)) {
            $this->Flash->success(__('The solicitudes pendientes respuesta has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudes pendientes respuesta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
