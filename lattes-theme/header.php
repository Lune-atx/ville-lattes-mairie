<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title><?php bloginfo( 'name' );?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="mainWrapper">
        <!-- NAVIGATION -->
        <header class="lattesHeader" id="lattesHeader">
            <?php the_custom_logo(); ?>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'main',
                        'menu_class'      => 'lattesNavArea_nav',
                        'container'       => 'nav',
                        'container_id'    => 'lattesNav',
                        'container_class' => 'lattesNavArea'
                    )
                );
            ?>
            <i class="fas fa-bars lattesHeader_burger" id="lattesBurger"></i>
        </header>