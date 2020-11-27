<?php
  /*
  * Template-parts calling for the Loop content
  */
?>

    <div class="chapter">
        <h6 class="chapter-link"><?php esc_html_e( 'Site de l\'artiste', '_themename' ); ?></h6>
        <h6 class="chapter-link"><?php esc_html_e( 'Oeuvres disponibles', '_themename' ); ?></h6>
        <h6 class="chapter-link"><?php esc_html_e( 'Télécharger le CV', '_themename' ); ?></h6>
    </div>

    <article id="artist-individual-presentation">
        <div class="artist-individual-presentation-image">
            <?php //the_post_thumbnail( 'thumbnail' ); ?>
            <img src="http://orenda.local/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
            <p>"René Magritte et sa femme", Magritte.</p>
        </div>

        <div class="artist-individual-presentation-text">
            <h1><?php the_title(); ?></h1>
            <h4>paintings</h4>
            <p>Le Parc is a major figure of historical importance within kinetic and contemporary art. In Paris in 1960, he cofounded the influential collective Groupe de Recherche d’Art Visuel (GRAV), along with Horacio Garcia Rossi, Francisco Sobrino, François Morellet, Joël Stein, and Jean-Pierre Vasarely (Yvaral). Le Parc’s early paintings were influenced by the constructivist movement known as Arte Concreto Invención, as well as artists such as Piet Mondrian and Victor Vasarely.
                <br>
                <br>
                Since 1959, Le Parc has continued on his own independent path, applying rigorous organizing principles to his paintings, whether exploring the use of fourteen scales of colors or white, gray, and black in endless varying yet precise combinations. Julio Le Parc was awarded the International Grand Prize for Painting at the 33rd Venice Biennale in 1966. A defender of human rights, he fought against dictatorship in Latin America through numerous collective antifascist projects.</p>
        </div>
    </article>


    <!-- Chapter: Works -->
    <div class="chapter">
        <h6><?php esc_html_e( 'Works', '_themename' ); ?></h6>
    </div>

    <article>
        <div class="individual-artist-item">
            <img src="http://orenda.local/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
            <p>Title, 2020, walnut, 35 x 24 x 24 inches, 88.9 x 61 x 61 cm.</p>
        </div>
        <div class="individual-artist-item">
            <img src="http://orenda.local/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
            <p>Title, 2020, walnut, 35 x 24 x 24 inches, 88.9 x 61 x 61 cm.</p>
        </div>
        <div class="individual-artist-item">
            <img src="http://orenda.local/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
            <p>Title, 2020, walnut, 35 x 24 x 24 inches, 88.9 x 61 x 61 cm.</p>
        </div>
        <div class="individual-artist-item">
            <img src="http://orenda.local/wp-content/uploads/2020/11/rilesundayz_group.jpg" alt="">
            <p>Title, 2020, walnut, 35 x 24 x 24 inches, 88.9 x 61 x 61 cm.</p>
        </div>
    </article>

    <?php the_content(); ?>

