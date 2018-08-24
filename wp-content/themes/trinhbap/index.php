<?php
/*
Template Name: Trang Chủ
*/

$idPage = get_the_ID();
?>
<?php get_header(); ?>
    <?php if(wp_is_mobile()){ ?>
        <style type="text/css">
            /* line 1267, template/carmobi4/sass/style.scss */
            .cars-list .info-wrapper1 {
                background: #e0e0e0;
                margin: 0 auto;
            }
            /* line 1270, template/carmobi4/sass/style.scss */
            .cars-list .info-wrapper1 h2 {
                display: inline-block;
                margin: 0;
                padding: 0px 0 8px 5%;
                line-height: 34px;
                font-weight: 400;
            }
            /* line 1276, template/carmobi4/sass/style.scss */
            .cars-list .info-wrapper1 h2 a {
                color: #616161;
            }
            /* line 1280, template/carmobi4/sass/style.scss */
            .cars-list .info-wrapper1 p {
                float: right;
                margin: 0;
                padding: 8px 5% 8px 3px;
                background: #424242;
                line-height: 26px;
                font-size: 16px;
                color: #ffab00;
            }
            /* line 1288, template/carmobi4/sass/style.scss */
            .cars-list .info-wrapper1 p:before {
                position: absolute;
                content: '';
                width: 0;
                height: 0;
                border-bottom: 42px solid #424242;
                border-left: 20px solid transparent;
                margin-top: -8px;
                margin-left: -22.8px;
            }
            /* line 1299, template/carmobi4/sass/style.scss */
            .cars-list .info-wrapper1 p.special {
                float: left;
                padding-top: 10px;
            }
            .cars-list .info-wrapper1 .car-name {
                font-size: 14px;
                max-width: 175px;
                float: left;
                padding: 0px 10px;
                margin-top: 5px;
                overflow: hidden;
                white-space: nowrap;
            }
            .cars-list .info-wrapper1 .car-name::first-letter {
                text-transform: uppercase;
            }
        </style>
        <main>
            <section class="container">
                <div class="support card">
                    <div class="row">
                        <div class="col s5 l3">
                            <img class="circle responsive-img" src="<?php echo get_option('contact_avatar'); ?>">
                            <h6 class="center"><small>Trưởng Nhóm Kinh Doanh Chevrolet Thăng Long</small><br>
                                <span style="white-space: nowrap; font-size: 13px; font-weight: bold"><?php echo get_option('contact_fullname'); ?></span>
                            </h6>
                        </div>
                        <div class="col s7 m9">
                            <p>
                                <?php echo get_option('contact_about'); ?>
                                <br>
                                <span style="white-space: nowrap">
                                    Hotline:
                                    <a class="smartobj" href="tel:<?php echo get_option('contact_hotline'); ?>" onclick="PhoneTracking('<?php echo get_option("contact_hotline"); ?>')">
                                        <span class="phone"><?php echo get_option('contact_hotline'); ?></span>
                                    </a>
                                </span>
                                <br>
                                <span style="white-space: nowrap">
                                    Email:
                                    <a href="mailto:<?php echo get_option('contact_email'); ?>">
                                        <?php echo get_option('contact_email'); ?>
                                    </a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <a href="#baogia" class="modal-trigger btn-car waves-effect waves-light noshadow">
                    <img src="<?php echo get_template_directory_uri(); ?>/mobile/images/money.svg">
                    Yêu cầu báo giá
                </a>
                <a href="#tragop" class="modal-trigger btn-car waves-effect waves-light noshadow">
                    <img src="<?php echo get_template_directory_uri(); ?>/mobile/images/calc.svg">
                    Ước tính trả góp
                </a>
                <a href="#laithu" class="modal-trigger btn-car waves-effect waves-light noshadow">
                    <img src="<?php echo get_template_directory_uri(); ?>/mobile/images/wheel.svg" style="margin-left: -12px;">
                    Đăng ký lái thử
                </a>
            </div>
            <section class="cars-list">
                <h3 class="pretty-title container" style="margin-bottom: 0;">
                    <div class="title">Sản phẩm</div>
                </h3>
                <div class="container">
                    <ul>
                        <?php
                            query_posts(
                                array(
                                    'post_type' => array('sanpham'),
                                    'posts_per_page' => 12,
                                    'orderBy' => 'ID',
                                    'order' => 'ASC'
                                )
                            );
                            if (have_posts()) {
                                while (have_posts()) : the_post();
                                    $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img class="responsive-img" src="http://xechevroletmydinh.com/uploads/product/chevrolet-traioblazer-2018.png?width=300&amp;height=200&amp;mode=pad">
                                    <div class="divider"></div>
                                </a>
                                <div class="info-wrapper1">
                                    <h2 style="padding: 0px;">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <span class="car-name"><?php the_title(); ?></span>
                                        </a>
                                    </h2>
                                    <p>Từ  <?php echo number_format((int)get_field('gia_tu')); ?></p>
                                </div>
                                <p style="clear: both;"></p>
                                <?php echo get_field('mota_sanpham'); ?>
                                <p></p>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="waves-effect waves-light btn">
                                    Xem chi tiết
                                </a>
                            </li>
                        <?php
                                endwhile;
                            };
                        ?>
                    </ul>
                </div>
            </section>
            <section class="cars-list">
                <h3 class="pretty-title container" style="margin-bottom: 0;">
                    <div class="title">Tin tức</div>
                </h3>
                <div class="container">
                    <ul>
                        <?php
                            query_posts(
                                array(
                                    'post_type' => array('post'),
                                    'posts_per_page' => 6
                                )
                            );
                            if (have_posts()) {
                                while (have_posts()) : the_post();
                                    $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img class="responsive-img" src="<?php echo $urlThumbnail; ?>">
                                    <div class="divider"></div>
                                    <h5><?php the_title(); ?></h5></a>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="waves-effect waves-light btn" title="<?php the_title(); ?>">Xem chi tiết</a>
                            </li>
                        <?php
                                    endwhile;
                                }
                            wp_reset_query();
                        ?>
                    </ul>
                </div>
            </section>
        </main>
    <?php } else { ?>
        <div class="main">
            <div class="main-slider owl-carousel hidden-xs-down">
                <?php
                    for($i = 1; $i < 6; $i++):
                        if(get_option('banner-'.$i) != "") {
                ?>
                            <div class="slide">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo get_option('banner-'.$i); ?>" alt="<?php echo bloginfo('name'); ?>" title="<?php echo bloginfo('name'); ?>"/>
                                </a>
                            </div>
                <?php
                        }
                    endfor;
                ?>
            </div>
            <div class="section-utility hidden-xs-down">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="utility clearfix quotation" data-toggle="modal" data-target="#modal-quotation-v2">
                                <span class="icon"><i class="fa fa-tag"></i></span>
                                <span class="text">Yêu cầu báo giá</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="utility clearfix bank" data-toggle="modal" data-target="#modal-bank-v2">
                                <span class="icon"><i class="fa fa-bank"></i></span>
                                <span class="text">Ước tính vay ngân hàng</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="utility clearfix cost" data-toggle="modal" data-target="#modal-cost-v2">
                                <span class="icon"><i class="fa fa-dollar"></i></span>
                                <span class="text">Chi phí lăn bánh</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="utility clearfix test" data-toggle="modal" data-target="#modal-test-drive-v2">
                                <span class="icon"><i class="fa fa-road"></i></span>
                                <span class="text">Đăng ký lái thử</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-why-choose-us hidden-xs-down">
                <div class="container">
                    <h2 class="section-title"><?php the_field('tieu_de_khung1'); ?></h2>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="row">
                                <?php
                                    if( have_rows('ly_do_khung1', $idPage) ):
                                        $i = 0;
                                        while( have_rows('ly_do_khung1', $idPage) ): the_row();
                                ?>
                                            <div class="col-xs-12 col-sm-12 reason">
                                                <div class="icon"><?php echo get_sub_field('icon_lydo_khung1') ?></div>
                                                <div class="text">
                                                    <h6 class="name"><?php echo get_sub_field('tieude_lydo_khung1') ?></h6>
                                                    <div class="content">
                                                        <p><?php echo get_sub_field('noidung_lydo_khung1') ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                        endwhile;
                                    endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-5 guarantee">
                            <img src="<?php the_field('hinh_anh_khung1'); ?>" alt="<?php the_field('tieu_de_khung1'); ?>" title="<?php the_field('tieu_de_khung1'); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-car">
                <div class="container">
                    <?php
                        query_posts(
                            array(
                                'post_type' => array('phienban'),
                                'posts_per_page' => 12,
                                'orderBy' => 'ID',
                                'order' => 'ASC'
                            )
                        );
                        if (have_posts()) {
                            while (have_posts()) : the_post();
                                $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                    ?>
                                <div class="col-xs-12 col-sm-6 col-lg-3 car">
                                    <div class="car-media">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img src="<?php echo $urlThumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
                                        </a>
                                    </div>
                                    <div class="car-info">
                                        <h3 class="car-name">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                        };
                    ?>
                </div>
            </div>
            <div class="section-why-choose-chevrolet hidden-xs-down">
                <div class="container">
                    <h2 class="section-title"><?php the_field('tieu_de_khung2', $idPage); ?></h2>
                    <div class="row">
                        <?php
                            if( have_rows('ly_do_khung2', $idPage) ):
                                $i = 0;
                                while( have_rows('ly_do_khung2', $idPage) ): the_row();
                        ?>
                                    <div class="col-xs-12 col-sm-6 col-lg-3 reason">
                                        <div class="icon"><?php echo get_sub_field('icon_lydo_khung2') ?></div>
                                        <div class="text">
                                            <h6 class="name"><?php echo get_sub_field('tieude_lydo_khung2') ?></h6>
                                            <div class="content">
                                                <p><?php echo get_sub_field('noidung_lydo_khung2') ?></p>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="slide-article-home container">
                <?php
                    query_posts(
                        array(
                            'post_type' => array('post'),
                            'posts_per_page' => 6
                        )
                    );
                    if (have_posts()) {
                        while (have_posts()) : the_post();
                            $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                ?>
                            <a class="slide" href="<?php the_permalink(); ?>">
                                <div class="post" style="padding: 5px;">
                                    <div class="post-media">
                                        <img src="<?php echo $urlThumbnail; ?>" style="width: 245px; height: 245px;" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                    </div>
                                    <div class="post-info">
                                        <h3 class="post-name">
                                            <?php the_title(); ?>
                                        </h3>
                                        <time class="post-datetime" datetime="<?php echo get_the_date(); ?>">
                                            <?php echo get_the_date(); ?>
                                        </time>
                                    </div>
                                </div>
                            </a>
                <?php
                        endwhile;
                    }
                    wp_reset_query();
                ?>

            </div>
            <div class="section-consult" style="background-image: url('<?php echo get_option('contact_cover'); ?>');">
                <div class="container">
                    <div class="consult">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 consult-media">
                                <img src="<?php echo get_option('contact_avatar'); ?>" alt=""/>
                            </div>
                            <div class="col-xs-12 col-sm-8 consult-info">
                                <h6 class="consult-name"><?php echo get_option('contact_fullname'); ?></h6>
                                <div class="consult-description">
                                    <p><?php echo get_option('contact_about'); ?></p>
                                    <a class="consult-phone" href="tel:<?php echo get_option('contact_hotline'); ?>"><i class="fa fa-phone"></i><?php echo get_option('contact_hotline'); ?></a><br>
                                    <a class="consult-email" href="mailto:<?php echo get_option('contact_email'); ?>"><i class="fa fa-envelope"></i><?php echo get_option('contact_email'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php get_footer(); ?>