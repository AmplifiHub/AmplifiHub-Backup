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
var $helpers = array('Form', 'Html');
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
        $display = 'hide';
        $this->set('display');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Paginator');
        $this->loadComponent('Auth', [
          'authError' => 'You need to login',
          'authenticate' => [
            'Form' => [
                'fields' => ['username' => 'email', 'password' => 'password']
            ]
          ],
        'storage' => 'Session',
            'loginRedirect' => [
                'action' => 'dashboard'
            ],
          'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'

            ]
        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
        $this->loadModel('Messages');
        $id = $this->Auth->user('id');
        $messages = $this->Messages->find()->contain(['Users','Messagers'])->where(['User_id'=>$id,'Status'=>'unread']);

        $notifications = $messages->count();
        $this->loadModel('Users');
        //booking requests
        $artiste = $this->Users->Artistesrequesters->find()->where(['User_id' => $id])->count();
        $director = $this->Users->Directorequests->find()->where(['User_id' => $id])->count();
        $mixmaster = $this->Users->Mmrequesters->find()->where(['User_id' => $id])->count();
        $swriter = $this->Users->Swriterequests->find()->where(['User_id' => $id])->count();
        $headerBookingCount = $artiste + $director + $mixmaster + $swriter;

        $this->set(compact('notifications', 'headerBookingCount'));
          }

    public function beforeFilter(Event $event)
    {
        $display = 'hide';
        $this->Auth->allow(['beats', 'beathubdetail', 'search', 'display','home', 'about','pricing','ourteam', 'listing', 'termsandconditions','privacypolicy','refundpolicy','mystore','getAll','getAllBeats','loadcart','loadlicense','getAllMixers','addBeats','addArtiste','addSongwriter','addMixmastering','getAllUserBeats','infinityMyStore','infinityStore','personalstore',
            'profile','bitPlayont', 'verifyIpn','searchresults', 'webhookPaystackSubscription'

            ]);
        $this->set('login_status', $this->Auth->user('id'));
        $this->set('display', $display);
    }

    /**
    *@dev Access Control List
    *@dev Authorisation to control who sees what
    **/
    public function isAuthorize($user){
      //admin can access every action
      if(null !== $this->Auth->user('role') && $this->Auth->user('role') === 'admin'){
        return true;
      }
      //deny access
      return false;
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {

      $this->set('Auth', $this->Auth);
      $this->viewBuilder()->theme('Panel');
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }

        $userType = [
          "Guest"=>'Guest',
          "Music Producer"=>"Music Producer",
          //'Artiste'=>"Artiste",
          //"Songwriter"=>"Songwriter",
          //"Video Director" =>"Video Director"
        ];
        $this->set('userAccountType', $userType);
    }

}
