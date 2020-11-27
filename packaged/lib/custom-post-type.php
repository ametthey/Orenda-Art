<?php
// Register Custom Post Type Artiste
// Post Type Key: artiste
function orenda_art_artiste_custom_post_type() {

	$labels = array(
		'name' => _x( 'Artistes', 'Post Type General Name', 'orenda_art' ),
		'singular_name' => _x( 'Artiste', 'Post Type Singular Name', 'orenda_art' ),
		'menu_name' => _x( 'Artistes', 'Admin Menu text', 'orenda_art' ),
		'name_admin_bar' => _x( 'Artiste', 'Add New on Toolbar', 'orenda_art' ),
		'archives' => __( 'Archives Artiste', 'orenda_art' ),
		'attributes' => __( 'Attributs Artiste', 'orenda_art' ),
		'parent_item_colon' => __( 'Parents Artiste:', 'orenda_art' ),
		'all_items' => __( 'Tous Artistes', 'orenda_art' ),
		'add_new_item' => __( 'Ajouter nouvel Artiste', 'orenda_art' ),
		'add_new' => __( 'Ajouter', 'orenda_art' ),
		'new_item' => __( 'Nouvel Artiste', 'orenda_art' ),
		'edit_item' => __( 'Modifier Artiste', 'orenda_art' ),
		'update_item' => __( 'Mettre à jour Artiste', 'orenda_art' ),
		'view_item' => __( 'Voir Artiste', 'orenda_art' ),
		'view_items' => __( 'Voir Artistes', 'orenda_art' ),
		'search_items' => __( 'Rechercher dans les Artiste', 'orenda_art' ),
		'not_found' => __( 'Aucun Artistetrouvé.', 'orenda_art' ),
		'not_found_in_trash' => __( 'Aucun Artistetrouvé dans la corbeille.', 'orenda_art' ),
		'featured_image' => __( 'Image mise en avant', 'orenda_art' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', 'orenda_art' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', 'orenda_art' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', 'orenda_art' ),
		'insert_into_item' => __( 'Insérer dans Artiste', 'orenda_art' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Artiste', 'orenda_art' ),
		'items_list' => __( 'Liste Artistes', 'orenda_art' ),
		'items_list_navigation' => __( 'Navigation de la liste Artistes', 'orenda_art' ),
		'filter_items_list' => __( 'Filtrer la liste Artistes', 'orenda_art' ),
	);
	$args = array(
		'label' => __( 'Artiste', 'orenda_art' ),
		'description' => __( 'Template de pages pour les page individuelles des artistes', 'orenda_art' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array( 'categoriedelartiste' ),
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

add_action( 'init', 'orenda_art_artiste_custom_post_type', 0 );
