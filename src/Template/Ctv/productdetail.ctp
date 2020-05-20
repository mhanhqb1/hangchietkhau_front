<?php
$mainUrl = $BASE_URL.'/san-pham/'.$data['slug'].'?aff_id='.$AppUI['id'];
$newUrls = array();
if (!empty($data['aff_news_url'])) {
    $urls = explode('\n', $data['aff_news_url']);
    foreach ($urls as $u) {
        $tmp = explode(':::', $u);
        $newUrls[] = array(
            'name' => $tmp[0],
            'url' => $tmp[1]
        );
    }
}
?>
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> <?= $data['name']; ?></h1>
        <p>HangChietKhau.Com - Tuyển CTV bán hàng chiết khấu cao</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv/san-pham">Danh sách sản phẩm</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product-box text-center border border-primary">
                            <img src="<?= $data['image']; ?>" class="imgcontainer" width="100px"/>
                            <h2><?= $data['name']; ?></h2>
                            <h4>Giá: <span class="btn btn-info"><?= number_format($data['price']); ?></span></h4>
                            <h4>Hoa hồng: <span class="btn btn-warning"><?= number_format($data['wholesale_income']); ?></span></h4>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="product-box border border-primary">
                            <h4>Link phân phối</h4>
                            <div class="row">
                                <div class="col-md-9">
                                    <input class="form-control" id="linkTracking" type="text" disabled="disabled" value="<?= $mainUrl;?>"/>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary btnCopyLink" data-link="<?= $mainUrl;?>">Copy</button>
                                </div>
                            </div>
                            <div class="row animated-radio-button product-box-links">
                                <div class="col-sm-6 col-md-4">
                                    <label>
                                        <input type="radio" class="link_tracking" name="link_tracking" value="<?= $mainUrl;?>" checked="checked">
                                        <span class="label-text">Landing page</span>
                                    </label>
                                </div>
                                <?php if (!empty($newUrls)): ?>
                                <?php foreach ($newUrls as $u): ?>
                                <div class="col-sm-6 col-md-4">
                                    <label>
                                        <input type="radio" class="link_tracking" name="link_tracking" value="<?= $u['url'];?>">
                                        <span class="label-text"><?= $u['name'];?></span>
                                    </label>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>