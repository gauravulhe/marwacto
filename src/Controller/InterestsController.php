<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Interests Controller
 *
 * @property \App\Model\Table\InterestsTable $Interests
 */
class InterestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Ints']
        ];
        $interests = $this->paginate($this->Interests);

        $this->set(compact('interests'));
        $this->set('_serialize', ['interests']);
    }

    /**
     * View method
     *
     * @param string|null $id Interest id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interest = $this->Interests->get($id, [
            'contain' => ['Users', 'Ints']
        ]);

        $this->set('interest', $interest);
        $this->set('_serialize', ['interest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interest = $this->Interests->newEntity();
        if ($this->request->is('post')) {
            $interest = $this->Interests->patchEntity($interest, $this->request->data);
            if ($this->Interests->save($interest)) {
                $this->Flash->success(__('The interest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The interest could not be saved. Please, try again.'));
        }
        $users = $this->Interests->Users->find('list', ['limit' => 200]);
        $ints = $this->Interests->Ints->find('list', ['limit' => 200]);
        $this->set(compact('interest', 'users', 'ints'));
        $this->set('_serialize', ['interest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Interest id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interest = $this->Interests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interest = $this->Interests->patchEntity($interest, $this->request->data);
            if ($this->Interests->save($interest)) {
                $this->Flash->success(__('The interest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The interest could not be saved. Please, try again.'));
        }
        $users = $this->Interests->Users->find('list', ['limit' => 200]);
        $ints = $this->Interests->Ints->find('list', ['limit' => 200]);
        $this->set(compact('interest', 'users', 'ints'));
        $this->set('_serialize', ['interest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Interest id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interest = $this->Interests->get($id);
        if ($this->Interests->delete($interest)) {
            $this->Flash->success(__('The interest has been deleted.'));
        } else {
            $this->Flash->error(__('The interest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
