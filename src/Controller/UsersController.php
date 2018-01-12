<?php
namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]
 */
class UsersController extends AppController
{
    /**
     * initialize method
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['login', 'logout', 'register']);
    }

    /**
     * Add method
     *
     * @return void
     */
    public function register()
    {
        $this->set(['titleForLayout' => 'Register']);
        $user = $this->Users->newEntity();
        $this->set(compact('user', 'projects'));
        $this->set('_serialize', ['user']);

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->email = strtolower(trim($user->email));
            if ($this->Users->save($user)) {
                $this->Flash->success(__("You have successfully registered."));

                return;
            }
            $this->Flash->error(__('Sorry, we could not register you. Please try again.'));
        }
    }

    /**
     * Account method
     *
     * @return void
     */
    public function account()
    {
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id);

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
        $this->set(['titleForLayout' => 'Your Account Info']);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->request->getSession()->write('Auth.User', $user);
                $this->Flash->success(__('Your information has been saved!'));

                return;
            }
            $this->Flash->error(__('Your information could not be saved. Please, try again.'));
        }
    }

    /**
     * login for users
     *
     * @return \Cake\Http\Response|null
     */
    public function login()
    {
        $this->set('titleForLayout', 'Log In');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('We could not log you in. Please check your email & password.'));
        }

        return null;
    }

    /**
     * log out users
     *
     * @return \Cake\Http\Response
     */
    public function logout()
    {
        $this->Flash->success('Thanks for stopping by!');

        return $this->redirect($this->Auth->logout());
    }
}
