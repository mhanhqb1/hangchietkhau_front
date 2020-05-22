<?php
$webTitle = 'BanHangChietKhau.Com - Tuyển CTV bán hàng chiết khấu cao';
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

        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL; ?>/css/main.css?<?php echo $_time; ?>" media="all">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript">
            var BASE_URL = '<?php echo $BASE_URL; ?>';
            var controller = '<?php echo $controller; ?>';
            var action = '<?php echo $action; ?>';
            var _csrfToken = '<?php echo $this->request->getParam('_csrfToken'); ?>';
        </script>
        
        <!-- Essential javascripts for application to work-->
        <script src="<?php echo $BASE_URL; ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/popper.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/main.js?<?= $time;?>"></script>
        
        <script src="<?php echo $BASE_URL; ?>/js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <script type="text/javascript" src="<?php echo $BASE_URL; ?>/js/plugins/chart.js"></script>
        
        <!-- Data table plugin-->
        <script type="text/javascript" src="<?php echo $BASE_URL; ?>/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL; ?>/js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL; ?>/js/custom.js?<?= $time;?>"></script>
        
        <?= $_scriptHeader; ?>
    </head>

    <body class="app sidebar-mini pace-done">
        <?= $_scriptBody;?>
        <!-- Navbar-->
        <?php echo $this->element('Layout/header');?>

        <!-- Sidebar menu-->
        <?php echo $this->element('Layout/sidebar');?>
        
        <main class="app-content">
            <?php echo $this->fetch('content'); ?>
        </main>
        
        <?= $_scriptFooter;?>
    </body>
</html>
