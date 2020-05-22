<?php
$webTitle = 'LyonaBeauty.Com';
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

        <style>
            html, body, iframe {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }
            html, body {
                overflow: hidden;
            }
            .navbar {
                overflow: hidden;
                background-color: #333;
                position: fixed;
                top: 0;
                width: 100%;
            }

            .navbar a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 5px 16px;
                text-decoration: none;
                font-size: 14px;
            }

            .navbar a:hover {
                background: #ddd;
                color: black;
            }
        </style>
        
        <?= $_scriptHeader;?>
    </head>

    <body  class="step1">
        <?= $_scriptBody;?>
        <?php if (!empty($AppUI)): ?>
            <div class="navbar">
                <a href="<?php echo $BASE_URL;?>/ctv">Trang chủ</a>
                <a href="<?php echo $BASE_URL;?>/ctv/san-pham">Danh sách sản phẩm</a>
            </div>
        <?php endif; ?>
        <?php echo $this->fetch('content'); ?>
        
        <?= $_scriptFooter; ?>
    </body>
</html>
