<?php

/* 
 * Home page
 */

namespace App\Controller;

use Cake\Event\Event;
use App\Lib\Api;
use Cake\Core\Configure;

class HomeController extends AppController {
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    /**
     * People top page
     */
    public function index() {
//        $data = array();
//        $data = Api::call(Configure::read('API.url_settings_gethomedata'), array());
//        $this->set('data', $data);
    }
    
    /**
     * People top page
     */
    public function news() {
        
    }
    
    /**
     * People top page
     */
    public function tutorials() {
        
    }
}