<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Institucions Controller
 *
 * @property \App\Model\Table\InstitucionsTable $Institucions
 */
class InstitucionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $institucions = $this->paginate($this->Institucions);

        $this->set(compact('institucions'));
        $this->set('_serialize', ['institucions']);
    }

    /**
     * View method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucion = $this->Institucions->get($id, [
            'contain' => ['InstitucionRecomendacion', 'Rols']
        ]);

        $this->set('institucion', $institucion);
        $this->set('_serialize', ['institucion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucion = $this->Institucions->newEntity();
        if ($this->request->is('post')) {
            $institucion = $this->Institucions->patchEntity($institucion, $this->request->data);
            if ($this->Institucions->save($institucion)) {
                $this->Flash->success(__('The institucion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The institucion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('institucion'));
        $this->set('_serialize', ['institucion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucion = $this->Institucions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucion = $this->Institucions->patchEntity($institucion, $this->request->data);
            if ($this->Institucions->save($institucion)) {
                $this->Flash->success(__('The institucion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The institucion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('institucion'));
        $this->set('_serialize', ['institucion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucion = $this->Institucions->get($id);
        if ($this->Institucions->delete($institucion)) {
            $this->Flash->success(__('The institucion has been deleted.'));
        } else {
            $this->Flash->error(__('The institucion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
