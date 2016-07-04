<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstitucionRecomendacion Controller
 *
 * @property \App\Model\Table\InstitucionRecomendacionTable $InstitucionRecomendacion
 */
class InstitucionRecomendacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Institucions', 'Recomendacions']
        ];
        $institucionRecomendacion = $this->paginate($this->InstitucionRecomendacion);

        $this->set(compact('institucionRecomendacion'));
        $this->set('_serialize', ['institucionRecomendacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Institucion Recomendacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucionRecomendacion = $this->InstitucionRecomendacion->get($id, [
            'contain' => ['Institucions', 'Recomendacions']
        ]);

        $this->set('institucionRecomendacion', $institucionRecomendacion);
        $this->set('_serialize', ['institucionRecomendacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucionRecomendacion = $this->InstitucionRecomendacion->newEntity();
        if ($this->request->is('post')) {
            $institucionRecomendacion = $this->InstitucionRecomendacion->patchEntity($institucionRecomendacion, $this->request->data);
            if ($this->InstitucionRecomendacion->save($institucionRecomendacion)) {
                $this->Flash->success(__('The institucion recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The institucion recomendacion could not be saved. Please, try again.'));
            }
        }
        $institucions = $this->InstitucionRecomendacion->Institucions->find('list', ['limit' => 200]);
        $recomendacions = $this->InstitucionRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('institucionRecomendacion', 'institucions', 'recomendacions'));
        $this->set('_serialize', ['institucionRecomendacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucion Recomendacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucionRecomendacion = $this->InstitucionRecomendacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucionRecomendacion = $this->InstitucionRecomendacion->patchEntity($institucionRecomendacion, $this->request->data);
            if ($this->InstitucionRecomendacion->save($institucionRecomendacion)) {
                $this->Flash->success(__('The institucion recomendacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The institucion recomendacion could not be saved. Please, try again.'));
            }
        }
        $institucions = $this->InstitucionRecomendacion->Institucions->find('list', ['limit' => 200]);
        $recomendacions = $this->InstitucionRecomendacion->Recomendacions->find('list', ['limit' => 200]);
        $this->set(compact('institucionRecomendacion', 'institucions', 'recomendacions'));
        $this->set('_serialize', ['institucionRecomendacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucion Recomendacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucionRecomendacion = $this->InstitucionRecomendacion->get($id);
        if ($this->InstitucionRecomendacion->delete($institucionRecomendacion)) {
            $this->Flash->success(__('The institucion recomendacion has been deleted.'));
        } else {
            $this->Flash->error(__('The institucion recomendacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
