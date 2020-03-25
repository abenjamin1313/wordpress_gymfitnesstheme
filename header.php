<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    
<header class="site-header">
    <div class="container header-grid">
        <div class="navigation-bar">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img alt="Site Logo" src="<?php echo get_template_directory_uri() . "/img/logo.svg"; ?>" />
                </a>
            </div><!-- .Logo -->
            <!-- Add Menu -->
            <?php
                $args = array(
                    'theme_location' => 'main_menu',
                    'container' => 'nav',
                    'menu_id'    => 'main_id',
                    'container_class' => '',
                    'menu_class' => 'main-menu menu',
                    'orderby' => 'menu_order',
                );
                wp_nav_menu($args);
            ?>
        </div><!--.nav bar -->
    </div><!--.container -->
</header>