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
}