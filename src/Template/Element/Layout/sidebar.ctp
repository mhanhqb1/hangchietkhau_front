<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?php echo $AppUI['name'];?></p>
            <p class="app-sidebar__user-designation">Cộng tác viên</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item active" href="<?php echo $BASE_URL;?>/ctv">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Trang chủ</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo $BASE_URL;?>/ctv/san-pham">
                <i class="app-menu__icon fa fa-pie-chart"></i>
                <span class="app-menu__label">Danh sách sản phẩm</span>
            </a>
        </li>
    </ul>
</aside>