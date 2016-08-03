<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Derechos Controller
 *
 * @property \App\Model\Table\DerechosTable $Derechos
 */
class DerechosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Indicadors']
        ];
        $derechos = $this->paginate($this->Derechos);

        $this->set(compact('derechos'));
        $this->set('_serialize', ['derechos']);
    }

    /**
     * View method
     *
     * @param string|null $id Derecho id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $derecho = $this->Derechos->get($id, [
            'contain' => ['Indicadors', 'DerechoRecomendacion']
        ]);

        $this->set('derecho', $derecho);
        $this->set('_serialize', ['derecho']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $derecho = $this->Derechos->newEntity();
        if ($this->request->is('post')) {
            $derecho = $this->Derechos->patchEntity($derecho, $this->request->data);
            if ($this->Derechos->save($derecho)) {
                $this->Flash->success(__('The derecho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The derecho could not be saved. Please, try again.'));
            }
        }
        $indicadors = $this->Derechos->Indicadors->find('list', ['limit' => 200]);
        $this->set(compact('derecho', 'indicadors'));
        $this->set('_serialize', ['derecho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Derecho id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $derecho = $this->Derechos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $derecho = $this->Derechos->patchEntity($derecho, $this->request->data);
            if ($this->Derechos->save($derecho)) {
                $this->Flash->success(__('The derecho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The derecho could not be saved. Please, try again.'));
            }
        }
        $indicadors = $this->Derechos->Indicadors->find('list', ['limit' => 200]);
        $this->set(compact('derecho', 'indicadors'));
        $this->set('_serialize', ['derecho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Derecho id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $derecho = $this->Derechos->get($id);
        if ($this->Derechos->delete($derecho)) {
            $this->Flash->success(__('The derecho has been deleted.'));
        } else {
            $this->Flash->error(__('The derecho could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
