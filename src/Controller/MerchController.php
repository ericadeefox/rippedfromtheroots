<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Merch Controller
 *
 * @property \App\Model\Table\MerchTable $Merch
 *
 * @method \App\Model\Entity\Merch[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MerchController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Photos']
        ];
        $merch = $this->paginate($this->Merch);

        $this->set(compact('merch'));
    }

    /**
     * View method
     *
     * @param string|null $id Merch id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $merch = $this->Merch->get($id, [
            'contain' => ['Photos']
        ]);

        $this->set('merch', $merch);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $merch = $this->Merch->newEntity();
        if ($this->request->is('post')) {
            $merch = $this->Merch->patchEntity($merch, $this->request->getData());
            if ($this->Merch->save($merch)) {
                $this->Flash->success(__('The merch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The merch could not be saved. Please, try again.'));
        }
        $photos = $this->Merch->Photos->find('list', ['limit' => 200]);
        $this->set(compact('merch', 'photos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Merch id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $merch = $this->Merch->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $merch = $this->Merch->patchEntity($merch, $this->request->getData());
            if ($this->Merch->save($merch)) {
                $this->Flash->success(__('The merch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The merch could not be saved. Please, try again.'));
        }
        $photos = $this->Merch->Photos->find('list', ['limit' => 200]);
        $this->set(compact('merch', 'photos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Merch id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $merch = $this->Merch->get($id);
        if ($this->Merch->delete($merch)) {
            $this->Flash->success(__('The merch has been deleted.'));
        } else {
            $this->Flash->error(__('The merch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
