<!doctype html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <title>Đại L&yacute; Chevrolet Mỹ Đ&igrave;nh | Chevrolet Thăng Long | Hotline <?php echo get_option('contact_hotline'); ?></title>

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

    <?php if(wp_is_mobile()){ ?>
        <style type="text/css">
            .header-info-mobile {
                display: none;
            }
            .navbar-mobile {
                padding: 0px;
            }

            #nav-mobile.side-nav li a {
                overflow: hidden;
            }
        </style>
        <link href="<?php echo get_template_directory_uri(); ?>/mobile/fonts/material-icons.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/mobile/css/style.css" rel="stylesheet">
    <?php } ?>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=2085091925044570&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<?php if(wp_is_mobile()) { ?>
    <header>
        <nav class="navbar navbar-mobile" role="navigation">
            <div class="nav-wrapper z-depth-2">
                <div class="container">
                    <div class="brand-logo">
                        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo get_option('general_logo'); ?>" alt="<?php echo get_option('general_company'); ?>" title="<?php echo get_option('general_company'); ?>"/>
                        </a>
                    </div>
                    <div>
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => '',
                                'menu_class' => 'side-nav',
                                'menu_id' => 'nav-mobile',
                                'walker' => new WPDocs_Walker_Nav_Menu()
                            ) );
                        ?>
                        <a href="#" data-activates="nav-mobile" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<?php } else { ?>
    <header class="header" id="header">
        <div class="header-main">
            <div class="container">
                <h1 class="header-logo">
                    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                        <span class="sr-only"><?php echo get_option('general_company'); ?></span>
                        <img src="<?php echo get_option('general_logo'); ?>" alt="<?php echo get_option('general_company'); ?>" title="<?php echo get_option('general_company'); ?>"/>
                    </a>
                </h1>
                <ul class="header-info clearfix header-info-mobile">
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
<?php } ?>