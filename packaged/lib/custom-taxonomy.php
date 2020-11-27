<?php

// Register Taxonomy categorie de l artiste
// Taxonomy Key: categoriedelartiste
function orenda_art_create_categoriedelartiste_tax() {

	$labels = array(
		'name'              => _x( 'categories de l artiste', 'taxonomy general name', 'orenda_art' ),
		'singular_name'     => _x( 'categorie de l artiste', 'taxonomy singular name', 'orenda_art' ),
		'search_items'      => __( 'Search categories de l artiste', 'orenda_art' ),
		'all_items'         => __( 'All categories de l artiste', 'orenda_art' ),
		'parent_item'       => __( 'Parent categorie de l artiste', 'orenda_art' ),
		'parent_item_colon' => __( 'Parent categorie de l artiste:', 'orenda_art' ),
		'edit_item'         => __( 'Edit categorie de l artiste', 'orenda_art' ),
		'update_item'       => __( 'Update categorie de l artiste', 'orenda_art' ),
		'add_new_item'      => __( 'Add New categorie de l artiste', 'orenda_art' ),
		'new_item_name'     => __( 'New categorie de l artiste Name', 'orenda_art' ),
		'menu_name'         => __( 'categorie de l artiste', 'orenda_art' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Catégorie de l artiste', 'orenda_art' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'categoriedelartiste', array('artiste'), $args );

}
add_action( 'init', 'orenda_art_create_categoriedelartiste_tax' );
