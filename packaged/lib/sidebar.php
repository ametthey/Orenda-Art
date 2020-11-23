<?php
    function orenda-art_widgets_init() {
        /***************************************
         * Setup Widget Areas in SIDEBAR
         **************************************/
        register_sidebar([
            'name'          => esc_html__( 'my main sidebar', 'orenda-art' ),
            'id'            => 'my-main-sidebar',
            'description'   => esc_html__( 'Add widgets for the main sidebar here', 'orenda-art' ),
            'class'         => 'my-main-sidebar',
            'before_widget' => '<section class="widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]);

        /***************************************
         * Setup Widget Areas in SIDEBAR-SPLASH
         **************************************/
        register_sidebar([
            'name'          => esc_html__( 'my splash sidebar', 'orenda-art' ),
            'id'            => 'my-splash-sidebar',
            'description'   => esc_html__( 'Add widgets for the splash sidebar here', 'orenda-art' ),
            'class'         => 'my-splash-sidebar',
            'before_widget' => '<section class="page-widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="page-widget-title">',
            'after_title'   => '</h2>',
        ]);

        /***************************************
         * Setup Widget Areas #1 in FOOTER
         **************************************/
        register_sidebar([
            'name'          => esc_html__( 'my footer sidebar', 'orenda-art' ),
            'id'            => 'my-footer-sidebar',
            'description'   => esc_html__( 'Add widgets for the footer sidebar here', 'orenda-art' ),
            'class'         => 'my-footer-sidebar',
            'before_widget' => '<section class="footer-widget">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="footer-widget-title">',
            'after_title'   => '</h2>',
        ]);
    }
    add_action( 'widgets_init', 'orenda-art_widgets_init' );

?>
