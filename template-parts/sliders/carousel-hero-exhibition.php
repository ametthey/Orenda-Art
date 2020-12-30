<!-- Slider main container -->
<article class="container-carousel-hero">
    <!-- Slider main container : Hero-->
    <div class="swiper-container hero">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php if ( have_rows( 'carousel_exposition_actuelle' ) ) : ?>
                <?php while ( have_rows( 'carousel_exposition_actuelle' ) ) : the_row(); ?>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <?php $exposition_actuelle_image = get_sub_field( 'exposition_actuelle_image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $exposition_actuelle_image ) : ?>
                            <?php echo wp_get_attachment_image( $exposition_actuelle_image, $size ); ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/carousel-arrow-left.svg" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/carousel-arrow-right.svg" alt="">
        </div>

    </div>
</article>
