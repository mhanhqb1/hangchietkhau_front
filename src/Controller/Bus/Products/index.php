<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array(
    'aff_id' => 0,
    'slug' => $slug
));
$data = Api::call(Configure::read('API.url_users_productdetail'), $params);

$this->set(compact(array(
    'data',
    'params'
)));

