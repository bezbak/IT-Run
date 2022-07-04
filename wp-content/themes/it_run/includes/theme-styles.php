<?php
if (!defined('ABSPATH')) {
    exit;
}

//Подключение стилей и скриптов
function os_scripts()
{

    wp_enqueue_style('vendor-min', get_template_directory_uri() . '/assets/css/vendor/vendor.min.css');
    wp_enqueue_style('menus', get_template_directory_uri() . '/assets/css/menus.css');
    wp_enqueue_style('plugins-min', get_template_directory_uri() . '/assets/css/plugins/plugins.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

//*********************  Скрипты jQuery переподключение
wp_enqueue_script(
    'modernizr-min-js',
    get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js',
    array(),
    false,
    true
);
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.5.1.min.js', false, null, false);
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'jquery-migrate-min-js',
        get_template_directory_uri() . '/assets/js/vendor/jquery-migrate-3.3.0.min.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'bootstrap-min-js',
        get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'plugins-min-js',
        get_template_directory_uri() . '/assets/js/plugins/plugins.min.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        false,
        true
    );

}

add_action('wp_enqueue_scripts', 'os_scripts');