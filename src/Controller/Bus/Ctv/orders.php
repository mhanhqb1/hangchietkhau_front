<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array(
    'user_id' => $this->Auth->user()['id'],
    'get_products' => 1,
    'status' => ''
));
$data = Api::call(Configure::read('API.url_users_orders'), $params);
$orders = !empty($data['data']) ? $data['data'] : array();
$products = !empty($data['products']) ? $data['products'] : array();

$this->set('data', $orders);
$this->set('products', $products);
$this->set('params', $params);