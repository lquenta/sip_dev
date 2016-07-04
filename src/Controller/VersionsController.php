<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Versions Controller
 *
 * @property \App\Model\Table\VersionsTable $Versions
 */
class VersionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recomendacions', 'Users']
        ];
        $versions = $this->paginate($this->Versions);

        $this->set(compact('versions'));
        $this->set('_serialize', ['versions']);
    }

    /**
     * View method
     *
     * @param string|null $id Version id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => ['Recomendacions', 'Users', 'AdjuntosVersions']
        ]);

        $this->set('version', $version);
        $this->set('_serialize', ['version']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $version = $this->Versions->newEntity();
        if ($this->request->is('post')) {
            $version = $this->Versions->patchEntity($version, $this->request->data);
            if ($this->Versions->save($version)) {
                $this->Flash->success(__('The version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The version could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->Versions->Recomendacions->find('list', ['limit' => 200]);
        $users = $this->Versions->Users->find('list', ['limit' => 200]);
        $this->set(compact('version', 'recomendacions', 'users'));
        $this->set('_serialize', ['version']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Version id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $version = $this->Versions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $version = $this->Versions->patchEntity($version, $this->request->data);
            if ($this->Versions->save($version)) {
                $this->Flash->success(__('The version has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The version could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->Versions->Recomendacions->find('list', ['limit' => 200]);
        $users = $this->Versions->Users->find('list', ['limit' => 200]);
        $this->set(compact('version', 'recomendacions', 'users'));
        $this->set('_serialize', ['version']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Version id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $version = $this->Versions->get($id);
        if ($this->Versions->delete($version)) {
            $this->Flash->success(__('The version has been deleted.'));
        } else {
            $this->Flash->error(__('The version could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
