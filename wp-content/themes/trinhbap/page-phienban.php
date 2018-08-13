<?php /* Template Name: Trang San Pham */ ?>
<?php get_header(); ?>
<div class="main">
    <div class="page-header">
        <div class="container">
            <h2 class="section-title">Sản phẩm</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xl-9">
                <div class="section-car">
                    <div class="container">
                        <?php
                        query_posts(
                            array(
                                'post_type' => array('phienban'),
                                'posts_per_page' => 16
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
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>