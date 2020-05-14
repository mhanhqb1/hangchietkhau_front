<div class="app-title">
    <div>
        <h1><i class="fa fa-user"></i> Cập nhật hồ sơ</h1>
        <p>HangChietKhau.Com - Tuyển CTV bán hàng chiết khấu cao</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $BASE_URL; ?>/ctv/cap-nhat-ho-so">Cập nhật hồ sơ</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div><?php echo $this->Flash->render() ?></div>
            <form action="<?php echo $BASE_URL; ?>/ctv/cap-nhat-ho-so" method="POST">
                <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Thông tin cá nhân</h4>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $AppUI['email'];?>" disabled="disabled"/>
                        </div>
                        <div class="form-group">
                            <label for="name">Họ và tên</label>
                            <input type="text" class="form-control" name="name" value="<?= $AppUI['name'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="text" class="form-control" name="phone" value="<?= $AppUI['phone'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" value="<?= $AppUI['address'];?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Thông tin thanh toán</h4>
                        <div class="form-group">
                            <label for="bank_name">Tên ngân hàng</label>
                            <input type="text" class="form-control" name="bank_name" value="<?= $AppUI['bank_name'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="bank_branch">Chi nhánh</label>
                            <input type="text" class="form-control" name="bank_branch" value="<?= $AppUI['bank_branch'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="bank_account_name">Tên chủ tài khoản</label>
                            <input type="text" class="form-control" name="bank_account_name" value="<?= $AppUI['bank_account_name'];?>"/>
                        </div>
                        <div class="form-group">
                            <label for="bank_account_number">Số tài khoản</label>
                            <input type="text" class="form-control" name="bank_account_number" value="<?= $AppUI['bank_account_number'];?>"/>
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