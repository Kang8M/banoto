<?php get_header(); ?>
    <div class="main">
        <div class="page-header">
            <div class="container">
                <h2 class="section-title"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-9">
                    <div class="single-car">
                        <div class="single-car-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="dropdown pull-right tabdrop hide">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-bars"></i>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu"></ul>
                                </li>
                                <li class="dropdown pull-right tabdrop hide"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bars"></i><b class="caret"></b></a>
                                    <ul class="dropdown-menu"></ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#single-car-tab-1" role="tab">Tổng quan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#single-car-tab-2" role="tab">Màu sắc</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="single-car-tab-1" role="tabpanel">
                                    <div class="entry-content">
                                        <?php
                                            while ( have_posts() ) : the_post();
                                                the_content();
                                            endwhile;
                                        ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="single-car-tab-2" role="tabpanel">
                                    <div class="single-car-colors">
                                        <div class="image">
                                            <?php
                                                $idPage = get_the_ID();
                                                if( have_rows('danhsach_mausac', $idPage) ):
                                                    while( have_rows('danhsach_mausac', $idPage) ): the_row();
                                            ?>
                                                        <img src="<?php echo get_sub_field('hinh_anh_xe') ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                            <?php
                                                    endwhile;
                                                endif;
                                            ?>
                                        </div>
                                        <ul class="list">
                                            <?php
                                                $idPage = get_the_ID();
                                                if( have_rows('danhsach_mausac', $idPage) ):
                                                    while( have_rows('danhsach_mausac', $idPage) ): the_row();
                                            ?>
                                                        <li><a style="background-color:<?php echo get_sub_field('ma_mau') ?>" title="<?php the_title(); ?>"><?php echo get_sub_field('ma_mau') ?></a></li>
                                            <?php
                                                    endwhile;
                                                endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div style="margin: 10px 0px;"></div>
                        <h2 class="single-car-title" style="font-size: 18px;">Có thể bạn quan tâm</h2>
                        <div class="single-car-version">
                            <?php
                                query_posts(
                                    array(
                                        'post_type' => array('sanpham'),
                                        'posts_per_page' => 4,
                                        'post__not_in' => array(get_the_ID())
                                    )
                                );
                                if (have_posts()) {
                                    while (have_posts()) : the_post();
                                        $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                            ?>
                                        <a class="slide" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <div class="media">
                                                <img src="<?php echo $urlThumbnail; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                        </a>
                            <?php
                                    endwhile;
                                }
                                wp_reset_query();
                            ?>
                        </div>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            if($(window).width() <= 668) {
                $('.entry-content img').removeAttr('style');
            }
        })
    </script>
    </div>
<?php get_footer(); ?>