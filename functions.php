<?php
function my_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

}

function my_theme_adding_styles()
{
    wp_register_style('majolika_stylesheet', get_stylesheet_directory_uri() . '/css/storefront-majolika.css');
    wp_enqueue_style('majolika_stylesheet');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_adding_styles', 99);

/** Remove WP Emojis */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/** Remove Storefront Google Fonts */
function majolika_child_styles()
{
    wp_dequeue_style('storefront-fonts');
}
add_action('wp_enqueue_scripts', 'majolika_child_styles', 999);

/** Set image compression level */
add_filter('jpeg_quality', function($arg) {return 100;});
