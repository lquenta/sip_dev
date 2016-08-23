<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IndicadoresAccionSolicitud Controller
 *
 * @property \App\Model\Table\IndicadoresAccionSolicitudTable $IndicadoresAccionSolicitud
 */
class IndicadoresAccionSolicitudController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Indicadors', 'AccionSolicitud']
        ];
        $indicadoresAccionSolicitud = $this->paginate($this->IndicadoresAccionSolicitud);

        $this->set(compact('indicadoresAccionSolicitud'));
        $this->set('_serialize', ['indicadoresAccionSolicitud']);
    }

    /**
     * View method
     *
     * @param string|null $id Indicadores Accion Solicitud id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $indicadoresAccionSolicitud = $this->IndicadoresAccionSolicitud->get($id, [
            'contain' => ['Indicadors', 'AccionSolicitud']
        ]);

        $this->set('indicadoresAccionSolicitud', $indicadoresAccionSolicitud);
        $this->set('_serialize', ['indicadoresAccionSolicitud']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $indicadoresAccionSolicitud = $this->IndicadoresAccionSolicitud->newEntity();
        if ($this->request->is('post')) {
            $indicadoresAccionSolicitud = $this->IndicadoresAccionSolicitud->patchEntity($indicadoresAccionSolicitud, $this->request->data);
            if ($this->IndicadoresAccionSolicitud->save($indicadoresAccionSolicitud)) {
                $this->Flash->success(__('The indicadores accion solicitud has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicadores accion solicitud could not be saved. Please, try again.'));
            }
        }
        $indicadors = $this->IndicadoresAccionSolicitud->Indicadors->find('list', ['limit' => 200]);
        $accionSolicituds = $this->IndicadoresAccionSolicitud->AccionSolicitud->find('list', ['limit' => 200]);
        $this->set(compact('indicadoresAccionSolicitud', 'indicadors', 'accionSolicituds'));
        $this->set('_serialize', ['indicadoresAccionSolicitud']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Indicadores Accion Solicitud id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $indicadoresAccionSolicitud = $this->IndicadoresAccionSolicitud->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $indicadoresAccionSolicitud = $this->IndicadoresAccionSolicitud->patchEntity($indicadoresAccionSolicitud, $this->request->data);
            if ($this->IndicadoresAccionSolicitud->save($indicadoresAccionSolicitud)) {
                $this->Flash->success(__('The indicadores accion solicitud has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicadores accion solicitud could not be saved. Please, try again.'));
            }
        }
        $indicadors = $this->IndicadoresAccionSolicitud->Indicadors->find('list', ['limit' => 200]);
        $accionSolicituds = $this->IndicadoresAccionSolicitud->AccionSolicituds->find('list', ['limit' => 200]);
        $this->set(compact('indicadoresAccionSolicitud', 'indicadors', 'accionSolicituds'));
        $this->set('_serialize', ['indicadoresAccionSolicitud']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Indicadores Accion Solicitud id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicadoresAccionSolicitud = $this->IndicadoresAccionSolicitud->get($id);
        if ($this->IndicadoresAccionSolicitud->delete($indicadoresAccionSolicitud)) {
            $this->Flash->success(__('The indicadores accion solicitud has been deleted.'));
        } else {
            $this->Flash->error(__('The indicadores accion solicitud could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
