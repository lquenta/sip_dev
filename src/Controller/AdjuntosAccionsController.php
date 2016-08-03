<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdjuntosAccions Controller
 *
 * @property \App\Model\Table\AdjuntosAccionsTable $AdjuntosAccions
 */
class AdjuntosAccionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Accions']
        ];
        $adjuntosAccions = $this->paginate($this->AdjuntosAccions);

        $this->set(compact('adjuntosAccions'));
        $this->set('_serialize', ['adjuntosAccions']);
    }

    /**
     * View method
     *
     * @param string|null $id Adjuntos Accion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adjuntosAccion = $this->AdjuntosAccions->get($id, [
            'contain' => ['Accions']
        ]);

        $this->set('adjuntosAccion', $adjuntosAccion);
        $this->set('_serialize', ['adjuntosAccion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adjuntosAccion = $this->AdjuntosAccions->newEntity();
        if ($this->request->is('post')) {
            $adjuntosAccion = $this->AdjuntosAccions->patchEntity($adjuntosAccion, $this->request->data);
            if ($this->AdjuntosAccions->save($adjuntosAccion)) {
                $this->Flash->success(__('The adjuntos accion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos accion could not be saved. Please, try again.'));
            }
        }
        $accions = $this->AdjuntosAccions->Accions->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosAccion', 'accions'));
        $this->set('_serialize', ['adjuntosAccion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adjuntos Accion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adjuntosAccion = $this->AdjuntosAccions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adjuntosAccion = $this->AdjuntosAccions->patchEntity($adjuntosAccion, $this->request->data);
            if ($this->AdjuntosAccions->save($adjuntosAccion)) {
                $this->Flash->success(__('The adjuntos accion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos accion could not be saved. Please, try again.'));
            }
        }
        $accions = $this->AdjuntosAccions->Accions->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosAccion', 'accions'));
        $this->set('_serialize', ['adjuntosAccion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adjuntos Accion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adjuntosAccion = $this->AdjuntosAccions->get($id);
        if ($this->AdjuntosAccions->delete($adjuntosAccion)) {
            $this->Flash->success(__('The adjuntos accion has been deleted.'));
        } else {
            $this->Flash->error(__('The adjuntos accion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
