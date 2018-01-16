<?php
namespace App\Controller;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 *
 * @method \App\Model\Entity\Article[]
 */
class ArticlesController extends AppController
{
    /**
     * initialize method
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [];
        $articles = $this->paginate(
            $this->Articles->getRecentArticles()
        );

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }

    /**
     * drafts method
     *
     * @return \Cake\Http\Response|void
     */
    public function drafts()
    {
        $this->paginate = [];
        $articles = $this->paginate(
            $this->Articles->getDrafts()
        );

        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $article = $this->Articles->get($id);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $article = $this->Articles->patchEntity($article, $data);
            $date = $data['date']['year'] . '-' . $data['date']['month'] . '-' . $data['date']['day'] . ' ' . date('H:i:s');
            $article->date = $date;
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $titleForLayout = 'Add a New Post';
        $this->set(compact('article', 'titleForLayout'));
        $this->set('_serialize', ['article']);

        return null;
    }

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $article = $this->Articles->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $article = $this->Articles->patchEntity($article, $data);
            $date = $data['date']['year'] . '-' . $data['date']['month'] . '-' . $data['date']['day'] . ' ' . date('H:i:s');
            $article->date = $date;
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The blog post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The blog post could not be saved. Please, try again.'));
        }
        $titleForLayout = 'Edit Post: ' . $article->title;
        $this->set(compact('article', 'titleForLayout'));
        $this->set('_serialize', ['article']);

        return null;
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
            $this->Flash->success(__('The article has been deleted.'));
        } else {
            $this->Flash->error(__('The article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}