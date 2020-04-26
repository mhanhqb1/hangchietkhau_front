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
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="productTable">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Hoa hồng</th>
                                <th>Số lượng còn</th>
                                <th>Danh mục</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="http://img.adsoca.com/public/share/adflex/offers/icon/c906cae994ad8091a6f6acd218279f13_8074.JPG" width="100px"/></td>
                                <td>abc</td>
                                <td>500.000đ</td>
                                <td>100.000đ</td>
                                <td>99</td>
                                <td>Thuốc</td>
                                <td><button class="btn btn-primary">Xem chi tiết</button></td>
                                <td><button class="btn btn-primary">Copy link</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#productTable').DataTable();
</script>