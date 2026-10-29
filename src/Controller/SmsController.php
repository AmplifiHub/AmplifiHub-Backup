<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Collection\Collection;
use Cake\ORM\TableRegistry;
use Cake\Network\Session;
use Cake\I18n\Time;
use Cake\View\Helper\PaginatorHelper;

/**
 * Stores Controller
 *
 *
 * @method \App\Model\Entity\Store[] paginate($object = null, array $settings = [])
 */
class SmsController extends AppController {

    public $paginate = [
        'limit' => 10,
    ];

    public function initialize() {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
     
     
     public function mobilecode() {
      
    }
    
    
    

}
