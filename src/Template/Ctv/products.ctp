<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> HangChietKhau.Com</h1>
        <p>Tuyển CTV bán hàng chiết khấu cao</p>
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
            <form action="<?php echo $BASE_URL; ?>/ctv/san-pham" method="GET">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleSelect1">Danh mục</label>
                            <select class="form-control" name="cate_id">
                                <option value="">Tất cả</option>
                                <?php if (!empty($cates)): ?>
                                <?php foreach ($cates as $c): ?>
                                <option value="<?= $c['id'];?>" <?= !empty($params['cate_id']) && $params['cate_id'] == $c['id'] ? 'selected="selected"':'';?>><?= $c['name'];?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
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
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Hoa hồng</th>
                                <!--<th>Số lượng còn</th>-->
                                <!--<th></th>-->
                                <!--<th></th>-->
                                <th width="80px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($data)): ?>
                                <?php foreach ($data as $v): ?>
                                    <?php
                                    if (empty($v['id'])) {
                                        continue;
                                    }
                                    $url = $BASE_URL.'/ctv/sp/'.$v['slug'];
                                    ?>
                                    <tr>
                                        <td><a href="<?php echo $url; ?>"><img src="<?php echo $v['image']; ?>" width="100px"/></a></td>
                                        <td><a href="<?php echo $url; ?>" style="font-size: 17px;"><?php echo $v['name']; ?></a></td>
                                        <td><?= number_format($v['price']); ?></td>
                                        <td><?= number_format($v['wholesale_income']); ?></td>
                                        <!--<td><?= $v['qty']; ?></td>-->
                                        <!--<td><button type="button" class="btn btn-primary btnNewsUrl" data-news-url="<?= $v['aff_news_url']; ?>" data-aff-id="<?= $AppUI['id']; ?>">Bài viết</button></td>-->
                                        <!--<td><a class="btn btn-primary" href="">Xem chi tiết</a></td>-->
                                        <td><button class="btn btn-primary btnCopyLink" data-link="<?php echo $BASE_URL; ?>/san-pham/<?= $v['slug']; ?>?aff_id=<?= $AppUI['id']; ?>">Copy link</button></td>
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
<div id="newsModal" class="modal fade"  role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Danh sách bài viết</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><a href="#">aaaa</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>