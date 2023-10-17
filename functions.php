<?php

if (file_exists(ABSPATH . '/wp-admin/includes/taxonomy.php')) {
    require_once(ABSPATH . '/wp-admin/includes/taxonomy.php');
}

function apical_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('posts-style', get_template_directory_uri() . '/assets/css/posts.css');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'apical_enqueue_styles');

function apical_enqueue_scripts()
{
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, false);
    wp_enqueue_script('login-popup', get_template_directory_uri() . '/assets/js/loginPopup.js', ['jquery'], null, false);
}
add_action('wp_enqueue_scripts', 'apical_enqueue_scripts');

function wp_title_404($title)
{
    if (is_404()) {
        $title = 'Page inexistante';
    }
    return $title;
}
add_filter('wp_title', 'wp_title_404');

define('THEME', 'apical');
function apical_activation()
{
    if (get_option('my_theme_activated') == THEME) {
        // Categories
        $formationsId = wp_create_category('Formations');
        $fichesId = wp_create_category('Fiches');
        $outilsID = wp_insert_category([
            'cat_name' => '1. Choisir les outils pour développer un site WordPress',
            'category_nicename' => 'Choisir les outils pour développer un site WordPress',
            'category_parent' => $fichesId
        ]);

        // Posts
        wp_insert_post([
            'post_status' => 'publish',
            'post_title' => 'Formation PUB020 : WordPress',
            'post_name' => 'wordpress',
            'post_category' => [
                $formationsId
            ],
        ]);

        wp_insert_post([
            'post_status' => 'publish',
            'post_title' => '1.1 Choisir un IDE pour coder en PHP',
            'post_name' => 'choisir_un_ide_pour_coder_en_php',
            'post_category' => [
                $outilsID
            ],
        ]);
    }
}
add_action('after_switch_theme', 'apical_activation');