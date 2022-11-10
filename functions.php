<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', false);


include "inc/inc.vite.php";


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

// Add theme support for custom logo
add_theme_support('custom-logo');
