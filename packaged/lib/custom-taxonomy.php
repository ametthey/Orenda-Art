<?php

// Register Taxonomy Skill
// Taxonomy Key: skill
function orenda_art_taxonomy_skill() {

	$labels = array(
		'name'              => _x( 'Skills', 'taxonomy general name', 'orenda_art' ),
		'singular_name'     => _x( 'Skill', 'taxonomy singular name', 'orenda_art' ),
		'search_items'      => __( 'Search Skills', 'orenda_art' ),
		'all_items'         => __( 'All Skills', 'orenda_art' ),
		'parent_item'       => __( 'Parent Skill', 'orenda_art' ),
		'parent_item_colon' => __( 'Parent Skill:', 'orenda_art' ),
		'edit_item'         => __( 'Edit Skill', 'orenda_art' ),
		'update_item'       => __( 'Update Skill', 'orenda_art' ),
		'add_new_item'      => __( 'Add New Skill', 'orenda_art' ),
		'new_item_name'     => __( 'New Skill Name', 'orenda_art' ),
		'menu_name'         => __( 'Skills', 'orenda_art' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Skill', 'orenda_art' ),
		'hierarchical' => true,
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
	register_taxonomy( 'skill', array( 'project' ), $args );

}
add_action( 'init', 'orenda_art_taxonomy_skill' );
