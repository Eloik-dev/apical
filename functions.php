<?php

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

function custom_login()
{
    if (isset($_POST['wp-submit'])) {
        $login_data = [
            'user_login' => sanitize_user($_POST['user_login']),
            'user_password' => esc_attr($_POST['user_pass'])
        ];

        $user = wp_signon($login_data, false);

        if (is_wp_error($user)) {
            echo $user->get_error_message();
        } else {
            wp_clear_auth_cookie();
            do_action('wp_login', $user->ID);
            wp_set_current_user($user->ID);
            wp_set_auth_cookie($user->ID, true);
            wp_safe_redirect('/wp-admin');
            exit;
        }
    }
}
add_action('admin_post_nopriv_custom_login', 'custom_login');
add_action('admin_post_custom_login', 'custom_login');