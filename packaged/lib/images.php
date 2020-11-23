<?php

function orenda-art_image_configuration() {
    // add_image_size( 'nom', hauteur(chiffre), largeur(chiffre) );

}
add_action( 'after_setup_theme', 'orenda-art_image_configuration' );

