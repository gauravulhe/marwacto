<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Likes Controller
 *
 * @property \App\Model\Table\LikesTable $Likes
 */
class LikesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $likes = $this->paginate($this->Likes);

        $this->set(compact('likes'));
        $this->set('_serialize', ['likes']);
    }

    /**
     * View method
     *
     * @param string|null $id Like id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $like = $this->Likes->get($id, [
            'contain' => ['Users', 'Likes']
        ]);

        $this->set('like', $like);
        $this->set('_serialize', ['like']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $like = $this->Likes->newEntity();
        if ($this->request->is('post')) {
            $like = $this->Likes->patchEntity($like, $this->request->data);
            if ($this->Likes->save($like)) {
                $this->Flash->success(__('The like has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The like could not be saved. Please, try again.'));
        }
        $users = $this->Likes->Users->find('list', ['limit' => 200]);
        $this->set(compact('like', 'users'));
        $this->set('_serialize', ['like']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Like id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $like = $this->Likes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $like = $this->Likes->patchEntity($like, $this->request->data);
            if ($this->Likes->save($like)) {
                $this->Flash->success(__('The like has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The like could not be saved. Please, try again.'));
        }
        $users = $this->Likes->Users->find('list', ['limit' => 200]);
        $this->set(compact('like', 'users'));
        $this->set('_serialize', ['like']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Like id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $like = $this->Likes->get($id);
        if ($this->Likes->delete($like)) {
            $this->Flash->success(__('The like has been deleted.'));
        } else {
            $this->Flash->error(__('The like could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
