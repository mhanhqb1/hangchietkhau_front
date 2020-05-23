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
        $params = $this->getParams(array(
            'type' => 0,
            'limit' => 20,
            'page' => 1
        ));
        $result = Api::call(Configure::read('API.url_posts_list'), $params);
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $this->set('data', $data);
        $this->set('params', $params);
        $this->set('total', $total);
    }
    
    /**
     * People top page
     */
    public function tutorials() {
        $params = $this->getParams(array(
            'type' => 1,
            'limit' => 20,
            'page' => 1
        ));
        $result = Api::call(Configure::read('API.url_posts_list'), $params);
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $this->set('data', $data);
        $this->set('params', $params);
        $this->set('total', $total);
    }
    
    /**
     * People top page
     */
    public function postdetail($slug = '') {
        $params = $this->getParams(array(
            'slug' => $slug
        ));
        $result = Api::call(Configure::read('API.url_posts_detail'), $params);
        $data = !empty($result) ? $result : array();
        $this->set('data', $data);
        $this->set('params', $params);
    }
}