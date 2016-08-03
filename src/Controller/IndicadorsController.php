<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Indicadors Controller
 *
 * @property \App\Model\Table\IndicadorsTable $Indicadors
 */
class IndicadorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $indicadors = $this->paginate($this->Indicadors);

        $this->set(compact('indicadors'));
        $this->set('_serialize', ['indicadors']);
    }

    /**
     * View method
     *
     * @param string|null $id Indicador id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $indicador = $this->Indicadors->get($id, [
            'contain' => ['Derechos']
        ]);

        $this->set('indicador', $indicador);
        $this->set('_serialize', ['indicador']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $indicador = $this->Indicadors->newEntity();
        if ($this->request->is('post')) {
            $indicador = $this->Indicadors->patchEntity($indicador, $this->request->data);
            if ($this->Indicadors->save($indicador)) {
                $this->Flash->success(__('The indicador has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicador could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('indicador'));
        $this->set('_serialize', ['indicador']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Indicador id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $indicador = $this->Indicadors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $indicador = $this->Indicadors->patchEntity($indicador, $this->request->data);
            if ($this->Indicadors->save($indicador)) {
                $this->Flash->success(__('The indicador has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The indicador could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('indicador'));
        $this->set('_serialize', ['indicador']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Indicador id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicador = $this->Indicadors->get($id);
        if ($this->Indicadors->delete($indicador)) {
            $this->Flash->success(__('The indicador has been deleted.'));
        } else {
            $this->Flash->error(__('The indicador could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
