<?php 

function theblog_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());

}

add_action('wp_enqueue_scripts', 'theblog_assets');