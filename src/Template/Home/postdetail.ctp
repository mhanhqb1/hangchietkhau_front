<?php
$url = $data['type'] == 1 ? 'huong-dan' : 'tin-tuc';
$name = $data['type'] == 1 ? 'Hướng dẫn' : 'Tin tức';
?>
<div class="container-fluid">
    <div class="jumbotron-fluid home-bg-1 text-center bg-grey">
        <div class="container">
            <h2><strong>HANGCHIETKHAU.COM</strong></h2>      
            <p>Chúng tôi cung cấp những sản phẩm chiết khấu cao và tiện ích vô cùng đơn giản, quản lý dễ dàng cho cộng tác viên</p>
            <img src="<?= $BASE_URL; ?>/images/home-bg-1.png"/>
        </div>
    </div>
</div>
<div class="container" style="padding: 50px; font-size: 17px; line-height: 25px;">
    <div class="row">
        <div class="col-md-12">
            <p><b><i><a href="<?= $BASE_URL;?>">Trang chủ</a> / <a href="<?= $BASE_URL.'/'.$url;?>"><?= $name;?></a></i></b></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2><?= $data['name']; ?></h2>
            <p><i>Cập nhật 1 tuần trước</i></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?= $data['detail']; ?>
        </div>
    </div>
</div>