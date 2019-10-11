<?php
/*

Plugin Name: o2t-customize-login-page
Description: Кастомизация входа в админку
Version: 1.1
Author: Солдатов Николай
Author URI: https://only-to-top.ru

*/

add_action('login_header', 'o2t_add_template');

function o2t_add_template() {
    include __DIR__ . '/template.php';
}


add_action('login_enqueue_scripts', 'o2t_enqueue_assets');

function o2t_enqueue_assets() {
    wp_enqueue_style ( 'o2t-styles', plugins_url('assets/styles.css', __FILE__) );
    wp_enqueue_script ( 'o2t-jquery-script', plugins_url('assets/jquery-3.3.1.min.js', __FILE__) );
    wp_enqueue_script ( 'o2t-scripts', plugins_url('assets/scripts.js', __FILE__) );
}