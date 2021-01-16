<?php
// Template Name: Press
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Chapter: Press -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Presse', 'orenda_art' ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails &#45; #1 -->
        <?php get_template_part('template-parts/sliders/carousel', 'thumbnails-press'); ?>


        <!-- Chapter: Released press -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Released press', 'orenda_art' ); ?></h6>
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
            <a href="<?php the_field( 'exposition_archivees' ); ?>" class="item-link" target="_blank">
                <h6><?php esc_html_e( 'Archive press', 'orenda_art' ); ?></h6>
                <svg class="chapter-arrow-down" width="29" height="17" viewBox="0 0 29 17" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 2.20679L12.8301 15.002M2 2.20679L16.1699 15.002" stroke="#00597B" stroke-width="5"/>
                </svg>
            </a>
        </div>

    </main>
</div>

<?php get_footer(); ?>
