<?php

function add_scripts_and_styles() {
    wp_enqueue_style( 'index', get_template_directory_uri() . "/assets/css/index.css");
    wp_enqueue_script('script', get_template_directory_uri() . "/assets/js/script.js");
}

add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

add_theme_support('post-thumbnails');

function add_file_types_to_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');

/** Image Register Menus **/
function mytheme_register_menus()
{
    register_nav_menus(
        [
            'header' => __('Header Menu', 'mytheme'),
            'footer' => __('Footer Menu', 'mytheme'),
        ]
    );
}

add_action('after_setup_theme', 'mytheme_register_menus');
/** End Register Menus **/