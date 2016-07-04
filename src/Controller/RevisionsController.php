<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Revisions Controller
 *
 * @property \App\Model\Table\RevisionsTable $Revisions
 */
class RevisionsController extends AppController
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
        $revisions = $this->paginate($this->Revisions);

        $this->set(compact('revisions'));
        $this->set('_serialize', ['revisions']);
    }

    /**
     * View method
     *
     * @param string|null $id Revision id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $revision = $this->Revisions->get($id, [
            'contain' => ['Recomendacions', 'Users']
        ]);

        $this->set('revision', $revision);
        $this->set('_serialize', ['revision']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $revision = $this->Revisions->newEntity();
        if ($this->request->is('post')) {
            $revision = $this->Revisions->patchEntity($revision, $this->request->data);
            if ($this->Revisions->save($revision)) {
                $this->Flash->success(__('The revision has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The revision could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->Revisions->Recomendacions->find('list', ['limit' => 200]);
        $users = $this->Revisions->Users->find('list', ['limit' => 200]);
        $this->set(compact('revision', 'recomendacions', 'users'));
        $this->set('_serialize', ['revision']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Revision id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $revision = $this->Revisions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $revision = $this->Revisions->patchEntity($revision, $this->request->data);
            if ($this->Revisions->save($revision)) {
                $this->Flash->success(__('The revision has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The revision could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->Revisions->Recomendacions->find('list', ['limit' => 200]);
        $users = $this->Revisions->Users->find('list', ['limit' => 200]);
        $this->set(compact('revision', 'recomendacions', 'users'));
        $this->set('_serialize', ['revision']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Revision id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $revision = $this->Revisions->get($id);
        if ($this->Revisions->delete($revision)) {
            $this->Flash->success(__('The revision has been deleted.'));
        } else {
            $this->Flash->error(__('The revision could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
