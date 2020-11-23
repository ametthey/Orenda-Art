<?php

// Register Taxonomy Skill
// Taxonomy Key: skill
function orenda-art_taxonomy_skill() {

	$labels = array(
		'name'              => _x( 'Skills', 'taxonomy general name', 'orenda-art' ),
		'singular_name'     => _x( 'Skill', 'taxonomy singular name', 'orenda-art' ),
		'search_items'      => __( 'Search Skills', 'orenda-art' ),
		'all_items'         => __( 'All Skills', 'orenda-art' ),
		'parent_item'       => __( 'Parent Skill', 'orenda-art' ),
		'parent_item_colon' => __( 'Parent Skill:', 'orenda-art' ),
		'edit_item'         => __( 'Edit Skill', 'orenda-art' ),
		'update_item'       => __( 'Update Skill', 'orenda-art' ),
		'add_new_item'      => __( 'Add New Skill', 'orenda-art' ),
		'new_item_name'     => __( 'New Skill Name', 'orenda-art' ),
		'menu_name'         => __( 'Skills', 'orenda-art' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Skill', 'orenda-art' ),
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
add_action( 'init', 'orenda-art_taxonomy_skill' );
