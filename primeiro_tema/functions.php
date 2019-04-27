<?php
// CHAMANDO FUNÇÕES DO SETUP

// INCLUDE
require get_template_directory( ).'/include/setup.php';


// Hooks
add_action( 'wp_enqueue_scripts','rp_theme_styles' );

// Adicionando MENU no painel
add_action( 'after_setup_theme', 'rp_after_setup' );


// ATIVANDO sidebar
add_action( 'widgets_init', 'rp_widgets' );