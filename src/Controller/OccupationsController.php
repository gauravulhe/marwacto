<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Occupations Controller
 *
 * @property \App\Model\Table\OccupationsTable $Occupations
 */
class OccupationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $occupations = $this->paginate($this->Occupations);

        $this->set(compact('occupations'));
        $this->set('_serialize', ['occupations']);
    }

    /**
     * View method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $occupation = $this->Occupations->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('occupation', $occupation);
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $occupation = $this->Occupations->newEntity();
        if ($this->request->is('post')) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->data);
            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
        }
        $users = $this->Occupations->Users->find('list', ['limit' => 200]);
        $this->set(compact('occupation', 'users'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $occupation = $this->Occupations->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $occupation = $this->Occupations->patchEntity($occupation, $this->request->data);
            if ($this->Occupations->save($occupation)) {
                $this->Flash->success(__('The occupation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The occupation could not be saved. Please, try again.'));
        }
        $users = $this->Occupations->Users->find('list', ['limit' => 200]);
        $this->set(compact('occupation', 'users'));
        $this->set('_serialize', ['occupation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Occupation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $occupation = $this->Occupations->get($id);
        if ($this->Occupations->delete($occupation)) {
            $this->Flash->success(__('The occupation has been deleted.'));
        } else {
            $this->Flash->error(__('The occupation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
