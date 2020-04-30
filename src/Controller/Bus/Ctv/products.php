<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array(
    'get_cate' => 1
));
$data = Api::call(Configure::read('API.url_users_products'), $params);
$products = !empty($data['data']) ? $data['data'] : array();
$cates = !empty($data['cates']) ? $data['cates'] : array();

$this->set('data', $products);
$this->set('cates', $cates);
$this->set('params', $params);