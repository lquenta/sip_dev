<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MecanismoRecomendacion Controller
 *
 * @property \App\Model\Table\MecanismoRecomendacionTable $MecanismoRecomendacion
 */
class MecanismoRecomendacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Mecanismos', 'Recomendacions']
        ];
        $mecanismoRecomendacion = $this->paginate($this->MecanismoRecomendacion);

        $this->set(compact('mecanismoRecomendacion'));
        $this->set('_serialize', ['mecanismoRecomendacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Mecanismo Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mecanismoRecomendacion = $this->MecanismoRecomendacion->get($id, [
            'contain' => ['Mecanismos', 'Recomendacions']
        ]);

        $this->set('mecanismoRecomendacion', $mecanismoRecomendacion);
        $this->set('_serialize', ['mecanismoRecomendacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mecanismoRecomendacion = $this->MecanismoRecomendacion->newEntity();
        if ($this->request->is('post')) {
            $mecanismoRecomendacion = $this->MecanismoRecomendacion->patchEntity($mecanismoRecomendacion, $this->request->data);
            if ($this->MecanismoRecomendacion->save($mecanismoRecomendacion)) {
                $this->Flash->success(__('The mecanismo recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mecanismo recomendacion could not be saved. Please, try again.'));
            }
        }
        $mecanismos = $this->MecanismoRecomendacion->Mecanismos->find('list', ['limit' => 200]);
        $recomendacions = $this->MecanismoRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('mecanismoRecomendacion', 'mecanismos', 'recomendacions'));
        $this->set('_serialize', ['mecanismoRecomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mecanismo Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mecanismoRecomendacion = $this->MecanismoRecomendacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mecanismoRecomendacion = $this->MecanismoRecomendacion->patchEntity($mecanismoRecomendacion, $this->request->data);
            if ($this->MecanismoRecomendacion->save($mecanismoRecomendacion)) {
                $this->Flash->success(__('The mecanismo recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mecanismo recomendacion could not be saved. Please, try again.'));
            }
        }
        $mecanismos = $this->MecanismoRecomendacion->Mecanismos->find('list', ['limit' => 200]);
        $recomendacions = $this->MecanismoRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('mecanismoRecomendacion', 'mecanismos', 'recomendacions'));
        $this->set('_serialize', ['mecanismoRecomendacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mecanismo Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mecanismoRecomendacion = $this->MecanismoRecomendacion->get($id);
        if ($this->MecanismoRecomendacion->delete($mecanismoRecomendacion)) {
            $this->Flash->success(__('The mecanismo recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The mecanismo recomendacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
