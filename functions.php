<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);


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

/**
 * Enqueue theme assets.
 * 
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_script('jquery');
    // wp_enqueue_script('js-cookie', 'https://www.jsdelivr.com/package/npm/js-cookie', array(), $theme->get('Version'));

    // wp_enqueue_style('tailpress', tailpress_asset('dist/css/app.css'), array(), $theme->get('Version'));
    // wp_enqueue_script('tailpress', tailpress_asset('dist/js/app.js'), array(), $theme->get('Version'));


    // wp_enqueue_script('swiper-init', tailpress_asset('dist/js/swiper-init.js'), array(), $theme->get('Version'));


    // wp_enqueue_script('aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');
