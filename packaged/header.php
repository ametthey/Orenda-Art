<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="profile" href="https://gmpg.org/xfn/11" />

        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?> >

        <div id="page">
            <a class="skip-link screen-reader-text" href="#content">
                <?php esc_html_e( 'Skip to content' , 'orenda_art' ); ?>
            </a>

            <header id="masthead" class="site-header" role="banner">


                <!-- Site branding -->
                <div class="site-branding">
                    <a href="<?php echo get_home_url(); ?>">
                        <img class="logo-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/logo_desktop.svg" alt="">
                        <img class="logo-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/logo_mobile.svg" alt="">
                    </a>
                </div>

                <!-- Desktop navigation -->
                <nav id="site-navigation-desktop">
                    <?php
                        $args = [
                            'theme_location'    => 'header-menu',
                            'container_class'   => 'main-navigation',
                            'container_aria_label'  => 'navigation'
                        ];
                        wp_nav_menu( $args );
                    ?>
                </nav>

                <!-- Mobile navigation -->
                <nav id="site-navigation-mobile" class="main-navigation" role="navigation">
                    <?php
                        $args = [
                            'theme_location'    => 'header-menu-mobile',
                        ];
                        wp_nav_menu( $args );
                    ?>
               </nav>

               <!-- Hamburger menu for tablet and mobile navigation -->
               <div class="hamburger hamburger--collapse" role="button" tabindex="0" aria-label="Menu" aria-controls="navigation">
                   <span class="hamburger-box">
                       <span class="hamburger-inner"></span>
                   </span>
               </div>


            </header>


            <div id="content" class="site-content">

