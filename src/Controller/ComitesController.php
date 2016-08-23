<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comites Controller
 *
 * @property \App\Model\Table\ComitesTable $Comites
 */
class ComitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Mecanismos']
        ];
        $comites = $this->paginate($this->Comites);

        $this->set(compact('comites'));
        $this->set('_serialize', ['comites']);
    }

    /**
     * View method
     *
     * @param string|null $id Comite id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comite = $this->Comites->get($id, [
            'contain' => ['Mecanismos']
        ]);

        $this->set('comite', $comite);
        $this->set('_serialize', ['comite']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comite = $this->Comites->newEntity();
        if ($this->request->is('post')) {
            $comite = $this->Comites->patchEntity($comite, $this->request->data);
            if ($this->Comites->save($comite)) {
                $this->Flash->success(__('The comite has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comite could not be saved. Please, try again.'));
            }
        }
        $mecanismos = $this->Comites->Mecanismos->find('list', ['limit' => 200]);
        $this->set(compact('comite', 'mecanismos'));
        $this->set('_serialize', ['comite']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comite id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comite = $this->Comites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comite = $this->Comites->patchEntity($comite, $this->request->data);
            if ($this->Comites->save($comite)) {
                $this->Flash->success(__('The comite has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comite could not be saved. Please, try again.'));
            }
        }
        $mecanismos = $this->Comites->Mecanismos->find('list', ['limit' => 200]);
        $this->set(compact('comite', 'mecanismos'));
        $this->set('_serialize', ['comite']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comite id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comite = $this->Comites->get($id);
        if ($this->Comites->delete($comite)) {
            $this->Flash->success(__('The comite has been deleted.'));
        } else {
            $this->Flash->error(__('The comite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
