<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// Enqueue parent theme style
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), wp_get_theme()->get('Version') );
}

// hooooook du lien
add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2 );
function add_admin_link( $items, $args ) {
    if ( is_user_logged_in() && $args->theme_location == 'main-menu' ) {
        $items .= '<li><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}

// hook du logo
function custom_header_logo() {
    $logo_url = get_stylesheet_directory_uri() . '/assets/img/Logo.jpg'; // Chemin vers le logo, à personnaliser
    $logo_html = '<a href="' . esc_url(home_url('/')) . '" id="logo"><img src="' . esc_url($logo_url) . '" alt="Logo do Site"></a>';
    
    return $logo_html;
}




?>