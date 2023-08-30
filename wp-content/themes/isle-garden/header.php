<?php
/**
 * Created by PhpStorm
 * User: mtam
 * Date: 10/02/2023
 * Time: 10:28
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="<?php asset('images/favicon.png'); ?>">
    <title><?php echo get_bloginfo(); ?></title>
    <link rel="stylesheet" href="<?php asset('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('css/animate.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="<?php asset('css/style.css'); ?>?date=<?=date('YmdGis');?>" >
    <link rel="stylesheet" type="text/css" href="<?php asset('css/responsive.css'); ?>?date=<?=date('YmdGis');?>">
    <link rel="stylesheet" type="text/css" href="<?php asset('css/swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php asset('css/jquery.fancybox.min.css'); ?>">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TN1C4VHHMP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TN1C4VHHMP');
    </script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5WHJ0QSG9B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5WHJ0QSG9B');
</script>
</head>

<body>

<div id="loading">
</div>

<header id="header" >
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>" title="isle -アイル-" class="d-flex align-items-end">
                <img src="<?php asset('images/logo_head3.svg'); ?>" alt="isle -アイル-">
                <span class="" style="font-size: 16px; margin-left: 10px; margin-top: 5px">庭の設計・施工</span>
            </a></div>
        <div class="wrap-header-mobile" >
            <!--<a-- href="--><!--?php echo get_permalink(29) ?--><!--" class=" btn-contact-mobile">CONTACT</a-->
            <i class="fa fa-bars icon-open-menu-mobile" aria-hidden="true"></i>
        </div>
        <nav id="nav" class="nav-desk">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-nav',
                'container' => 'ul',
                'container_class' => '',
                'menu_class' => 'box-header menu-header'
            ));
            ?>
        </nav>
    </div>
    <nav id="nav-mobile" class="nav-mobile">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-nav',
            'container' => 'ul',
            'container_class' => '',
            'menu_class' => 'box-header menu-header ul-menu-mobile'
        ));
        ?>
    </nav>
</header>
