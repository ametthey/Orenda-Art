<?php

function _themename_image_configuration() {
    add_image_size( 'individual_artist_portrait', 375, 500, true );

}
add_action( 'after_setup_theme', '_themename_image_configuration' );

