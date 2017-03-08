<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Heights Controller
 *
 * @property \App\Model\Table\HeightsTable $Heights
 */
class HeightsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $heights = $this->paginate($this->Heights);

        $this->set(compact('heights'));
        $this->set('_serialize', ['heights']);
    }

    /**
     * View method
     *
     * @param string|null $id Height id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $height = $this->Heights->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('height', $height);
        $this->set('_serialize', ['height']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $height = $this->Heights->newEntity();
        if ($this->request->is('post')) {
            $height = $this->Heights->patchEntity($height, $this->request->data);
            if ($this->Heights->save($height)) {
                $this->Flash->success(__('The height has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The height could not be saved. Please, try again.'));
        }
        $this->set(compact('height'));
        $this->set('_serialize', ['height']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Height id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $height = $this->Heights->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $height = $this->Heights->patchEntity($height, $this->request->data);
            if ($this->Heights->save($height)) {
                $this->Flash->success(__('The height has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The height could not be saved. Please, try again.'));
        }
        $this->set(compact('height'));
        $this->set('_serialize', ['height']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Height id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $height = $this->Heights->get($id);
        if ($this->Heights->delete($height)) {
            $this->Flash->success(__('The height has been deleted.'));
        } else {
            $this->Flash->error(__('The height could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
