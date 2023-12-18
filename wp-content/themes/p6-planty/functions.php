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
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        // Créez le lien "Admin"
        $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';

        // Trouvez la position du lien "Nous rencontrer"
        $meet_us_position = strpos($items, 'Nous rencontrer');

        // Insérez le lien "Admin" juste après le lien "Nous rencontrer"
        $items = substr_replace($items, $admin_link, $meet_us_position + strlen('Nous rencontrer'), 0);
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