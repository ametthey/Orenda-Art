<?php
// Template Name: Exhibitions
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php if ( have_rows( 'expositions_actuelle' ) ) : ?>
            <?php while ( have_rows( 'expositions_actuelle' ) ) : the_row(); ?>

            <!-- Chapter: Exposition actuelle -->
            <div class="chapter">
                <h6><?php esc_html_e( 'Exposition actuelle', 'orenda_art' ); ?></h6>

                <div class="exhibitions-links">
                    <?php $exposition_download_invitation = get_sub_field( 'exposition_download_invitation' ); ?>
                    <?php if ( $exposition_download_invitation ) : ?>
                        <?php $url = wp_get_attachment_url( $exposition_download_invitation ); ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="item-link" target="_blank">Download Invitation</a>
                    <?php endif; ?>
                    <?php $exposition_download_press_release = get_sub_field( 'exposition_download_press_release' ); ?>
                    <?php if ( $exposition_download_press_release ) : ?>
                        <?php $url = wp_get_attachment_url( $exposition_download_press_release ); ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="item-link" target="_blank">Download Press Release</a>
                    <?php endif; ?>
                </div>
            </div>

                <?php get_template_part( 'template-parts/sliders/carousel', 'hero-exhibition' ); ?>

                <article class="exhibitions-presentation">
                    <h2><?php the_sub_field( 'exposition_actuelle_titre' ); ?></h2>
                    <h3><?php the_sub_field( 'exposition_actuelle_date' ); ?></h3>
                </article>

            <?php endwhile; ?>
        <?php endif; ?>

        <!-- Chapter: Expositions passées -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Expositions passées', 'orenda_art' ); ?></h6>
        </div>

        <!-- Component: Carousel with thumbnails - #1 -->
        <?php get_template_part( 'template-parts/sliders/carousel', 'thumbnails-exhibition' ); ?>

        <!-- Chapter: Expositions passées -->
        <div class="chapter chapter-past-exhibition">
            <a href="<?php the_field( 'exposition_archivees' ); ?>" class="item-link" target="_blank">
                <h6><?php esc_html_e( 'Exposition archivées', 'orenda_art' ); ?></h6>
                <svg class="chapter-arrow-down" width="29" height="17" viewBox="0 0 29 17" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27 2.20679L12.8301 15.002M2 2.20679L16.1699 15.002" stroke="#00597B" stroke-width="5"/>
                </svg>
            </a>
        </div>


        <?php endwhile; endif; ?>

    </main>
</div>

<?php get_footer(); ?>
