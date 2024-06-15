<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_setup() {
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
        'footer-menu' => __('Footer Menu')
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
?>
