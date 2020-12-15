<article class="container-carousel">
<?php if ( have_rows( 'galerie_xxeme_siecle' ) ) : ?>
	<?php while ( have_rows( 'galerie_xxeme_siecle' ) ) : the_row(); ?>

    <!-- Slider main container : Full-->
    <div class="swiper-container full">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php if ( have_rows( 'carousel' ) ) : ?>
                <?php while ( have_rows( 'carousel' ) ) : the_row(); ?>
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image ) : ?>
                            <?php echo wp_get_attachment_image( $image, $size ); ?>
                        <?php endif; ?>
                        <p><?php the_sub_field( 'texte' ); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
     </div>



    <div class="entry-content">
		<h2><?php the_sub_field( 'titre_' ); ?></h2>
		<h5><?php the_sub_field( 'description' ); ?></h5>
		<p class="press-item-texte"><?php the_sub_field( 'explications' ); ?></p>
    </div>


	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>




</article>
