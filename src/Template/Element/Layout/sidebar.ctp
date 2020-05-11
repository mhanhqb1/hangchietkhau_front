<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= $AppUI['image'];?>" alt="User Image" width="50px">
        <div>
            <p class="app-sidebar__user-name"><?php echo $AppUI['name']; ?></p>
            <p class="app-sidebar__user-designation">Cộng tác viên</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item <?php echo ($action == 'index') ? 'active' : ''; ?>" href="<?php echo $BASE_URL; ?>/ctv">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Trang chủ</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo ($action == 'orders') ? 'active' : ''; ?>" href="<?php echo $BASE_URL; ?>/ctv/don-hang">
                <i class="app-menu__icon fa fa-shopping-cart"></i>
                <span class="app-menu__label">Danh sách đơn hàng</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo ($action == 'products') ? 'active' : ''; ?>" href="<?php echo $BASE_URL; ?>/ctv/san-pham">
                <i class="app-menu__icon fa fa-cube"></i>
                <span class="app-menu__label">Danh sách sản phẩm</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo ($action == 'news') ? 'active' : ''; ?>" href="<?php echo $BASE_URL; ?>/ctv/tin-tuc">
                <i class="app-menu__icon fa fa-newspaper-o"></i>
                <span class="app-menu__label">Tin tức</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo ($action == 'tutorial') ? 'active' : ''; ?>" href="<?php echo $BASE_URL; ?>/ctv/huong-dan">
                <i class="app-menu__icon fa fa-book"></i>
                <span class="app-menu__label">Hướng dẫn</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item <?php echo in_array($action, array('updateprofile')) ? 'active' : ''; ?>" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-laptop"></i>
                <span class="app-menu__label">Cài đặt</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item <?php echo ($action == 'updateprofile') ? 'active' : ''; ?>"" href="<?php echo $BASE_URL;?>/ctv/cap-nhat-ho-so"><i class="icon fa fa-circle-o"></i> Cập nhật hồ sơ</a></li>
            </ul>
        </li>
    </ul>
</aside>