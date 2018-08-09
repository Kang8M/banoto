<?php get_header(); ?>
    <div class="w3_breadcrumb">
        <div class="breadcrumb-inner">
            <ul>
                <li><a href="<?php bloginfo('url'); ?>" title="<?php echo get_bloginfo('name'); ?>">Trang Chủ</a><i>//</i></li>
                <li><?php the_archive_title(); ?></li>
            </ul>
        </div>
    </div>
    <div class="w3_content_agilleinfo_inner" style="padding-top: 0px;">
        <div class="agile_featured_movies">
            <h3 class="agile_w3_title"><?php the_archive_title(); ?></h3>
            <div class="wthree_agile-requested-movies">
                <?php
                    if (have_posts()) {
                        while (have_posts()) : the_post();
                            $urlThumbnail = get_the_post_thumbnail_url(get_the_ID());
                ?>
                            <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                                <a href="<?php the_permalink(); ?>" class="hvr-sweep-to-bottom" title="<?php the_title(); ?>">                                            
                                    <div class="box-img-thumb" style="background-image: url('<?php echo $urlThumbnail; ?>');">
                                        <img src="<?php echo $urlThumbnail; ?>" title="<?php the_title(); ?>" class="img-responsive" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="w3l-action-icon">
                                        <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 6, '...' ); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                <?php
                        endwhile;
                    }
                ?>
            </div>
            <div class="blog-pagenat-wthree" style="width: 100%; clear: both;">
                <?php wpbeginner_numeric_posts_nav(); ?>
				<?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>