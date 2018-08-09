<?php
include_once 'includes/framework/options-init.php';
include_once 'includes/plugins/fix-post/fix-duplicates.php';
include_once 'includes/plugins/acf/acf.php';

add_theme_support('menus');
register_nav_menus(
    array(
        'main-nav' => 'Menu Primary'
    )
);

register_nav_menu('menu-footer', 'Menu Footer');

function wpbeginner_numeric_posts_nav()
{
    if (is_singular()) {
        return;
    }
    global $wp_query;
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    if ($paged >= 1) {
        $links[] = $paged;
    }
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul>' . "\n";
    if (get_previous_posts_link()) {
        printf('<li>%s</li>' . "\n", get_previous_posts_link_custom('Prev'));
    }
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="disabled"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links)) {
            echo '<li>…</li>';
        }
    }
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="disabled"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li class="more-pagination"><a href="javascript: void(0);">...</a></li>' . "\n";
        }
        $class = $paged == $max ? ' class="disabled"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    if (get_next_posts_link()) {
        printf('<li>%s</li>' . "\n", get_next_posts_link_custom('Next'));
    }
    echo '</ul>' . "\n";
}

function get_previous_posts_link_custom($label = null)
{
    global $paged;

    if (null === $label)
        $label = __('&laquo; Previous Page');

    if (!is_single() && $paged > 1) {
        /**
         * Filters the anchor tag attributes for the previous posts page link.
         *
         * @since 2.7.0
         *
         * @param string $attributes Attributes for the anchor tag.
         */
        $attr = apply_filters('previous_posts_link_attributes', '');
        return '<a class="frist" href="' . previous_posts(false) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</a>';
    }
}

function get_next_posts_link_custom($label = null, $max_page = 0)
{
    global $paged, $wp_query;

    if (!$max_page)
        $max_page = $wp_query->max_num_pages;

    if (!$paged)
        $paged = 1;

    $nextpage = intval($paged) + 1;

    if (null === $label)
        $label = __('Next Page &raquo;');

    if (!is_single() && ($nextpage <= $max_page)) {
        /**
         * Filters the anchor tag attributes for the next posts page link.
         *
         * @since 2.7.0
         *
         * @param string $attributes Attributes for the anchor tag.
         */
        $attr = apply_filters('next_posts_link_attributes', '');

        return '<a class="last" href="' . next_posts($max_page, false) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</a>';
    }
}

function create_custom_taxonomy()
{
    $args = array(
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => false,
    );
//    $args['labels'] = array(
//        'name' => 'Thể Loại AOE',
//        'singular' => 'Thể Loại AOE',
//        'menu_name' => 'Thể Loại AOE',
//		'rewrite' => array('slug' => 'aoe', 'with_front' => false)
//    );
//    register_taxonomy('category_aoe', 'video_aoe', $args);
}

add_action('init', 'create_custom_taxonomy', 0);
add_action('init', 'create_post_type');

function update_permalink_taxonomy()
{
//    $category_args = get_taxonomy( 'category_aoe' );
//    $category_args->rewrite['slug'] = 'video-aoe';
//    $category_args->rewrite['with_front'] = false;
//    register_taxonomy( 'category_aoe', 'video_aoe', (array) $category_args );
}

add_action('init', 'update_permalink_taxonomy', 11);

function create_post_type()
{
    register_post_type('phienban',
        array(
            'labels' => array(
                'name' => __('Phiên Bản'),
                'singular_name' => __('Phiên Bản'),
                'add_new_item' => "Phiên Bản"
            ),
            'menu_icon' => 'dashicons-screenoptions',
            'public' => true,
            'has_archive' => true,
            'menu_icon' => get_template_directory_uri() . '/images/admin/icon_car.png',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'rewrite' => array('slug' => 'phien-ban')
        )
    );
    register_post_type('sanpham',
        array(
            'labels' => array(
                'name' => __('Sản Phẩm'),
                'singular_name' => __('Sản Phẩm'),
                'add_new_item' => "Sản Phẩm"
            ),
            'menu_icon' => 'dashicons-screenoptions',
            'public' => true,
            'has_archive' => true,
            'menu_icon' => get_template_directory_uri() . '/images/admin/icon_car.png',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'rewrite' => array('slug' => 'san-pham')
        )
    );
}

function my_enqueue($hook)
{
    wp_enqueue_script('my_custom_script_dat', get_template_directory_uri() . '/includes/plugins/acf/assets/inc/datepicker/jquery-ui.js');
    wp_enqueue_script('my_custom_script', get_template_directory_uri() . '/includes/plugins/acf/assets/inc/select2/select2.min.js');
    wp_enqueue_script('my_custom_script_dat', get_template_directory_uri() . '/includes/plugins/acf/assets/inc/datepicker/date-picker.js');
}

add_action('admin_enqueue_scripts', 'my_enqueue');

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 300, true);
add_theme_support('post-thumbnails', array('post'));
add_theme_support('post-thumbnails', array('phienban'));
add_theme_support('post-thumbnails', array('sanpham'));

/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu
{

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array $args An array of arguments. @see wp_nav_menu()
     */
    function start_lvl(&$output, $depth = 0, $args = array())
    {
        // Depth-dependent classes.
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
        $display_depth = ($depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ($display_depth % 2 ? 'menu-odd' : 'menu-even'),
            ($display_depth >= 2 ? 'sub-sub-menu' : ''),
            'menu-depth-' . $display_depth
        );
        $class_names = implode(' ', $classes);

        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '" multi-column-dropdown>' . "\n";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param array $args An array of arguments. @see wp_nav_menu()
     * @param int $id Current item ID.
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // Passed classes.
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));
        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . ' dropdown">';

        // Link attributes.
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';

        $icon_menu = "";
        if (in_array("menu-item-has-children", $item->classes)) {
            $icon_menu = '<b class="caret"></b>';
        }

        $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s ' . $icon_menu . '</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/* Code Theme */
add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts()
{
    echo '<style> .wp-menu-image img { width: 20px; height: auto; } </style>';
}


function laySanPhamTrongPhienBan($idPhienBan)
{
    $listID = array();
    $querystr = "select post_id from wp_postmeta where meta_key = 'phien_ban' and meta_value = " . $idPhienBan;
    global $wpdb;
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    foreach($pageposts as $item) {
        $listID[] = $item->post_id;
    }
    return $listID;
}