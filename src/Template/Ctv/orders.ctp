<?php
$s = array(
    'pending' => 0,
    'success' => 1,
    'duplicate' => 2,
    'cancel' => 3
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
    )
);
$success = 0;
$successCnt = 0;
$pending = 0;
$pendingCnt = 0;
$duplicate = 0;
$duplicateCnt = 0;
$cancel = 0;
$cancelCnt = 0;
if (!empty($data)) {
    foreach ($data as $v){
        switch ($v['status']){
            case $s['pending']:
                $pending += $v['wholesale_income'];
                $pendingCnt += 1;
                break;
            case $s['success']:
                $success += $v['wholesale_income'];
                $successCnt += 1;
                break;
            case $s['duplicate']:
                $duplicate += $v['wholesale_income'];
                $duplicateCnt += 1;
                break;
            case $s['cancel']:
                $cancel += $v['wholesale_income'];
                $cancelCnt += 1;
                break;
        }
    }
}
?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> HangChietKhau.Com</h1>
        <p>Tuyển CTV bán hàng chiết khấu cao</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv/don-hang">Danh sách đơn hàng</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-check-circle fa-3x"></i>
            <div class="info">
                <h4>Tạm tính</h4>
                <p><b><?= number_format($success).'/'.$successCnt;?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon fa fa-clock-o fa-3x"></i>
            <div class="info">
                <h4>Chờ duyệt</h4>
                <p><b><?= number_format($pending).'/'.$pendingCnt;?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
                <h4>Trùng đơn</h4>
                <p><b><?= number_format($duplicate).'/'.$duplicateCnt;?></b></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-window-close fa-3x"></i>
            <div class="info">
                <h4>Đã hủy</h4>
                <p><b><?= number_format($cancel).'/'.$cancelCnt;?></b></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <form action="<?php echo $BASE_URL; ?>/ctv/don-hang" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="product_id">Sản phẩm</label>
                            <select class="form-control" name="product_id">
                                <option value="">Tất cả</option>
                                <?php if (!empty($products)): ?>
                                    <?php foreach ($products as $c): ?>
                                        <option value="<?= $c['id']; ?>" <?= !empty($params['product_id']) && $params['product_id'] == $c['id'] ? 'selected="selected"' : ''; ?>><?= $c['name']; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status">Trạng thái</label>
                            <select class="form-control" name="status">
                                <option value="">Tất cả</option>
                                <?php foreach ($status as $k => $v): ?>
                                <option value="<?= $k;?>" <?= isset($params['status']) && $params['status'] != '' && $params['status'] == $k ? 'selected="selected"' : ''; ?>><?= $v['title'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">Áp dụng</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="productTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Hoa hồng (vnđ)</th>
                                <th>Ngày tạo</th>
                                <th>Cập nhật</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data)): ?>
                                <?php foreach ($data as $k => $v): ?>
                                    <tr>
                                        <td><?= $k + 1; ?></td>
                                        <td><?= $v['product_name']; ?></td>
                                        <td><?= $v['qty']; ?></td>
                                        <td><strong><?= number_format($v['wholesale_income']); ?></strong></td>
                                        <td><?= date('Y-m-d H:i:s', $v['created']); ?></td>
                                        <td><?= date('Y-m-d H:i:s', $v['updated']); ?></td>
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