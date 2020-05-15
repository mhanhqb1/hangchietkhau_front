<?php
$webTitle = 'LyonaBeauty.Com';
$_description = !empty($pageDescription) ? $pageDescription : $_settings['company']['seo_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $_settings['company']['seo_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $_settings['company']['name'];
$_image = !empty($pageImage) ? $pageImage : $_settings['company']['seo_image'];
$_time = time();
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

        
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div id="mainnav" class="navbar-head white-nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header"> 
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                                    <i class="icon ti-menu" aria-hidden="true"></i> 
                                </button> 
                                <a class="navbar-brand" href="https://accesstrade.vn/"> 
                                    <img class="logo-white" src="https://accesstrade.vn/wp-content/themes/accesstradev2/assets/images/logo-light.png" alt="light logo" title="Logo accesstrade"> 
                                    <img class="logo-col" src="https://accesstrade.vn/wp-content/themes/accesstradev2/assets/images/logo-normal.png" alt="light logo" title="Logo accesstrade"> 
                                </a>
                            </div>
                            <div class="collapse navbar-collapse navbar-ex1-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="https://accesstrade.vn/">Trang chủ</a></li>
                                    <li><a href="https://accesstrade.vn/member">Thành viên</a></li>
                                    <li><a href="https://accesstrade.vn/huong-dan-publisher">Hướng dẫn</a></li>
                                    <li><a href="https://accesstrade.vn/blog-affiliate">Blog</a></li>
                                    <li class="navbar-nav-btn"><a href="https://pub.accesstrade.vn/accounts/register">Đăng ký</a></li>
                                    <li class="hidden-sm hidden-md hidden-lg nav-btn-green"><a href="https://accesstrade.vn/advertiser">Advertiser</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->fetch('content'); ?>

        <!-- Essential javascripts for application to work-->
        <script src="<?php echo $BASE_URL; ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/popper.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/main.js?<?= $time; ?>"></script>
    </body>
</html>
