<?php if ( have_rows( 'expositions_passees' ) ) : ?>
    <?php while ( have_rows( 'expositions_passees' ) ) : the_row(); ?>
        <article class="container-carousel">
            <!-- Slider main container : Full-->
            <div class="swiper-container full">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                        <?php if ( have_rows( 'carousel_exposition_passees' ) ) : ?>
                            <?php while ( have_rows( 'carousel_exposition_passees' ) ) : the_row(); ?>
                                <div class="swiper-slide">
                                    <?php $exposition_passees_image = get_sub_field( 'exposition_passees_image' ); ?>
                                    <?php $size = 'full'; ?>
                                    <?php if ( $exposition_passees_image ) : ?>
                                        <?php echo wp_get_attachment_image( $exposition_passees_image, $size ); ?>
                                    <?php endif; ?>
                                    <p><?php the_sub_field( 'exposition_passees_image_legende' ); ?></p>
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
                <h2><?php the_sub_field( 'titre_de_lexposition_passee' ); ?></h2>
                <h5><?php the_sub_field( 'sous_titre_de_lexposition_passee' ); ?></h5>
                <p class="item-texte"><?php the_sub_field( 'description_de_lexposition_passee' ); ?></p>
            </div>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>
