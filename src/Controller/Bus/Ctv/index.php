<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array(
    'user_id' => $this->Auth->user()['id'],
    'get_products' => 1,
    'get_orders' => 1
));
$data = Api::call(Configure::read('API.url_users_dashboard'), $params);
$this->set('data', $data);
