<?php

function apical_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('posts-style', get_template_directory_uri() . '/assets/css/posts.css');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', ['jquery'], '5.3.2');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
    wp_enqueue_script('login-popup', get_template_directory_uri() . '/assets/js/loginPopup.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'apical_enqueue_styles');