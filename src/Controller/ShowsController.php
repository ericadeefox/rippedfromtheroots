<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shows Controller
 *
 * @property \App\Model\Table\ShowsTable $Shows
 *
 * @method \App\Model\Entity\Show[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShowsController extends AppController
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
        $shows = $this->paginate($this->Shows);

        $this->set(compact('shows'));
    }

    /**
     * View method
     *
     * @param string|null $id Show id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $show = $this->Shows->get($id, [
            'contain' => ['Photos']
        ]);

        $this->set('show', $show);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $show = $this->Shows->newEntity();
        if ($this->request->is('post')) {
            $show = $this->Shows->patchEntity($show, $this->request->getData());
            if ($this->Shows->save($show)) {
                $this->Flash->success(__('The show has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The show could not be saved. Please, try again.'));
        }
        $photos = $this->Shows->Photos->find('list', ['limit' => 200]);
        $this->set(compact('show', 'photos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Show id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $show = $this->Shows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $show = $this->Shows->patchEntity($show, $this->request->getData());
            if ($this->Shows->save($show)) {
                $this->Flash->success(__('The show has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The show could not be saved. Please, try again.'));
        }
        $photos = $this->Shows->Photos->find('list', ['limit' => 200]);
        $this->set(compact('show', 'photos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Show id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $show = $this->Shows->get($id);
        if ($this->Shows->delete($show)) {
            $this->Flash->success(__('The show has been deleted.'));
        } else {
            $this->Flash->error(__('The show could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
