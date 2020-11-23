<?php

/**************************************************************************
 * Après avoir cloner le projet:
 * changer le mot orenda-art par le nom du projet
 * en terme d'organiser, on renomme les handle par le
 * nom du projet pour mieux s'y retrouver
 * ex: orenda-art_assets -> myProject_assets
 ***********************************************************************/

/*
 * Starter Theme  stylesheet
 */
function orenda-art_assets() {
    wp_enqueue_style( 'orenda-art-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/bundle.css', [], '1.0.0' ,  'all' );
    wp_enqueue_script( 'orenda-art-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/main.js', [], '1.0.1' ,   true );

}
add_action( 'wp_enqueue_scripts', 'orenda-art_assets' );



/*
 * Admin stylesheet
 */

function orenda-art_admin_assets() {
    wp_enqueue_style( 'orenda-art-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/admin.css', [], '1.0.0', 'all');
    wp_enqueue_script( 'orenda-art-admin-scripts', get_stylesheet_directory_uri() . '/dist/assets/js/admin.js', [], '1.0.0' , true );
}

add_action( 'admin_enqueue_scripts', 'orenda-art_admin_assets' );

/*
 * Login Stylesheet
 */
function orenda-art_login_assets() {
    wp_enqueue_style( 'orenda-art-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/login.css', [], '1.0.0', 'all' );
    // wp_enqueue_script( 'orenda-art-admin-scripts', get_stylesheet_directory_uri() . '/dist/assets/css/login.js', [], '1.0.0', 'all' );
}
add_action( 'login_enqueue_scripts', 'orenda-art_login_assets' );

/***********************************************************************
 *
 * Defer JavaScript Scripts
 *
 ***********************************************************************/

function orenda-art_defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'orenda-art_defer_parsing_of_js', 10 );

/***********************************************************************
 *
 * Remove jQuery
 *
 ***********************************************************************/

function orenda-art_no_more_jquery(){
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'orenda-art_no_more_jquery');

/***********************************************************************
 *
 * Remove jQuery Migrate
 *
 ***********************************************************************/

function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
        $script = $scripts->registered['jquery'];
        if ( $script->deps ) {
            // Check whether the script has any dependencies

            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
        }
    }
}
add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

