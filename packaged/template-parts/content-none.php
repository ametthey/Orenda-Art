<?php
  /*
  * Template-parts calling for 404 content
  */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1><?php esc_html_e( '404', 'orenda_art' ); ?></h1>
    </header>

    <div class="entry-content">

        <p><?php esc_html_e('Sorry! No content found', 'orenda_art' ); ?></p>

        <p><?php get_search_form(); ?></p>

    </div>

</article>
