<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('os_setup')) :

    function os_setup()
    {

        load_theme_textdomain('os', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');


        add_theme_support('html5', array(
            'search-form',
            'comments',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        add_theme_support('custom-background', apply_filters('os_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom-logo', array(
            'header-text' => array('site-title', 'site-description'),
        ));
        // See the __() WordPress function for valid values for $text_domain.

        add_action( 'after_setup_theme', 'theme_register_nav_menu' );
        
        function theme_register_nav_menu() {
            register_nav_menu( 'primary', 'Главное меню' );
        }

        register_nav_menus(array(
            'top'    => 'Главное меню'
        ));
        add_filter('wpcf7_autop_or_not', '__return_false');   
        add_filter('wpcf7_form_elements', function($content) {
            $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
        
            return $content;
        });     
    }
endif;
add_action('after_setup_theme', 'os_setup');