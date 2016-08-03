<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RecomendacionParametros Controller
 *
 * @property \App\Model\Table\RecomendacionParametrosTable $RecomendacionParametros
 */
class RecomendacionParametrosController extends AppController
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
        $recomendacionParametros = $this->paginate($this->RecomendacionParametros);

        $this->set(compact('recomendacionParametros'));
        $this->set('_serialize', ['recomendacionParametros']);
    }

    /**
     * View method
     *
     * @param string|null $id Recomendacion Parametro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recomendacionParametro = $this->RecomendacionParametros->get($id, [
            'contain' => ['Recomendacions']
        ]);

        $this->set('recomendacionParametro', $recomendacionParametro);
        $this->set('_serialize', ['recomendacionParametro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recomendacionParametro = $this->RecomendacionParametros->newEntity();
        if ($this->request->is('post')) {
            $recomendacionParametro = $this->RecomendacionParametros->patchEntity($recomendacionParametro, $this->request->data);
            if ($this->RecomendacionParametros->save($recomendacionParametro)) {
                $this->Flash->success(__('The recomendacion parametro has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recomendacion parametro could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->RecomendacionParametros->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('recomendacionParametro', 'recomendacions'));
        $this->set('_serialize', ['recomendacionParametro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recomendacion Parametro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recomendacionParametro = $this->RecomendacionParametros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recomendacionParametro = $this->RecomendacionParametros->patchEntity($recomendacionParametro, $this->request->data);
            if ($this->RecomendacionParametros->save($recomendacionParametro)) {
                $this->Flash->success(__('The recomendacion parametro has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recomendacion parametro could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->RecomendacionParametros->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('recomendacionParametro', 'recomendacions'));
        $this->set('_serialize', ['recomendacionParametro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recomendacion Parametro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recomendacionParametro = $this->RecomendacionParametros->get($id);
        if ($this->RecomendacionParametros->delete($recomendacionParametro)) {
            $this->Flash->success(__('The recomendacion parametro has been deleted.'));
        } else {
            $this->Flash->error(__('The recomendacion parametro could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
