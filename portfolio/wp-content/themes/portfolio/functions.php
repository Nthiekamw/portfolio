<?php 
function css_js() {
    // Enregistrement du style principal
    wp_enqueue_style( 
        'style', 
        get_stylesheet_uri()
    );
}


add_theme_support( 'custom-logo', array(
    40,   // Largeur du logo
) );

add_theme_support( 'custom-logo' );

function portfolio_register_menus() {
    register_nav_menus(array(
        'header' => 'Menu en tête',
    ));
}
add_action('init', 'portfolio_register_menus');
?>