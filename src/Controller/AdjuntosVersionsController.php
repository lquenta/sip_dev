<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdjuntosVersions Controller
 *
 * @property \App\Model\Table\AdjuntosVersionsTable $AdjuntosVersions
 */
class AdjuntosVersionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Versions']
        ];
        $adjuntosVersions = $this->paginate($this->AdjuntosVersions);

        $this->set(compact('adjuntosVersions'));
        $this->set('_serialize', ['adjuntosVersions']);
    }

    /**
     * View method
     *
     * @param string|null $id Adjuntos Version id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adjuntosVersion = $this->AdjuntosVersions->get($id, [
            'contain' => ['Versions']
        ]);

        $this->set('adjuntosVersion', $adjuntosVersion);
        $this->set('_serialize', ['adjuntosVersion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adjuntosVersion = $this->AdjuntosVersions->newEntity();
        if ($this->request->is('post')) {
            $adjuntosVersion = $this->AdjuntosVersions->patchEntity($adjuntosVersion, $this->request->data);
            if ($this->AdjuntosVersions->save($adjuntosVersion)) {
                $this->Flash->success(__('The adjuntos version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos version could not be saved. Please, try again.'));
            }
        }
        $versions = $this->AdjuntosVersions->Versions->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosVersion', 'versions'));
        $this->set('_serialize', ['adjuntosVersion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adjuntos Version id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adjuntosVersion = $this->AdjuntosVersions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adjuntosVersion = $this->AdjuntosVersions->patchEntity($adjuntosVersion, $this->request->data);
            if ($this->AdjuntosVersions->save($adjuntosVersion)) {
                $this->Flash->success(__('The adjuntos version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos version could not be saved. Please, try again.'));
            }
        }
        $versions = $this->AdjuntosVersions->Versions->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosVersion', 'versions'));
        $this->set('_serialize', ['adjuntosVersion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adjuntos Version id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adjuntosVersion = $this->AdjuntosVersions->get($id);
        if ($this->AdjuntosVersions->delete($adjuntosVersion)) {
            $this->Flash->success(__('The adjuntos version has been deleted.'));
        } else {
            $this->Flash->error(__('The adjuntos version could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
