<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Chapter: Les artistes -->
        <div class="chapter">
            <h6><?php esc_html_e( 'Les artistes', 'orenda_art' ); ?></h6>
        </div>

        <article class="container-artist-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="artist-thumbnail" id="artist-<?php the_ID(); ?>">
                <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
                <h4><a href="<?php esc_url( the_permalink() );?>"><?php the_title(); ?></a></h4>
            </div>


        <?php endwhile; endif;  ?>

        <?php echo paginate_links(); ?>
        </article>

    </main>
</div>

<?php get_footer(); ?>
