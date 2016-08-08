<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstitucionSolicitudes Controller
 *
 * @property \App\Model\Table\InstitucionSolicitudesTable $InstitucionSolicitudes
 */
class InstitucionSolicitudesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Institucions', 'SolicitudInformacions']
        ];
        $institucionSolicitudes = $this->paginate($this->InstitucionSolicitudes);

        $this->set(compact('institucionSolicitudes'));
        $this->set('_serialize', ['institucionSolicitudes']);
    }

    /**
     * View method
     *
     * @param string|null $id Institucion Solicitude id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucionSolicitude = $this->InstitucionSolicitudes->get($id, [
            'contain' => ['Institucions', 'SolicitudInformacions']
        ]);

        $this->set('institucionSolicitude', $institucionSolicitude);
        $this->set('_serialize', ['institucionSolicitude']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucionSolicitude = $this->InstitucionSolicitudes->newEntity();
        if ($this->request->is('post')) {
            $institucionSolicitude = $this->InstitucionSolicitudes->patchEntity($institucionSolicitude, $this->request->data);
            if ($this->InstitucionSolicitudes->save($institucionSolicitude)) {
                $this->Flash->success(__('The institucion solicitude has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The institucion solicitude could not be saved. Please, try again.'));
            }
        }
        $institucions = $this->InstitucionSolicitudes->Institucions->find('list', ['limit' => 200]);
        $solicitudInformacions = $this->InstitucionSolicitudes->SolicitudInformacions->find('list', ['limit' => 200]);
        $this->set(compact('institucionSolicitude', 'institucions', 'solicitudInformacions'));
        $this->set('_serialize', ['institucionSolicitude']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucion Solicitude id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucionSolicitude = $this->InstitucionSolicitudes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucionSolicitude = $this->InstitucionSolicitudes->patchEntity($institucionSolicitude, $this->request->data);
            if ($this->InstitucionSolicitudes->save($institucionSolicitude)) {
                $this->Flash->success(__('The institucion solicitude has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The institucion solicitude could not be saved. Please, try again.'));
            }
        }
        $institucions = $this->InstitucionSolicitudes->Institucions->find('list', ['limit' => 200]);
        $solicitudInformacions = $this->InstitucionSolicitudes->SolicitudInformacions->find('list', ['limit' => 200]);
        $this->set(compact('institucionSolicitude', 'institucions', 'solicitudInformacions'));
        $this->set('_serialize', ['institucionSolicitude']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucion Solicitude id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucionSolicitude = $this->InstitucionSolicitudes->get($id);
        if ($this->InstitucionSolicitudes->delete($institucionSolicitude)) {
            $this->Flash->success(__('The institucion solicitude has been deleted.'));
        } else {
            $this->Flash->error(__('The institucion solicitude could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
