<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-9">
                    <article class="entry">
                        <time class="entry-datetime" datetime=""><?php echo get_the_date(); ?></time>
                        <h2 class="entry-header"><?php echo get_the_title(); ?></h2>
                        <div class="entry-content">
                            <?php
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                            ?>
                        </div>
                    </article>
                    <div style="margin: 10px 0px;"></div>
                    <h3 style="padding: 10px 0px;">Bài viết liên quan</h3>
                    <?php
                        query_posts(
                            array(
                                'post_type' => array('post'),
                                'posts_per_page' => 3,
                                'post__not_in' => array(get_the_ID())
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