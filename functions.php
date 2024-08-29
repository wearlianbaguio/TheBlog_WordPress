<?php 

function theblog_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());

}

add_action('wp_enqueue_scripts', 'theblog_assets');

function theblog_theme_support() {

    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo');
    add_theme_support( 'menus');
    add_theme_support( 'title-tag');

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_1_menu', 'Footer 1 Menu');
    register_nav_menu('footer_2_menu', 'Footer 2 Menu');

} 

add_action('after_setup_theme', 'theblog_theme_support');


function theblog_custom_post() {
    $rice_label = array(
        'name' => __('Rice', 'textdomain'),
        'singular_name' => __('Rice', 'textdomain'),
        'add_new' => __('Add Rice', 'textdomain'),
        'edit_item' => __('Edit Rice', 'textdomain'),
        'add_new_item' => __('Add New Rice', 'textdomain'),
        'all_items' => __('Rice', 'textdomain'),

    );
}