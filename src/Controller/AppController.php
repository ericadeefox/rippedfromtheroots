<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $helpers = ['AkkaCKEditor.CKEditor' => [
        'version' => '4.4.7', // Default Option
        'distribution' => 'full' // Default Option / Other options => 'basic', 'standard', 'standard-all', 'full-all'
    ]];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent(
            'Auth',
            [
                'authorize' => 'Controller',
                'loginAction' => [
                    'controller' => 'Users',
                    'action' => 'login'
                ],
                'loginRedirect' => [
                    'controller' => 'Articles',
                    'action' => 'add'
                ],
                'logoutRedirect' => [
                    'controller' => 'Articles',
                    'action' => 'index'
                ],
                'authenticate' => [
                    'Form' => [
                        'fields' => [
                            'username' => 'email',
                            'password' => 'password'
                        ]
                    ]
                ]
            ]
        );

        $models = ['Albums', 'Articles', 'Merch', 'Photos', 'Shows', 'Users'];
        foreach ($models as $model) {
            $this->loadModel($model);
        }

        $action = $this->request->getParam('action');
        $latestPost = $this->Articles->find()
            ->where(['date <=' => date('Y-m-d H:i:s')])
            ->order(['date' => 'DESC'])
            ->first();
        $loggedIn = (bool) $this->Auth->user('id');
        $this->set(compact('action', 'latestPost', 'loggedIn'));

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    /**
     * Determines whether or not the user is authorized to make the current request
     *
     * @param User|null $user User entity
     * @return bool
     */
    public function isAuthorized($user = null)
    {
        if (isset($user)) {
            return true;
        }
        $actions = ['index', 'login', 'view'];
        if (in_array($actions, $this->request->getParam('action'))) {
            return true;
        }
    }
}
