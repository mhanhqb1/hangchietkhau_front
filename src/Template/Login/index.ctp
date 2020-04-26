<div class="container">
    <form action="<?php echo $BASE_URL;?>/dang-nhap" method="POST">
        <div class="imgcontainer">
          <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
            <h1>Thông tin đăng nhập</h1>
        </div>
        <div><?php echo $this->Flash->render() ?></div>
        <div class="container">
            <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Nhập email" name="email" required>

            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" required>

            <button type="submit">Đăng nhập</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Lưu mật khẩu
            </label>
        </div>

        <div class="form-footer" style="background-color:#f1f1f1">
            <span class="psw">Chưa có tài khoản? <a href="<?php echo $BASE_URL;?>/dang-ky">Đăng ký</a></span>
            <div class="clear"></div>
        </div>
    </form>
</div>
