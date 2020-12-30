<?php // Template Name: Home ?>
<?php get_header(); ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Component: Carousel Hero -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'home' ); ?>

        <!-- Chapter: About us -->
        <div class="chapter">
            <h6><?php esc_html_e( 'About us', 'orenda_art'  ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails - home -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails-home' ); ?>

    </main>
</div>

<?php get_footer(); ?>
