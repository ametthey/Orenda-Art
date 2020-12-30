<?php
// Template Name: Press
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Chapter: Press -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Presse', '_themename' ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails &#45; #1 -->
        <?php get_template_part('template-parts/sliders/carousel', 'thumbnails-press'); ?>


        <!-- Chapter: Released press -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Released press', '_themename' ); ?></h6>
        </div>

        <article id="container-press-text">

                <?php if ( have_rows( 'add_press_older' ) ) : ?>
                    <?php while ( have_rows( 'add_press_older' ) ) : the_row(); ?>
                    <div class="entry-content container-press-item">
                        <h2><?php the_sub_field( 'title_of_the_press_archive' ); ?></h2>
                        <p class="item-date"><?php the_sub_field( 'author_of_the_presss_archive' ); ?></p>
                        <a class="item-link" href="<?php the_sub_field( 'link_of_the_press_archive' ); ?>" target="_blank">View the article</a>
                        <p class="item-texte"><?php the_sub_field( 'description_of_the_press' ); ?></p>
                    </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>

        </article>

        <!-- Chapter: Archived Press -->
        <div class="chapter chapter-past-exhibition">
            <a href="<?php the_field( 'exposition_archivees' ); ?>" target="_blank">
                <h6><?php esc_html_e( 'Archive press', '_themename' ); ?></h6>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/arrow-down.svg" alt="">
            </a>
        </div>

    </main>
</div>

<?php get_footer(); ?>
