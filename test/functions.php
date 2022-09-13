<?php
function wpdocs_theme_name_scripts()
{
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', [], '');
    wp_enqueue_style('test', get_template_directory_uri() . "/assets/css/index.css", [], '');
    wp_enqueue_script('test', get_template_directory_uri() . "/assets/js/script.js", [], '');
    wp_enqueue_style('font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function remove_admin_login_header()
{ //Haalt witte balk weg in header
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_filter('show_admin_bar', '__return_false');

add_filter('use_block_editor_for_post', '__return_false');
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
});

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

function register_menus()
{

    register_nav_menus(
        array(
            'primary-menu' => _('Primary Menu'),
            'your-preferred-menu-location-id' => _('Title of your menu location'),
        )
    );
}

add_editor_style();
add_action('init', 'register_menus');

add_theme_support('post-thumbnails');

function post_custom_excerpt_lenght($lenght)
{
    return 10;
}
add_filter('excerpt_lenght', 'post_custom_excerpt_lenght', 999);

function post_count()
{
    $total = wp_count_posts()->publish;
    echo 'Total Posts: ' . $total;
}