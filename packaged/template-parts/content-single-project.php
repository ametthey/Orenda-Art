<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

    <div class="chapter">
        <h6><?php esc_html_e( 'Artist Bio', 'orenda_art' ); ?></h6>
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
            <p class="item-texte">Le Parc is a major figure of historical importance within kinetic and contemporary art. In Paris in 1960, he cofounded the influential collective Groupe de Recherche d’Art Visuel (GRAV), along with Horacio Garcia Rossi, Francisco Sobrino, François Morellet, Joël Stein, and Jean-Pierre Vasarely (Yvaral). Le Parc’s early paintings were influenced by the constructivist movement known as Arte Concreto Invención, as well as artists such as Piet Mondrian and Victor Vasarely.
                <br>
                <br>
                Since 1959, Le Parc has continued on his own independent path, applying rigorous organizing principles to his paintings, whether exploring the use of fourteen scales of colors or white, gray, and black in endless varying yet precise combinations. Julio Le Parc was awarded the International Grand Prize for Painting at the 33rd Venice Biennale in 1966. A defender of human rights, he fought against dictatorship in Latin America through numerous collective antifascist projects.</p>
            <p class="read-more">Read More</p>
        </div>
    </article>


    <!-- Chapter: Works -->
    <div class="chapter">
        <h6><?php esc_html_e( 'Works', 'orenda_art' ); ?></h6>
    </div>

    <article>
            <!-- <img src="/wp&#45;content/uploads/2020/11/rilesundayz_group.jpg" alt=""> -->
            <!-- <p>Title, 2020, walnut, 35 x 24 x 24 inches, 88.9 x 61 x 61 cm.</p> -->
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

