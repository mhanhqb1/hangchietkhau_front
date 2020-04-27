<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = array();
$data = Api::call(Configure::read('API.url_users_products'), $params);
$products = !empty($data['data']) ? $data['data'] : array();

$this->set('data', $products);