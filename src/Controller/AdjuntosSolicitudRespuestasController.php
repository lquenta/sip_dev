<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdjuntosSolicitudRespuestas Controller
 *
 * @property \App\Model\Table\AdjuntosSolicitudRespuestasTable $AdjuntosSolicitudRespuestas
 */
class AdjuntosSolicitudRespuestasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SolicitudRespuestas']
        ];
        $adjuntosSolicitudRespuestas = $this->paginate($this->AdjuntosSolicitudRespuestas);

        $this->set(compact('adjuntosSolicitudRespuestas'));
        $this->set('_serialize', ['adjuntosSolicitudRespuestas']);
    }

    /**
     * View method
     *
     * @param string|null $id Adjuntos Solicitud Respuesta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->get($id, [
            'contain' => ['SolicitudRespuestas']
        ]);

        $this->set('adjuntosSolicitudRespuesta', $adjuntosSolicitudRespuesta);
        $this->set('_serialize', ['adjuntosSolicitudRespuesta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->newEntity();
        if ($this->request->is('post')) {
            $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->patchEntity($adjuntosSolicitudRespuesta, $this->request->data);
            if ($this->AdjuntosSolicitudRespuestas->save($adjuntosSolicitudRespuesta)) {
                $this->Flash->success(__('The adjuntos solicitud respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos solicitud respuesta could not be saved. Please, try again.'));
            }
        }
        $solicitudRespuestas = $this->AdjuntosSolicitudRespuestas->SolicitudRespuestas->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosSolicitudRespuesta', 'solicitudRespuestas'));
        $this->set('_serialize', ['adjuntosSolicitudRespuesta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adjuntos Solicitud Respuesta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->patchEntity($adjuntosSolicitudRespuesta, $this->request->data);
            if ($this->AdjuntosSolicitudRespuestas->save($adjuntosSolicitudRespuesta)) {
                $this->Flash->success(__('The adjuntos solicitud respuesta has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos solicitud respuesta could not be saved. Please, try again.'));
            }
        }
        $solicitudRespuestas = $this->AdjuntosSolicitudRespuestas->SolicitudRespuestas->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosSolicitudRespuesta', 'solicitudRespuestas'));
        $this->set('_serialize', ['adjuntosSolicitudRespuesta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adjuntos Solicitud Respuesta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adjuntosSolicitudRespuesta = $this->AdjuntosSolicitudRespuestas->get($id);
        if ($this->AdjuntosSolicitudRespuestas->delete($adjuntosSolicitudRespuesta)) {
            $this->Flash->success(__('The adjuntos solicitud respuesta has been deleted.'));
        } else {
            $this->Flash->error(__('The adjuntos solicitud respuesta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
