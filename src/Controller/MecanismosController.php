<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mecanismos Controller
 *
 * @property \App\Model\Table\MecanismosTable $Mecanismos
 */
class MecanismosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mecanismos = $this->paginate($this->Mecanismos);

        $this->set(compact('mecanismos'));
        $this->set('_serialize', ['mecanismos']);
    }

    /**
     * View method
     *
     * @param string|null $id Mecanismo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mecanismo = $this->Mecanismos->get($id, [
            'contain' => ['MecanismoRecomendacion']
        ]);

        $this->set('mecanismo', $mecanismo);
        $this->set('_serialize', ['mecanismo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mecanismo = $this->Mecanismos->newEntity();
        if ($this->request->is('post')) {
            $mecanismo = $this->Mecanismos->patchEntity($mecanismo, $this->request->data);
            if ($this->Mecanismos->save($mecanismo)) {
                $this->Flash->success(__('The mecanismo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mecanismo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mecanismo'));
        $this->set('_serialize', ['mecanismo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mecanismo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mecanismo = $this->Mecanismos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mecanismo = $this->Mecanismos->patchEntity($mecanismo, $this->request->data);
            if ($this->Mecanismos->save($mecanismo)) {
                $this->Flash->success(__('The mecanismo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mecanismo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mecanismo'));
        $this->set('_serialize', ['mecanismo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mecanismo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mecanismo = $this->Mecanismos->get($id);
        if ($this->Mecanismos->delete($mecanismo)) {
            $this->Flash->success(__('The mecanismo has been deleted.'));
        } else {
            $this->Flash->error(__('The mecanismo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
