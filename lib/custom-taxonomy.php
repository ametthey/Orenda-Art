<?php

// Register Taxonomy categorie de l artiste
// Taxonomy Key: categoriedelartiste
function _themename_create_categoriedelartiste_tax() {

	$labels = array(
		'name'              => _x( 'categories de l artiste', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'categorie de l artiste', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search categories de l artiste', '_themename' ),
		'all_items'         => __( 'All categories de l artiste', '_themename' ),
		'parent_item'       => __( 'Parent categorie de l artiste', '_themename' ),
		'parent_item_colon' => __( 'Parent categorie de l artiste:', '_themename' ),
		'edit_item'         => __( 'Edit categorie de l artiste', '_themename' ),
		'update_item'       => __( 'Update categorie de l artiste', '_themename' ),
		'add_new_item'      => __( 'Add New categorie de l artiste', '_themename' ),
		'new_item_name'     => __( 'New categorie de l artiste Name', '_themename' ),
		'menu_name'         => __( 'categorie de l artiste', '_themename' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Catégorie de l artiste', '_themename' ),
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
add_action( 'init', '_themename_create_categoriedelartiste_tax' );
