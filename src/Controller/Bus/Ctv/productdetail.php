<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array(
    'slug' => $slug
));
$data = Api::call(Configure::read('API.url_users_productdetail'), $params);

$this->set('pageTitle', $data['name']);
$this->set('data', $data);
$this->set('params', $params);