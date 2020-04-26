<?php

use Cake\Core\Configure;
use App\Lib\Api;

// Valdate and update
if ($this->request->is('post')) {
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    $user = Api::call(Configure::read('API.url_users_login'), $data);
    echo '<pre>';
    print_r($user);
    die();
    if (Api::getError() || empty($user)) {
        $this->Flash->error(__('Đăng nhập không thành công'));
    } else {
        // Auth
        unset($user['password']);
        $this->Auth->setUser($user);
        return $this->redirect($this->BASE_URL.'/ctv');
    }
}

