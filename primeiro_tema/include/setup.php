<?php
/* Todas as Funções que inicia no começo do tema*/

// Include
function rp_theme_styles() {

    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');

    // Parametro TRUE serve para falar que é para ser adicionado no FIM o SCRIIP JS                                                                            
    wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), true );
}

// CARREGAR DEPOIS DE TUDO
function rp_after_setup(){
    add_theme_support('menus'); // versao antiga do wp, precisa desta função

    register_nav_menu('primary', __('Primary Menu1', 'primeirotema') );
    register_nav_menu( 'footer', 'menu rodape');

    // ATIVAR THUMBNAILS/IMAGENS DO POST
    add_theme_support( 'post-thumbnails' );

}

// ATIVANDO o Sidebar
function rp_widgets(){
    register_sidebar(array(
        'name' => __('Meu Primeiro Sidebar', 'primeirotema'),
        'id' => 'rp_sidebar',
        'description' => __('Sidebar para o tema', 'primeirotema'),

        'before_title' => '<h4 class="title_widget">',
        'after_title' => '</h4>',


        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>'
    ));
}