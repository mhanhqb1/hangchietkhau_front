<?php

/* 
 * Home page
 */

namespace App\Controller;

use Cake\Event\Event;
use App\Lib\Api;
use Cake\Core\Configure;

class CtvController extends AppController {
    /**
     * People top page
     */
    public function index() {
        include ('Bus/Ctv/index.php');
    }
    
    /**
     * List products
     */
    public function products() {
        include ('Bus/Ctv/products.php');
    }
    
    /**
     * List orders
     */
    public function orders() {
        include ('Bus/Ctv/orders.php');
    }
}