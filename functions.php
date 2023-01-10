<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well

// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', false);


include "inc/inc.vite.php";
include "inc/projects.php"; // Custom post type for projects
include "inc/menus.php";
include "inc/theme-update.php";

// Snippets
include "inc/snippets/allow-svg.php";
include "inc/snippets/remove-comments.php";
include "inc/snippets/disable-attachment-pages.php";
include "inc/snippets/clean-head.php";


// Add theme support for custom logo
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

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


remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
