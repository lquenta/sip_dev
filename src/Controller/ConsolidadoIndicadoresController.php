<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsolidadoIndicadores Controller
 *
 * @property \App\Model\Table\ConsolidadoIndicadoresTable $ConsolidadoIndicadores
 */
class ConsolidadoIndicadoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consolidados', 'Indicadors']
        ];
        $consolidadoIndicadores = $this->paginate($this->ConsolidadoIndicadores);

        $this->set(compact('consolidadoIndicadores'));
        $this->set('_serialize', ['consolidadoIndicadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Consolidado Indicadore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consolidadoIndicadore = $this->ConsolidadoIndicadores->get($id, [
            'contain' => ['Consolidados', 'Indicadors']
        ]);

        $this->set('consolidadoIndicadore', $consolidadoIndicadore);
        $this->set('_serialize', ['consolidadoIndicadore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consolidadoIndicadore = $this->ConsolidadoIndicadores->newEntity();
        if ($this->request->is('post')) {
            $consolidadoIndicadore = $this->ConsolidadoIndicadores->patchEntity($consolidadoIndicadore, $this->request->data);
            if ($this->ConsolidadoIndicadores->save($consolidadoIndicadore)) {
                $this->Flash->success(__('The consolidado indicadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consolidado indicadore could not be saved. Please, try again.'));
            }
        }
        $consolidados = $this->ConsolidadoIndicadores->Consolidados->find('list', ['limit' => 200]);
        $indicadors = $this->ConsolidadoIndicadores->Indicadors->find('list', ['limit' => 200]);
        $this->set(compact('consolidadoIndicadore', 'consolidados', 'indicadors'));
        $this->set('_serialize', ['consolidadoIndicadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consolidado Indicadore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consolidadoIndicadore = $this->ConsolidadoIndicadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consolidadoIndicadore = $this->ConsolidadoIndicadores->patchEntity($consolidadoIndicadore, $this->request->data);
            if ($this->ConsolidadoIndicadores->save($consolidadoIndicadore)) {
                $this->Flash->success(__('The consolidado indicadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consolidado indicadore could not be saved. Please, try again.'));
            }
        }
        $consolidados = $this->ConsolidadoIndicadores->Consolidados->find('list', ['limit' => 200]);
        $indicadors = $this->ConsolidadoIndicadores->Indicadors->find('list', ['limit' => 200]);
        $this->set(compact('consolidadoIndicadore', 'consolidados', 'indicadors'));
        $this->set('_serialize', ['consolidadoIndicadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consolidado Indicadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consolidadoIndicadore = $this->ConsolidadoIndicadores->get($id);
        if ($this->ConsolidadoIndicadores->delete($consolidadoIndicadore)) {
            $this->Flash->success(__('The consolidado indicadore has been deleted.'));
        } else {
            $this->Flash->error(__('The consolidado indicadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
