<?php
/*
Template Name: Trang Chủ
*/

$idPage = get_the_ID();
?>
<?php get_header(); ?>
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
                            'posts_per_page' => 12
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
<?php get_footer(); ?>