<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MamaGotras Controller
 *
 * @property \App\Model\Table\MamaGotrasTable $MamaGotras
 */
class MamaGotrasController extends AppController
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
        $mamaGotras = $this->paginate($this->MamaGotras);

        $this->set(compact('mamaGotras'));
        $this->set('_serialize', ['mamaGotras']);
    }

    /**
     * View method
     *
     * @param string|null $id Mama Gotra id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mamaGotra = $this->MamaGotras->get($id, [
            'contain' => ['Communities', 'Users']
        ]);

        $this->set('mamaGotra', $mamaGotra);
        $this->set('_serialize', ['mamaGotra']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mamaGotra = $this->MamaGotras->newEntity();
        if ($this->request->is('post')) {
            $mamaGotra = $this->MamaGotras->patchEntity($mamaGotra, $this->request->data);
            if ($this->MamaGotras->save($mamaGotra)) {
                $this->Flash->success(__('The mama gotra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mama gotra could not be saved. Please, try again.'));
        }
        $communities = $this->MamaGotras->Communities->find('list', ['limit' => 200]);
        $this->set(compact('mamaGotra', 'communities'));
        $this->set('_serialize', ['mamaGotra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mama Gotra id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mamaGotra = $this->MamaGotras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mamaGotra = $this->MamaGotras->patchEntity($mamaGotra, $this->request->data);
            if ($this->MamaGotras->save($mamaGotra)) {
                $this->Flash->success(__('The mama gotra has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mama gotra could not be saved. Please, try again.'));
        }
        $communities = $this->MamaGotras->Communities->find('list', ['limit' => 200]);
        $this->set(compact('mamaGotra', 'communities'));
        $this->set('_serialize', ['mamaGotra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mama Gotra id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mamaGotra = $this->MamaGotras->get($id);
        if ($this->MamaGotras->delete($mamaGotra)) {
            $this->Flash->success(__('The mama gotra has been deleted.'));
        } else {
            $this->Flash->error(__('The mama gotra could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
