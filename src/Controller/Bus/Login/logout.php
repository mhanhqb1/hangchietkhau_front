<?php

if ($this->Auth->logout()) {
    return $this->redirect('/dang-nhap');
}

