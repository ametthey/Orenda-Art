<?php
// Register Custom Post Type Artiste
// Post Type Key: artiste
function orenda-art_artiste_custom_post_type() {

	$labels = array(
		'name' => _x( 'Artistes', 'Post Type General Name', 'orenda-art' ),
		'singular_name' => _x( 'Artiste', 'Post Type Singular Name', 'orenda-art' ),
		'menu_name' => _x( 'Artistes', 'Admin Menu text', 'orenda-art' ),
		'name_admin_bar' => _x( 'Artiste', 'Add New on Toolbar', 'orenda-art' ),
		'archives' => __( 'Archives Artiste', 'orenda-art' ),
		'attributes' => __( 'Attributs Artiste', 'orenda-art' ),
		'parent_item_colon' => __( 'Parents Artiste:', 'orenda-art' ),
		'all_items' => __( 'Tous Artistes', 'orenda-art' ),
		'add_new_item' => __( 'Ajouter nouvel Artiste', 'orenda-art' ),
		'add_new' => __( 'Ajouter', 'orenda-art' ),
		'new_item' => __( 'Nouvel Artiste', 'orenda-art' ),
		'edit_item' => __( 'Modifier Artiste', 'orenda-art' ),
		'update_item' => __( 'Mettre à jour Artiste', 'orenda-art' ),
		'view_item' => __( 'Voir Artiste', 'orenda-art' ),
		'view_items' => __( 'Voir Artistes', 'orenda-art' ),
		'search_items' => __( 'Rechercher dans les Artiste', 'orenda-art' ),
		'not_found' => __( 'Aucun Artistetrouvé.', 'orenda-art' ),
		'not_found_in_trash' => __( 'Aucun Artistetrouvé dans la corbeille.', 'orenda-art' ),
		'featured_image' => __( 'Image mise en avant', 'orenda-art' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'orenda-art' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'orenda-art' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'orenda-art' ),
		'insert_into_item' => __( 'Insérer dans Artiste', 'orenda-art' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Artiste', 'orenda-art' ),
		'items_list' => __( 'Liste Artistes', 'orenda-art' ),
		'items_list_navigation' => __( 'Navigation de la liste Artistes', 'orenda-art' ),
		'filter_items_list' => __( 'Filtrer la liste Artistes', 'orenda-art' ),
	);
	$args = array(
		'label' => __( 'Artiste', 'orenda-art' ),
		'description' => __( 'Template de pages pour les page individuelles des artistes', 'orenda-art' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'artiste', $args );

}

add_action( 'init', 'orenda-art_artiste_custom_post_type', 0 );
