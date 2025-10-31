<?php
function mijn_thema_setup() {
    register_nav_menus(array(
        'hoofdmenu' => __('Hoofdmenu')
    ));
}
add_action('after_setup_theme', 'mijn_thema_setup');

function mytheme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
