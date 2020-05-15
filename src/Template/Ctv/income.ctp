<?php
$s = array(
    'pending' => 0,
    'success' => 1,
    'error' => 2
);
$status = array(
    $s['pending'] => array(
        'class' => 'info',
        'title' => 'Chờ chuyển khoản'
    ),
    $s['success'] => array(
        'class' => 'success',
        'title' => 'Đã chuyển khoản'
    ),
    $s['error'] => array(
        'class' => 'danger',
        'title' => 'Bị lỗi'
    )
);
?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-usd"></i> Lịch sử thanh toán</h1>
        <p>HangChietKhau.Com - Tuyển CTV bán hàng chiết khấu cao</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv/thanh-toan">Lịch sử thanh toán</a></li>
    </ul>
</div>
<!--<div class="row">
    <div class="col-md-4">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-check-circle fa-3x"></i>
            <div class="info">
                <h4>Tổng doanh thu</h4>
                <p><b></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
            <div class="info">
                <h4>Đã thanh toán</h4>
                <p><b></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>Còn lại</h4>
                <p><b></b></p>
            </div>
        </div>
    </div>
</div>-->
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="productTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ngày thanh toán</th>
                                <th>Doanh thu</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data)): ?>
                                <?php foreach ($data as $k => $v): ?>
                                    <tr>
                                        <td><?= $k + 1; ?></td>
                                        <td><?= date('Y-m-d H:i:s', $v['updated']); ?></td>
                                        <td><strong><?= number_format($v['income']); ?></strong></td>
                                        <td><button class="btn btn-<?= $status[$v['status']]['class']; ?>"><?= $status[$v['status']]['title']; ?></button></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>