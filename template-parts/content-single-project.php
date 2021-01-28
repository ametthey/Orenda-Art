<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

    <div class="chapter">
        <h6><?php esc_html_e( 'Artist Bio', '_themename' ); ?></h6>
    </div>

    <article id="artist-individual-presentation">
        <div class="artist-individual-presentation-image">
            <?php the_post_thumbnail( 'individual_artist_portrait' ); ?>
            <p><?php the_field( 'image_information' ); ?></p>
        </div>

        <div class="artist-individual-presentation-text">
            <h2><?php esc_html_e( the_title() ); ?></h2>
            <p class="item-category"><?php the_terms( $post->ID, 'categoriedelartiste' ); ?></p>
            <a class="item-link" href="<?php the_field( 'cv_link' ); ?>" target="_blank">View CV</a>
            <p class="item-texte"><?php the_field( 'paragraphe' ); ?></p>
        </div>
    </article>


    <!-- Chapter: Works -->
    <div class="chapter">
        <h6><?php esc_html_e( 'Works', '_themename' ); ?></h6>
    </div>

    <article>
        <?php if ( have_rows( 'images' ) ) : ?>
            <?php while ( have_rows( 'images' ) ) : the_row(); ?>
            <div class="individual-artist-item">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php $size = 'full'; ?>
                <?php if ( $image ) : ?>
                    <?php echo wp_get_attachment_image( $image, $size ); ?>
                <?php endif; ?>
                <p><?php the_sub_field( 'description' ); ?></p>
            </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </article>

    <?php the_content(); ?>

