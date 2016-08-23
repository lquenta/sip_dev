<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ComiteRecomendacions Controller
 *
 * @property \App\Model\Table\ComiteRecomendacionsTable $ComiteRecomendacions
 */
class ComiteRecomendacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recomendacions', 'Comites']
        ];
        $comiteRecomendacions = $this->paginate($this->ComiteRecomendacions);

        $this->set(compact('comiteRecomendacions'));
        $this->set('_serialize', ['comiteRecomendacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Comite Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comiteRecomendacion = $this->ComiteRecomendacions->get($id, [
            'contain' => ['Recomendacions', 'Comites']
        ]);

        $this->set('comiteRecomendacion', $comiteRecomendacion);
        $this->set('_serialize', ['comiteRecomendacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comiteRecomendacion = $this->ComiteRecomendacions->newEntity();
        if ($this->request->is('post')) {
            $comiteRecomendacion = $this->ComiteRecomendacions->patchEntity($comiteRecomendacion, $this->request->data);
            if ($this->ComiteRecomendacions->save($comiteRecomendacion)) {
                $this->Flash->success(__('The comite recomendacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comite recomendacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->ComiteRecomendacions->Recomendacions->find('list', ['limit' => 200]);
        $comites = $this->ComiteRecomendacions->Comites->find('list', ['limit' => 200]);
        $this->set(compact('comiteRecomendacion', 'recomendacions', 'comites'));
        $this->set('_serialize', ['comiteRecomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comite Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comiteRecomendacion = $this->ComiteRecomendacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comiteRecomendacion = $this->ComiteRecomendacions->patchEntity($comiteRecomendacion, $this->request->data);
            if ($this->ComiteRecomendacions->save($comiteRecomendacion)) {
                $this->Flash->success(__('The comite recomendacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comite recomendacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->ComiteRecomendacions->Recomendacions->find('list', ['limit' => 200]);
        $comites = $this->ComiteRecomendacions->Comites->find('list', ['limit' => 200]);
        $this->set(compact('comiteRecomendacion', 'recomendacions', 'comites'));
        $this->set('_serialize', ['comiteRecomendacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comite Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comiteRecomendacion = $this->ComiteRecomendacions->get($id);
        if ($this->ComiteRecomendacions->delete($comiteRecomendacion)) {
            $this->Flash->success(__('The comite recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The comite recomendacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
