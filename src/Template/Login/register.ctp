<div class="container">
    <form action="<?php echo $BASE_URL;?>/dang-ky" method="POST">
        <div class="imgcontainer">
          <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
            <h1>Đăng ký tài khoản</h1>
        </div>
        <div><?php echo $this->Flash->render() ?></div>
        <div class="container">
            <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
            <label for="name"><b>Họ tên</b></label>
            <input type="text" placeholder="Nhập họ tên" name="name" required>
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Nhập email" name="email" required>
            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" required>

            <button type="submit">Đăng ký</button>
        </div>
        <div class="form-footer" style="background-color:#f1f1f1">
            <span class="psw">Bạn đã có tài khoản? <a href="<?php echo $BASE_URL;?>/dang-nhap">Đăng nhập</a></span>
            <div class="clear"></div>
        </div>
    </form>
</div>
