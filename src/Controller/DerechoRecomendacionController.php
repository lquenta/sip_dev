<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DerechoRecomendacion Controller
 *
 * @property \App\Model\Table\DerechoRecomendacionTable $DerechoRecomendacion
 */
class DerechoRecomendacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Derechos', 'Recomendacions']
        ];
        $derechoRecomendacion = $this->paginate($this->DerechoRecomendacion);

        $this->set(compact('derechoRecomendacion'));
        $this->set('_serialize', ['derechoRecomendacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Derecho Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $derechoRecomendacion = $this->DerechoRecomendacion->get($id, [
            'contain' => ['Derechos', 'Recomendacions']
        ]);

        $this->set('derechoRecomendacion', $derechoRecomendacion);
        $this->set('_serialize', ['derechoRecomendacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $derechoRecomendacion = $this->DerechoRecomendacion->newEntity();
        if ($this->request->is('post')) {
            $derechoRecomendacion = $this->DerechoRecomendacion->patchEntity($derechoRecomendacion, $this->request->data);
            if ($this->DerechoRecomendacion->save($derechoRecomendacion)) {
                $this->Flash->success(__('The derecho recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The derecho recomendacion could not be saved. Please, try again.'));
            }
        }
        $derechos = $this->DerechoRecomendacion->Derechos->find('list', ['limit' => 200]);
        $recomendacions = $this->DerechoRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('derechoRecomendacion', 'derechos', 'recomendacions'));
        $this->set('_serialize', ['derechoRecomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Derecho Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $derechoRecomendacion = $this->DerechoRecomendacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $derechoRecomendacion = $this->DerechoRecomendacion->patchEntity($derechoRecomendacion, $this->request->data);
            if ($this->DerechoRecomendacion->save($derechoRecomendacion)) {
                $this->Flash->success(__('The derecho recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The derecho recomendacion could not be saved. Please, try again.'));
            }
        }
        $derechos = $this->DerechoRecomendacion->Derechos->find('list', ['limit' => 200]);
        $recomendacions = $this->DerechoRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('derechoRecomendacion', 'derechos', 'recomendacions'));
        $this->set('_serialize', ['derechoRecomendacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Derecho Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $derechoRecomendacion = $this->DerechoRecomendacion->get($id);
        if ($this->DerechoRecomendacion->delete($derechoRecomendacion)) {
            $this->Flash->success(__('The derecho recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The derecho recomendacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
