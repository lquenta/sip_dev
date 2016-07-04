<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Notificacions Controller
 *
 * @property \App\Model\Table\NotificacionsTable $Notificacions
 */
class NotificacionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recomendacions', 'Users']
        ];
        $notificacions = $this->paginate($this->Notificacions);

        $this->set(compact('notificacions'));
        $this->set('_serialize', ['notificacions']);
    }

    /**
     * View method
     *
     * @param string|null $id Notificacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notificacion = $this->Notificacions->get($id, [
            'contain' => ['Recomendacions', 'Users']
        ]);

        $this->set('notificacion', $notificacion);
        $this->set('_serialize', ['notificacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notificacion = $this->Notificacions->newEntity();
        if ($this->request->is('post')) {
            $notificacion = $this->Notificacions->patchEntity($notificacion, $this->request->data);
            if ($this->Notificacions->save($notificacion)) {
                $this->Flash->success(__('The notificacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The notificacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->Notificacions->Recomendacions->find('list', ['limit' => 200]);
        $users = $this->Notificacions->Users->find('list', ['limit' => 200]);
        $this->set(compact('notificacion', 'recomendacions', 'users'));
        $this->set('_serialize', ['notificacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Notificacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notificacion = $this->Notificacions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notificacion = $this->Notificacions->patchEntity($notificacion, $this->request->data);
            if ($this->Notificacions->save($notificacion)) {
                $this->Flash->success(__('The notificacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The notificacion could not be saved. Please, try again.'));
            }
        }
        $recomendacions = $this->Notificacions->Recomendacions->find('list', ['limit' => 200]);
        $users = $this->Notificacions->Users->find('list', ['limit' => 200]);
        $this->set(compact('notificacion', 'recomendacions', 'users'));
        $this->set('_serialize', ['notificacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Notificacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notificacion = $this->Notificacions->get($id);
        if ($this->Notificacions->delete($notificacion)) {
            $this->Flash->success(__('The notificacion has been deleted.'));
        } else {
            $this->Flash->error(__('The notificacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
