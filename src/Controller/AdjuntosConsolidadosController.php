<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdjuntosConsolidados Controller
 *
 * @property \App\Model\Table\AdjuntosConsolidadosTable $AdjuntosConsolidados
 */
class AdjuntosConsolidadosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consolidados']
        ];
        $adjuntosConsolidados = $this->paginate($this->AdjuntosConsolidados);

        $this->set(compact('adjuntosConsolidados'));
        $this->set('_serialize', ['adjuntosConsolidados']);
    }

    /**
     * View method
     *
     * @param string|null $id Adjuntos Consolidado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adjuntosConsolidado = $this->AdjuntosConsolidados->get($id, [
            'contain' => ['Consolidados']
        ]);

        $this->set('adjuntosConsolidado', $adjuntosConsolidado);
        $this->set('_serialize', ['adjuntosConsolidado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adjuntosConsolidado = $this->AdjuntosConsolidados->newEntity();
        if ($this->request->is('post')) {
            $adjuntosConsolidado = $this->AdjuntosConsolidados->patchEntity($adjuntosConsolidado, $this->request->data);
            if ($this->AdjuntosConsolidados->save($adjuntosConsolidado)) {
                $this->Flash->success(__('The adjuntos consolidado has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos consolidado could not be saved. Please, try again.'));
            }
        }
        $consolidados = $this->AdjuntosConsolidados->Consolidados->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosConsolidado', 'consolidados'));
        $this->set('_serialize', ['adjuntosConsolidado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adjuntos Consolidado id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adjuntosConsolidado = $this->AdjuntosConsolidados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adjuntosConsolidado = $this->AdjuntosConsolidados->patchEntity($adjuntosConsolidado, $this->request->data);
            if ($this->AdjuntosConsolidados->save($adjuntosConsolidado)) {
                $this->Flash->success(__('The adjuntos consolidado has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The adjuntos consolidado could not be saved. Please, try again.'));
            }
        }
        $consolidados = $this->AdjuntosConsolidados->Consolidados->find('list', ['limit' => 200]);
        $this->set(compact('adjuntosConsolidado', 'consolidados'));
        $this->set('_serialize', ['adjuntosConsolidado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adjuntos Consolidado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adjuntosConsolidado = $this->AdjuntosConsolidados->get($id);
        if ($this->AdjuntosConsolidados->delete($adjuntosConsolidado)) {
            $this->Flash->success(__('The adjuntos consolidado has been deleted.'));
        } else {
            $this->Flash->error(__('The adjuntos consolidado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
