<article class="container-carousel">
    <?php if ( have_rows( 'add_press_&_carousel' ) ) : ?>
        <?php while ( have_rows( 'add_press_&_carousel' ) ) : the_row(); ?>

        <div class="swiper-container full">
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'carousel' ) ) : ?>
                    <?php while ( have_rows( 'carousel' ) ) : the_row(); ?>
                    <div class="swiper-slide">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image ) : ?>
                            <?php echo wp_get_attachment_image( $image, $size ); ?>
                        <?php endif; ?>
                        <p><?php the_sub_field( 'legende' ); ?></p>
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
            <h2><?php the_sub_field( 'title_of_the_press_archive' ); ?></h2>
            <p><?php the_sub_field( 'author_of_the_presss_archive' ); ?></p>
            <a class="item-link" href="<?php the_sub_field( 'link_of_the_press_archive' ); ?>" target="_blank">View The Article</a>
            <p class="item-texte"><?php the_sub_field( 'description_of_the_press' ); ?></p>
        </div>

        <?php endwhile; ?>
    <?php else : ?>
        <?php // no rows found ?>
    <?php endif; ?>
</article>
