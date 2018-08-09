<?php get_header(); ?>
    <div class="main">
        <div class="page-header">
            <div class="container">
                <h2 class="section-title"><?php the_archive_title(); ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-9">
                    <div class="section-post">
                        <?php
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
                                            <time class="post-datetime" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                                        </div>
                                    </div>
                        <?php
                                endwhile;
                            }
                        ?>
                        <div class="blog-pagenat-wthree" style="margin-top: 10px;">
                            <?php wpbeginner_numeric_posts_nav(); ?>
                        </div>
                    </div>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php  get_footer(); ?>