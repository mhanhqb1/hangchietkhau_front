<div class="container-fluid">
    <div class="jumbotron-fluid home-bg-1 text-center bg-grey">
        <div class="container">
            <h2><strong>HANGCHIETKHAU.COM</strong></h2>      
            <p>Chúng tôi cung cấp những sản phẩm chiết khấu cao và tiện ích vô cùng đơn giản, quản lý dễ dàng cho cộng tác viên</p>
            <img src="<?= $BASE_URL; ?>/images/home-bg-1.png"/>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Hướng dẫn</h2>
        </div>
    </div>
    <div class="row">
        <?php if (!empty($data)): ?>
        <?php foreach ($data as $v): ?>
        <div class="col-xs-6 col-sm-4 col-lg-3">
            <div class="post-detail">
                <?php 
                $image = !empty($v['image']) ? $v['image'] : $BASE_URL.'/images/huongdan.png';
                $url = $BASE_URL.'/bai-viet/'.$v['slug'];
                ?>
                <a href="<?= $url;?>">
                    <img src="<?= $image; ?>" alt="<?= $v['name'];?>"/>
                </a>
                <p><?= date('Y-m-d', $v['updated']);?></p>
                <a href="<?= $url;?>">
                    <h4><?= $v['name'];?></h4>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="row">
        <?php echo $this->Paginate->render($total, $params['limit']); ?>
    </div>
</div>