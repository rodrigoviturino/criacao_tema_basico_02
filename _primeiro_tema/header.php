<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'./style.css' ?>">
    <title>Primeiro Tema Basico</title>

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

<header>

    <h1>Tema 01</h1>

    <?php
        if( has_nav_menu('primary') ){
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container' => 'nav',
                'container_class' => 'menu-nav',
                // 'container_class' => 'class1 class2 class3' - caso queira adicionar CLASS
                'fallback_cb' => false
            ) );
        }
    ?>

    <nav>
        <ul>
            <li><a href="#"></a></li>
        </ul>
    </nav>
    
<?php 
    wp_footer();
?>

</header>