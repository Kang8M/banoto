<?php get_header(); ?>
    <div class="main">
        <?php $getCover = get_field('page_cover'); ?>
        <?php if(!empty($getCover)) { ?>
            <div class="page-header" style="background-image: url('<?php echo $getCover; ?>')">
                <div class="container">
                    <h2 class="section-title"><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-9">
                    <article class="entry">
                        <?php if(empty($getCover)) { ?>
                            <time class="entry-datetime" datetime=""><?php echo get_the_date(); ?></time>
                            <h2 class="entry-header"><?php echo get_the_title(); ?></h2>
                        <?php } ?>
                        <div class="entry-content">
                            <?php
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                            ?>
                        </div>
                    </article>
                    <?php $getRelated = get_field('page_related'); ?>
                    <?php if($getRelated == 'yes') { ?>
                        <div style="margin: 10px 0px;"></div>
                        <h2 class="single-car-title" style="font-size: 18px;">Trang liên quan</h2>
                        <?php
                            query_posts(
                                array(
                                    'post_type' => array('page'),
                                    'posts_per_page' => 3,
                                    'post__not_in' => array(get_the_ID(), 54)
                                )
                            );
                            if (have_posts()) {
                                while (have_posts()) : the_post();
                                    $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                        ?>
                                    <div class="col-xs-12 col-sm-6 col-lg-4 post">
                                        <div class="post-media">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <img src="<?php echo $urlThumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <h3 class="post-name">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            }
                            wp_reset_query();
                        ?>
                    <?php } ?>
                </div>
                <?php get_sidebar(); ?>
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