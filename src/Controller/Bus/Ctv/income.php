<?php
use Cake\Core\Configure;
use App\Lib\Api;

$params = $this->getParams(array());
$data = Api::call(Configure::read('API.url_users_income'), $params);

$this->set('data', $data);
$this->set('params', $params);