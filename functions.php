<?php

function mytheme_register_menus() {
    register_nav_menus(
        array(
            'header' => __( 'Header Menu', 'mytheme' ),
        )
    );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );
