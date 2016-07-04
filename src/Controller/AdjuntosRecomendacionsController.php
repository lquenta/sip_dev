<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdjuntosRecomendacions Controller
 *
 * @property \App\Model\Table\AdjuntosRecomendacionsTable $AdjuntosRecomendacions
 */
class AdjuntosRecomendacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recomendacions']
        ];
        $adjuntosRecomendacions = $this->paginate($this->AdjuntosRecomendacions);

        $this->set(compact('adjuntosRecomendacions'));
        $this->set('_serialize', ['adjuntosRecomendacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Adjuntos Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adjuntosRecomendacion = $this->AdjuntosRecomendacions->get($id, [
            'contain' => ['Recomendacions']
        ]);

        $this->set('adjuntosRecomendacion', $adjuntosRecomendacion);
        $this->set('_serialize', ['adjuntosRecomendacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adjuntosRecomendacion = $this->AdjuntosRecomendacions->newEntity();
        if ($this->request->is('post')) {
            $adjuntosRecomendacion = $this->AdjuntosRecomendacions->patchEntity($adjuntosRecomendacion, $this->request->data);
            if ($this->AdjuntosRecomendacions->save($adjuntosRecomendacion)) {
                $this->Flash->success(__('The adjuntos recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos recomendacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->AdjuntosRecomendacions->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosRecomendacion', 'recomendacions'));
        $this->set('_serialize', ['adjuntosRecomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adjuntos Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adjuntosRecomendacion = $this->AdjuntosRecomendacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adjuntosRecomendacion = $this->AdjuntosRecomendacions->patchEntity($adjuntosRecomendacion, $this->request->data);
            if ($this->AdjuntosRecomendacions->save($adjuntosRecomendacion)) {
                $this->Flash->success(__('The adjuntos recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos recomendacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->AdjuntosRecomendacions->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosRecomendacion', 'recomendacions'));
        $this->set('_serialize', ['adjuntosRecomendacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adjuntos Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adjuntosRecomendacion = $this->AdjuntosRecomendacions->get($id);
        if ($this->AdjuntosRecomendacions->delete($adjuntosRecomendacion)) {
            $this->Flash->success(__('The adjuntos recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The adjuntos recomendacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
