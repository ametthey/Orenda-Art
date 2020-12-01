<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Chapter: Les artistes -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Les artistes', 'orenda_art' ); ?></h6>
        </div>

        <article class="container-artist-list">
        <?php
            $args = array(
                'post_type'      => 'artiste',
                'posts_per_page' => -1,
            );

            $home_projects = new WP_Query( $args );

            if ( $home_projects->have_posts() ) : while ( $home_projects->have_posts() ) : $home_projects->the_post();
        ?>

        <a href="<?php esc_url( the_permalink() ); ?>">
            <div class="artist-thumbnail" id="artist-<?php the_ID(); ?>">
                <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
                <h4><?php the_title(); ?></h4>
            </div>
        </a>


        <?php endwhile; endif; wp_reset_postdata(); ?> <!-- WP_Query for CPT project -->


        </article>

    </main>
</div>

<?php get_footer(); ?>
