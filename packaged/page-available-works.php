<?php
    // Template Name: Available Works
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="chapter available-works">
                <p>Les oeuvres suivantes sont disponibles à la galerie en permanence. pour plus d’informations, veuillez contacter la galerie par téléphone ou email.</p>
            </div>

            <article class="available-works-grid">
                <?php if ( have_rows( 'add_a_new_available_work' ) ) : ?>
                    <?php while ( have_rows( 'add_a_new_available_work' ) ) : the_row(); ?>
                    <div class="available-works-item">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $image ) : ?>
                            <?php echo wp_get_attachment_image( $image, $size ); ?>
                        <?php endif; ?>
                        <?php $artist_name = get_sub_field( 'artist_name' ); ?>
                        <?php if ( $artist_name ) : ?>
                            <?php foreach ( $artist_name as $post ) : ?>
                                <?php setup_postdata ( $post ); ?>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php endforeach; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <p><?php the_sub_field( 'title_of_the_work' ); ?></p>
                        <p><?php the_sub_field( 'category_of_the_work' ); ?></p>
                        <p><?php the_sub_field( 'date_of_the_work' ); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>
            </article>

        <?php endwhile; endif; ?>

    </main>
</div>

<?php get_footer(); ?>
