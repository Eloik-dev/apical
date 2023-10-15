<?php

print_r($_POST);
if (isset($_POST['submit'])) {
    $creds = array();
    $creds['user_login'] = $_POST['username'];
    $creds['user_password'] = $_POST['password'];
    $creds['remember'] = true;
    $user = wp_signon($creds, false);
    if (is_wp_error($user)) {
        echo $user->get_error_message();
    } else {
        wp_redirect(home_url());
        exit;
    }
}
?>