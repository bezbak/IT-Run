<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Общие настройки сайта'))
        ->add_fields(array(
            Field::make('text', 'crb_phone_number', __('Номер телефона'))->set_attribute('placeholder', '************'),
            Field::make('text', 'crb_adress', __('Адрес')),
            Field::make('text', 'crb_email', __('Email')),
            Field::make('image', 'crb_logo', __('Лого'))->set_value_type('url'),
            Field::make('text', 'crb_facebook', __('Facebook')),
            Field::make('text', 'crb_instagram', __('Instagram')),
            Field::make('text', 'crb_whatsapp', __('WhatsApp'))->set_attribute('placeholder', '996777555222'),
            Field::make('image', 'crb_footer_logo', __('Лого футера'))->set_value_type('url'),
            Field::make('textarea', 'crb_footer_text', __('Текст футер')),
        ));
}

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

// Подключение настроек темы
require get_template_directory() . '/includes/theme-settings.php';

// Подключение стилей
require get_template_directory() . '/includes/theme-styles.php';
