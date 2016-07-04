<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Poblacions Controller
 *
 * @property \App\Model\Table\PoblacionsTable $Poblacions
 */
class PoblacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $poblacions = $this->paginate($this->Poblacions);

        $this->set(compact('poblacions'));
        $this->set('_serialize', ['poblacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Poblacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poblacion = $this->Poblacions->get($id, [
            'contain' => ['PoblacionRecomendacion']
        ]);

        $this->set('poblacion', $poblacion);
        $this->set('_serialize', ['poblacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $poblacion = $this->Poblacions->newEntity();
        if ($this->request->is('post')) {
            $poblacion = $this->Poblacions->patchEntity($poblacion, $this->request->data);
            if ($this->Poblacions->save($poblacion)) {
                $this->Flash->success(__('The poblacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The poblacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('poblacion'));
        $this->set('_serialize', ['poblacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Poblacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $poblacion = $this->Poblacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poblacion = $this->Poblacions->patchEntity($poblacion, $this->request->data);
            if ($this->Poblacions->save($poblacion)) {
                $this->Flash->success(__('The poblacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The poblacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('poblacion'));
        $this->set('_serialize', ['poblacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Poblacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poblacion = $this->Poblacions->get($id);
        if ($this->Poblacions->delete($poblacion)) {
            $this->Flash->success(__('The poblacion has been deleted.'));
        } else {
            $this->Flash->error(__('The poblacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
