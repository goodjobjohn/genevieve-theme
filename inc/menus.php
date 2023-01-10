<?php

// Add main menu
function register_header_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
        )
    );
}
add_action('init', 'register_header_menus');

// Add footer menu
function register_footer_left_menus()
{
    register_nav_menus(
        array(
            'footer-left-menu' => __('Footer Left Menu'),
        )
    );
}
add_action('init', 'register_footer_left_menus');

function register_footer_right_menus()
{
    register_nav_menus(
        array(
            'footer-right-menu' => __('Footer Right Menu'),
        )
    );
}
add_action('init', 'register_footer_right_menus');
