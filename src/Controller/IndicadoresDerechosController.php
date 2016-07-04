<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IndicadoresDerechos Controller
 *
 * @property \App\Model\Table\IndicadoresDerechosTable $IndicadoresDerechos
 */
class IndicadoresDerechosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Derechos', 'Indicadors']
        ];
        $indicadoresDerechos = $this->paginate($this->IndicadoresDerechos);

        $this->set(compact('indicadoresDerechos'));
        $this->set('_serialize', ['indicadoresDerechos']);
    }

    /**
     * View method
     *
     * @param string|null $id Indicadores Derecho id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $indicadoresDerecho = $this->IndicadoresDerechos->get($id, [
            'contain' => ['Derechos', 'Indicadors']
        ]);

        $this->set('indicadoresDerecho', $indicadoresDerecho);
        $this->set('_serialize', ['indicadoresDerecho']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $indicadoresDerecho = $this->IndicadoresDerechos->newEntity();
        if ($this->request->is('post')) {
            $indicadoresDerecho = $this->IndicadoresDerechos->patchEntity($indicadoresDerecho, $this->request->data);
            if ($this->IndicadoresDerechos->save($indicadoresDerecho)) {
                $this->Flash->success(__('The indicadores derecho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicadores derecho could not be saved. Please, try again.'));
            }
        }
        $derechos = $this->IndicadoresDerechos->Derechos->find('list', ['limit' => 200]);
        $indicadors = $this->IndicadoresDerechos->Indicadors->find('list', ['limit' => 200]);
        $this->set(compact('indicadoresDerecho', 'derechos', 'indicadors'));
        $this->set('_serialize', ['indicadoresDerecho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Indicadores Derecho id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $indicadoresDerecho = $this->IndicadoresDerechos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $indicadoresDerecho = $this->IndicadoresDerechos->patchEntity($indicadoresDerecho, $this->request->data);
            if ($this->IndicadoresDerechos->save($indicadoresDerecho)) {
                $this->Flash->success(__('The indicadores derecho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicadores derecho could not be saved. Please, try again.'));
            }
        }
        $derechos = $this->IndicadoresDerechos->Derechos->find('list', ['limit' => 200]);
        $indicadors = $this->IndicadoresDerechos->Indicadors->find('list', ['limit' => 200]);
        $this->set(compact('indicadoresDerecho', 'derechos', 'indicadors'));
        $this->set('_serialize', ['indicadoresDerecho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Indicadores Derecho id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicadoresDerecho = $this->IndicadoresDerechos->get($id);
        if ($this->IndicadoresDerechos->delete($indicadoresDerecho)) {
            $this->Flash->success(__('The indicadores derecho has been deleted.'));
        } else {
            $this->Flash->error(__('The indicadores derecho could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
