<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title>Đại L&yacute; Chevrolet Mỹ Đ&igrave;nh | Chevrolet Thăng Long | Hotline 0989323799</title>
    <link href="<?php echo get_template_directory_uri(); ?>/fancybox/css/jquery.fancybox.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet"/>
    <link href="<?php echo get_template_directory_uri(); ?>/css/post.css" rel="stylesheet"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fancybox/js/jquery.fancybox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tether.min.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-tabdrop.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.hc-sticky.min.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" async></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.unobtrusive.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=2085091925044570&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header class="header" id="header">
    <div class="header-main">
        <div class="container">
            <h1 class="header-logo">
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                    <span class="sr-only"><?php echo get_option('general_company'); ?></span>
                    <img src="<?php echo get_option('general_logo'); ?>" alt="<?php echo get_option('general_company'); ?>" title="<?php echo get_option('general_company'); ?>"/>
                </a>
            </h1>
            <ul class="header-info clearfix">
                <li class="header-address">
                    <span class="icon"><i class="fa fa-map-marker"></i></span>
                    <div class="text address">
                        <?php echo get_option('contact_address'); ?>
                    </div>
                </li>
                <li class="header-agenda">
                    <span class="icon"><i class="fa fa-calendar"></i></span>
                    <div class="text agenda">
                        <?php echo get_option('contact_giolamviec'); ?>
                    </div>
                </li>
                <li class="header-phone">
                    <span class="icon"><i class="fa fa-phone"></i></span>
                    <div class="text phone">
                        <a href="tel:<?php echo get_option('contact_hotline'); ?>"></a>
                        <span class="phone-number"><?php echo get_option('contact_hotline'); ?></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="header-nav">
        <div class="container">
            <nav class="navbar main-nav">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#main-nav">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-toggleable-md" id="main-nav">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => '',
                            'menu_class' => 'menu',
                            'walker' => new WPDocs_Walker_Nav_Menu()
                        ) );
                    ?>
<!--                    <ul class="menu">-->
<!--                        <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9">-->
<!--                            <a href="index.html">Trang chủ</a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-0">-->
<!--                            <a href="san-pham.html">Sản phẩm</a>-->
<!--                            <ul class="sub-menu">-->
<!--                                <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-0">-->
<!--                                    <a href="#">Spark Van 2018</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1">-->
<!--                            <a href="#">Giới thiệu</a>-->
<!--                            <ul class="sub-menu">-->
<!--                                <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-0">-->
<!--                                    <a href="#">Giới Thiệu Công Ty</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!---->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2">-->
<!--                            <a href="#">Khuyến mãi</a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3">-->
<!--                            <a href="#">Tư vấn</a>-->
<!--                            <ul class="sub-menu">-->
<!--                                <li class="menu-item menu-item-type-post_type menu-item-object-product menu-item-0">-->
<!--                                    <a href="#">Tư Vấn Trả Góp</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4">-->
<!--                            <a href="#">Chăm Sóc</a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5">-->
<!--                            <a href="#">Tin Tức</a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6">-->
<!--                            <a href="#">Liên hệ</a>-->
<!--                        </li>-->
<!--                    </ul>-->
                </div>
            </nav>
            <form class="form-search" action="<?php echo home_url( '/' ); ?>" method="GET">
                <div class="input-group">
                    <input type="text" name="s" class="form-control" placeholder="Tìm kiếm..." value="<?php echo get_search_query() ?>">
                    <input type="hidden" name="post_type[]" value="sanpham" />
                    <input type="hidden" name="post_type[]" value="phienban" />
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</header>