<?php

//Remove REST API in HTTP Headers
remove_action('template_redirect', 'rest_output_link_header', 11, 0);

// Remove Feed Links
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);

// Remove Smilies
add_filter('emoji_svg_url', '__return_false');
remove_filter('comment_text', 'convert_smilies', 20);
remove_filter('the_excerpt', 'convert_smilies');
remove_filter('the_content', 'convert_smilies');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('init', 'smilies_init', 5);

// Remove Unneccessary Header Code
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
