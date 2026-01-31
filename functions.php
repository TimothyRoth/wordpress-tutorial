<?php
/** Theme support **/

add_theme_support('post-thumbnails');

/** End Theme support **/

/** Image Types to upload **/
function add_file_types_to_uploads($file_types)
{

    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);

    return $file_types;
}

add_action('upload_mimes', 'add_file_types_to_uploads');

/** End Image Types to uploads **/

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