<div class="container">
    <form action="<?php echo $BASE_URL;?>/login" method="POST">
        <div class="imgcontainer">
          <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
        </div>

        <div class="container">
            <input type="hidden" name="_csrfToken" value="<?php echo $this->request->getParam('_csrfToken'); ?>"/>
            <label for="user_name"><b>Tên đăng nhập</b></label>
            <input type="text" placeholder="Nhập tên đăng nhập" name="user_name" required>

            <label for="password"><b>Mật khẩu</b></label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" required>

            <button type="submit">Đăng nhập</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Lưu mật khẩu
            </label>
        </div>

        <div class="form-footer" style="background-color:#f1f1f1">
            <span class="psw">Quên <a href="#">mật khẩu?</a></span>
            <div class="clear"></div>
        </div>
    </form>
</div>
