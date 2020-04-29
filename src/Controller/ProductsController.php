<?php

/* 
 * Products page
 */
namespace App\Controller;

use Cake\Event\Event;
use App\Lib\Api;
use Cake\Core\Configure;

class ProductsController extends AppController {
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
    public function index($slug = '') {
        include ('Bus/Products/index.php');
    }
}