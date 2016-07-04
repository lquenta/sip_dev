<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PoblacionRecomendacion Controller
 *
 * @property \App\Model\Table\PoblacionRecomendacionTable $PoblacionRecomendacion
 */
class PoblacionRecomendacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recomendacions', 'Poblacions']
        ];
        $poblacionRecomendacion = $this->paginate($this->PoblacionRecomendacion);

        $this->set(compact('poblacionRecomendacion'));
        $this->set('_serialize', ['poblacionRecomendacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Poblacion Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poblacionRecomendacion = $this->PoblacionRecomendacion->get($id, [
            'contain' => ['Recomendacions', 'Poblacions']
        ]);

        $this->set('poblacionRecomendacion', $poblacionRecomendacion);
        $this->set('_serialize', ['poblacionRecomendacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $poblacionRecomendacion = $this->PoblacionRecomendacion->newEntity();
        if ($this->request->is('post')) {
            $poblacionRecomendacion = $this->PoblacionRecomendacion->patchEntity($poblacionRecomendacion, $this->request->data);
            if ($this->PoblacionRecomendacion->save($poblacionRecomendacion)) {
                $this->Flash->success(__('The poblacion recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The poblacion recomendacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->PoblacionRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $poblacions = $this->PoblacionRecomendacion->Poblacions->find('list', ['limit' => 200]);
        $this->set(compact('poblacionRecomendacion', 'recomendacions', 'poblacions'));
        $this->set('_serialize', ['poblacionRecomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Poblacion Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $poblacionRecomendacion = $this->PoblacionRecomendacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poblacionRecomendacion = $this->PoblacionRecomendacion->patchEntity($poblacionRecomendacion, $this->request->data);
            if ($this->PoblacionRecomendacion->save($poblacionRecomendacion)) {
                $this->Flash->success(__('The poblacion recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The poblacion recomendacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->PoblacionRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $poblacions = $this->PoblacionRecomendacion->Poblacions->find('list', ['limit' => 200]);
        $this->set(compact('poblacionRecomendacion', 'recomendacions', 'poblacions'));
        $this->set('_serialize', ['poblacionRecomendacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Poblacion Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poblacionRecomendacion = $this->PoblacionRecomendacion->get($id);
        if ($this->PoblacionRecomendacion->delete($poblacionRecomendacion)) {
            $this->Flash->success(__('The poblacion recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The poblacion recomendacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
