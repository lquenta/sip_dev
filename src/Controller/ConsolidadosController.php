<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consolidados Controller
 *
 * @property \App\Model\Table\ConsolidadosTable $Consolidados
 */
class ConsolidadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Accions', 'Users']
        ];
        $consolidados = $this->paginate($this->Consolidados);

        $this->set(compact('consolidados'));
        $this->set('_serialize', ['consolidados']);
    }

    /**
     * View method
     *
     * @param string|null $id Consolidado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consolidado = $this->Consolidados->get($id, [
            'contain' => ['Accions', 'Users']
        ]);

        $this->set('consolidado', $consolidado);
        $this->set('_serialize', ['consolidado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consolidado = $this->Consolidados->newEntity();
        if ($this->request->is('post')) {
            $consolidado = $this->Consolidados->patchEntity($consolidado, $this->request->data);
            if ($this->Consolidados->save($consolidado)) {
                $this->Flash->success(__('The consolidado has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consolidado could not be saved. Please, try again.'));
            }
        }
        $accions = $this->Consolidados->Accions->find('list', ['limit' => 200]);
        $users = $this->Consolidados->Users->find('list', ['limit' => 200]);
        $this->set(compact('consolidado', 'accions', 'users'));
        $this->set('_serialize', ['consolidado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consolidado id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consolidado = $this->Consolidados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consolidado = $this->Consolidados->patchEntity($consolidado, $this->request->data);
            if ($this->Consolidados->save($consolidado)) {
                $this->Flash->success(__('The consolidado has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consolidado could not be saved. Please, try again.'));
            }
        }
        $accions = $this->Consolidados->Accions->find('list', ['limit' => 200]);
        $users = $this->Consolidados->Users->find('list', ['limit' => 200]);
        $this->set(compact('consolidado', 'accions', 'users'));
        $this->set('_serialize', ['consolidado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consolidado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consolidado = $this->Consolidados->get($id);
        if ($this->Consolidados->delete($consolidado)) {
            $this->Flash->success(__('The consolidado has been deleted.'));
        } else {
            $this->Flash->error(__('The consolidado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
