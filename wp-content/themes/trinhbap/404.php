<?php get_header(); ?>
<div class="main">
    <div class="page-header">
        <div class="container">
            <h2 class="section-title">404 Not Found</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="section-post" style="text-align: center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/404.jpg" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
                    <div style="width: 100%; float; left; clear: both; height: 20px;"></div>
                    <a href="<?php bloginfo('url'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                        <button class="btn btn-danger">Quay Lại Trang Chủ</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php  get_footer(); ?>

