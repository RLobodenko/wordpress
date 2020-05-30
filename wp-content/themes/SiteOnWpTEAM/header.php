<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Link Swiper's CSS -->
    <link rel="shortcut icon" href="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/style.css">
    <script src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/js/jquery.min.js"></script>

    <!-- Demo styles -->
    <style>
    
    </style>
</head>
<body class="body">
    <header class="header">
        <div class="container">
                <div class="header-top">
                    <span class="header-about">ООО «СП Амкодор-Челябинск» официальный дилер МАЗ в России</span>
                    <div class="header-contact-box">
                        <a href="" class="header-contact-item">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/004_icon.svg">
                            <span>Новые авто МАЗ</span>
                        </a>
                        <a href="" class="header-contact-item">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/001_icon.svg">
                            <span>site@mazrf.ru</span>
                        </a>
                        <a href="" class="header-contact-item">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/002_icon.svg">
                            <span>8 800 775-07-60</span>
                        </a>
                    </div>
                </div>
                <div class="header-bottom">
                    <a class="logo" href="/">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/logo.svg">
                    </a>
                    <a class="logotwo" href="/">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/logotwo.svg">
                    </a>
                    <div class="header-menu-block">
                        <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/005_icon.svg">
                        <?php 
                        wp_nav_menu( array(
                            'menu_class'=>'menu',
                            'theme_location'=>'top'
                        ) );
                        ?>
                        <a href="" class="menu-search">
                            <img src="<?php echo get_home_url(); ?>/wp-content/themes/SiteOnWpTEAM/img/004_icon_.svg">
                            <span>Поиск запчастей</span>
                        </a>
                    </div>
                    
                    <a class="header-button" href="">Помощь в подборе запчастей</a>
                </div>
            </div>
        </div>
    </header>