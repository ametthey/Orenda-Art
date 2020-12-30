<!-- Slider main container -->
<article class="container-carousel-hero">
    <!-- Slider main container : Hero-->
    <div class="swiper-container hero">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php if ( have_rows( 'carousel_solo_home' ) ) : ?>
                <?php while ( have_rows( 'carousel_solo_home' ) ) : the_row(); ?>
                <div class="swiper-slide">
                    <?php $carousel_solo_home_image = get_sub_field( 'carousel_solo_home_image' ); ?>
                    <?php $size = 'full'; ?>
                    <?php if ( $carousel_solo_home_image ) : ?>
                        <?php echo wp_get_attachment_image( $carousel_solo_home_image, $size ); ?>
                    <?php endif; ?>
                    <div class="hero-texte">
                        <h1><?php the_sub_field( 'carousel_solo_home_titre' ); ?></h1>
                        <h3><?php the_sub_field( 'carousel_solo_home_date' ); ?></h3>
                    </div>
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
