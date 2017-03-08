<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gotras Controller
 *
 * @property \App\Model\Table\GotrasTable $Gotras
 */
class GotrasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Communities']
        ];
        $gotras = $this->paginate($this->Gotras);

        $this->set(compact('gotras'));
        $this->set('_serialize', ['gotras']);
    }

    /**
     * View method
     *
     * @param string|null $id Gotra id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gotra = $this->Gotras->get($id, [
            'contain' => ['Communities', 'Users']
        ]);

        $this->set('gotra', $gotra);
        $this->set('_serialize', ['gotra']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gotra = $this->Gotras->newEntity();
        if ($this->request->is('post')) {
            $gotra = $this->Gotras->patchEntity($gotra, $this->request->data);
            if ($this->Gotras->save($gotra)) {
                $this->Flash->success(__('The gotra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gotra could not be saved. Please, try again.'));
        }
        $communities = $this->Gotras->Communities->find('list', ['limit' => 200]);
        $users = $this->Gotras->Users->find('list', ['limit' => 200]);
        $this->set(compact('gotra', 'communities', 'users'));
        $this->set('_serialize', ['gotra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Gotra id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gotra = $this->Gotras->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gotra = $this->Gotras->patchEntity($gotra, $this->request->data);
            if ($this->Gotras->save($gotra)) {
                $this->Flash->success(__('The gotra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gotra could not be saved. Please, try again.'));
        }
        $communities = $this->Gotras->Communities->find('list', ['limit' => 200]);
        $users = $this->Gotras->Users->find('list', ['limit' => 200]);
        $this->set(compact('gotra', 'communities', 'users'));
        $this->set('_serialize', ['gotra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Gotra id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gotra = $this->Gotras->get($id);
        if ($this->Gotras->delete($gotra)) {
            $this->Flash->success(__('The gotra has been deleted.'));
        } else {
            $this->Flash->error(__('The gotra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
