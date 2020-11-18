<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

<article id="artist-<?php the_ID(); ?>">
    <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
    <h4><a href="<?php esc_url( the_permalink() );?>"><?php the_title(); ?></a></h4>
</article>
