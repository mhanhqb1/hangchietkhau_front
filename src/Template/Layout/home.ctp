<?php
$webTitle = 'HangChietKhau.Com';
$_description = !empty($pageDescription) ? $pageDescription : $_settings['company']['seo_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $_settings['company']['seo_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $_settings['company']['name'];
$_image = !empty($pageImage) ? $pageImage : $_settings['company']['seo_image'];
$_time = time();
$_scriptHeader = !empty($_settings['company']['script_header']) ? $_settings['company']['script_header'] : '';
$_scriptBody = !empty($_settings['company']['script_body']) ? $_settings['company']['script_body'] : '';
$_scriptFooter = !empty($_settings['company']['script_footer']) ? $_settings['company']['script_footer'] : '';
?>
<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/Article" prefix="og: http://ogp.me/ns#">
    <head>
        <link rel="shortcut icon" href="<?php echo $BASE_URL; ?>/favicon.ico" type="image/png">
        <meta charset="utf-8">
        <title>
            <?php echo $_title; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">

        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url; ?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $webTitle; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />

        <meta name="generator" content="<?php echo $webTitle; ?>" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $BASE_URL; ?>/css/home.css?<?= $time; ?>">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">        
        
        <?= $_scriptHeader;?>
    </head>

    <body>
        <?= $_scriptBody; ?>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="<?= $BASE_URL; ?>">HangChietKhau.Com</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?= $BASE_URL; ?>">Trang chủ</a></li>
                            <li><a href="<?= $BASE_URL; ?>/tin-tuc">Tin tức</a></li>
                            <li><a href="<?= $BASE_URL; ?>/huong-dan">Hướng dẫn</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= $BASE_URL; ?>/dang-ky"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
                            <li><a href="<?= $BASE_URL; ?>/dang-nhap"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php echo $this->fetch('content'); ?>

        <footer class="container-fluid">
            <div class="container footer-top">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <h3>HangChietKhau.Com</h3>
                        <p>Nền tảng cung cấp các sản phẩm chiết khấu cao</p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h3>Hướng dẫn</h3>
                        <ul>
                            <li><a href="<?= $BASE_URL; ?>/dang-ky">Đăng ký</a></li>
                            <li><a href="<?= $BASE_URL; ?>/dang-nhap">Đăng nhập</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h3>Kết nối với chúng tôi</h3>
                        <ul class="soical">
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid text-center footer-bottom">
            © 2020 HANGCHIETKHAU.COM. All rights reserved.
        </div>

        <!-- Essential javascripts for application to work-->
        <script src="<?php echo $BASE_URL; ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/main.js?<?= $time; ?>"></script>
        
        <?= $_scriptFooter;?>
    </body>
</html>
