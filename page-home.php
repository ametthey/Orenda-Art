<?php // Template Name: Home ?>
<?php get_header(); ?>



<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Component: Carousel Hero -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'hero' ); ?>

        <!-- Chapter: About us -->
        <div class="chapter">
            <h6><?php esc_html_e( 'About us', '_themename'  ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails - #1 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>

        <!-- Component: Carousel with thumbnails - #2 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>

        <!-- Component: Carousel with thumbnails - #3 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails' ); ?>


    </main>
</div>

<?php get_footer(); ?>
