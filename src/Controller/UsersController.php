<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
      {
          parent::beforeFilter($event);
          // Allow users to register and logout.
          // You should not add the "login" action to allow list. Doing so would
          // cause problems with normal functioning of AuthComponent.
          $this->Auth->allow(['add', 'logout']);
      }

      public function login()
      {
          if ($this->request->is('post')) {
              $user = $this->Auth->identify();
              if ($user) {
                  $this->Auth->setUser($user);
                  return $this->redirect($this->Auth->redirectUrl());
              }
              $this->Flash->error(__('Invalid username or password, try again'));
          }
      }

      public function logout()
      {
          return $this->redirect($this->Auth->logout());
      }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rols']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Rols']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $request = $this->request->data;
            $user_add=array(
                'nombre_usuario'=> $request['nombre_usuario'],
                'password'=>$request['password'],
                'fecha_creacion'=>date('Y-m-d H:i:s'),
                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                'rol_id'=>$request['rol_id'],
                'email'=>$request['email'],
                );
            $user = $this->Users->patchEntity($user, $user_add);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido grabado.'));
                return $this->redirect('/');
            } else {
                $this->Flash->error(__('El usuario no pudo ser grabado por favor reintente.'));
            }
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $request = $this->request->data;
             $user_add=array(
                'nombre_usuario'=> $request['nombre_usuario'],
                'password'=>$request['password'],
                'fecha_creacion'=>$user->fecha_creacion,
                'fecha_modificacion'=>date('Y-m-d H:i:s'),
                'rol_id'=>$request['rol_id'],
                'email'=>$request['email'],
                );
            $user = $this->Users->patchEntity($user, $user_add);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido grabado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El usuario no pudo ser grabado, intente de nuevo.'));
            }
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
