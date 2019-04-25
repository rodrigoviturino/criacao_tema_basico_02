<?php
// Include
function rp_theme_styles() {

    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
    
    // Parametro TRUE serve para falar que é para ser adicionado no FIM o SCRIIP JS                                                                            
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), true );
}

// Hooks
add_action( 'wp_enqueue_scripts','rp_theme_styles' );