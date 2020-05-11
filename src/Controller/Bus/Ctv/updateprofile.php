<?php

use Cake\Core\Configure;
use App\Lib\Api;

$data = $this->AppUI;

// Valdate and update
if ($this->request->is('post')) {
    $data = $this->request->data();
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
    }
    if (!empty($data['image']['name'])) {
        $filetype = $data['image']['type'];
        $filename = $data['image']['name'];
        $filedata = $data['image']['tmp_name'];
        $data['image'] = new CurlFile($filedata, $filetype, $filename);
    }
    // Call API to Login
    $user = Api::call(Configure::read('API.url_users_updateprofile'), $data);
    if (!empty($user) && !Api::getError()) {
        if (empty($user['image'])) {
            $user['image'] = $this->BASE_URL . '/images/' . Configure::read('default_avatar');
        }
        $this->Auth->setUser($user);
        $this->AppUI = $user;

        $this->Flash->success(__('MESSAGE_SAVE_OK'));
        return $this->redirect("{$this->BASE_URL}/ctv/cap-nhat-ho-so");
    } else {
        return $this->Flash->error(__('MESSAGE_SAVE_NG'));
    }
}

$this->set('data', $data);

