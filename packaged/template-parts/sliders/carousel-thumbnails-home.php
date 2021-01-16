<article class="container-carousel">
    <?php if ( have_rows( 'orenda_gallery_home' ) ) : ?>
	<?php while ( have_rows( 'orenda_gallery_home' ) ) : the_row(); ?>
    <!-- Slider main container : Full-->
    <div class="swiper-container full">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php if ( have_rows( 'gallery_home' ) ) : ?>
                <?php while ( have_rows( 'gallery_home' ) ) : the_row(); ?>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <?php $image_home = get_sub_field( 'image_home' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image_home ) : ?>
                            <?php echo wp_get_attachment_image( $image_home, $size ); ?>
                        <?php endif; ?>
                        <p><?php the_sub_field( 'legende_home' ); ?></p>
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


        <div class="entry-content">
            <h2><?php the_sub_field( 'titre_home' ); ?></h2>
            <h5><?php the_sub_field( 'sous_titre_home' ); ?></h5>
            <p class="item-texte"><?php the_sub_field( 'description_home' ); ?></p>
        </div>
	<?php endwhile; ?>
    <?php endif; ?>
</article>
