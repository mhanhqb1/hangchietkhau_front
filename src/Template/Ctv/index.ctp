<?php
$s = array(
    'pending' => 0,
    'success' => 1,
    'duplicate' => 2,
    'cancel' => 3,
    'tmp_success' => 4
);
$status = array(
    $s['pending'] => array(
        'class' => 'info',
        'title' => 'Chờ duyệt'
    ),
    $s['success'] => array(
        'class' => 'success',
        'title' => 'Đã duyệt'
    ),
    $s['duplicate'] => array(
        'class' => 'warning',
        'title' => 'Trùng đơn'
    ),
    $s['cancel'] => array(
        'class' => 'danger',
        'title' => 'Trùng đơn'
    ),
    $s['tmp_success'] => array(
        'class' => 'primary',
        'title' => 'Tạm tính'
    )
);
?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> HangChietKhau.Com</h1>
        <p>Tuyển CTV bán hàng chiết khấu cao</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv">Trang chủ</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
                <h4>Doanh thu</h4>
                <p><b><?= number_format($data['wholesale_income']);?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
                <h4>Tạm tính</h4>
                <p><b><?= number_format($data['wholesale_tmp_income']);?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
            <div class="info">
                <h4>Đơn hàng</h4>
                <p><b><?= $data['order_cnt'];?></b></p>
            </div>
        </div>
    </div>
<!--    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-mouse-pointer fa-3x"></i>
            <div class="info">
                <h4>Click</h4>
                <p><b>25</b></p>
            </div>
        </div>
    </div>-->
    <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-cube fa-3x"></i>
            <div class="info">
                <h4>Sản phẩm</h4>
                <p><b><?= $data['product_cnt'];?></b></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Sản phẩm mới <a href="<?php echo $BASE_URL;?>/ctv/san-pham" style="font-size: 70%;  float: right;">Xem tất cả</a></h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Giá bán</th>
                        <th>Hoa hồng</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data['products'])): ?>
                    <?php foreach ($data['products'] as $p): ?>
                    <tr>
                        <td><a href="<?php echo $BASE_URL; ?>/ctv/sp/<?= $p['slug']; ?>?aff_id=<?= $AppUI['id']; ?>" target="_blank"><?= $p['name'];?></a></td>
                        <td><?= number_format($p['price']);?></td>
                        <td><?= number_format($p['wholesale_income']);?></td>
                        <td><button class="btn btn-primary btnCopyLink" data-link="<?php echo $BASE_URL; ?>/san-pham/<?= $p['slug']; ?>?aff_id=<?= $AppUI['id']; ?>">Copy link</button></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Đơn hàng <a href="<?php echo $BASE_URL;?>/ctv/don-hang" style="font-size: 70%; float: right;">Xem tất cả</a></h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ngày tạo</th>
                        <th>Sản phẩm</th>
                        <th>Hoa hồng</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data['orders'])): ?>
                    <?php foreach ($data['orders'] as $k => $v): ?>
                        <tr>
                            <td><?= date('Y-m-d H:i:s', $v['created']); ?></td>
                            <td><?= $v['product_name']; ?></td>
                            <td><strong><?= number_format($v['wholesale_income']); ?></strong></td>
                            <td><button class="btn btn-<?= $status[$v['status']]['class']; ?>"><?= $status[$v['status']]['title']; ?></button></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Tin tức <a href="<?php echo $BASE_URL;?>/tin-tuc" style="font-size: 70%; float: right;">Xem tất cả</a></h3>
            <div>
                <?php if (empty($data['news'])): ?>
                Nội dung đang được cập nhật
                <?php else: ?>
                <ul>
                    <?php foreach ($data['news'] as $v): ?>
                    <li>
                        <a href="<?= $BASE_URL;?>/bai-viet/<?= $v['slug']; ?>"><?= $v['name'];?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Hướng dẫn <a href="<?php echo $BASE_URL;?>/huong-dan" style="font-size: 70%; float: right;">Xem tất cả</a></h3>
            <div>
                <?php if (empty($data['tutorials'])): ?>
                Nội dung đang được cập nhật
                <?php else: ?>
                <ul>
                    <?php foreach ($data['tutorials'] as $v): ?>
                    <li>
                        <a href="<?= $BASE_URL;?>/bai-viet/<?= $v['slug']; ?>"><?= $v['name'];?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>