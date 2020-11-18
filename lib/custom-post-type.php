<?php
// Register Custom Post Type Artiste
// Post Type Key: artiste
function _themename_artiste_custom_post_type() {

	$labels = array(
		'name' => _x( 'Artistes', 'Post Type General Name', '_themename' ),
		'singular_name' => _x( 'Artiste', 'Post Type Singular Name', '_themename' ),
		'menu_name' => _x( 'Artistes', 'Admin Menu text', '_themename' ),
		'name_admin_bar' => _x( 'Artiste', 'Add New on Toolbar', '_themename' ),
		'archives' => __( 'Archives Artiste', '_themename' ),
		'attributes' => __( 'Attributs Artiste', '_themename' ),
		'parent_item_colon' => __( 'Parents Artiste:', '_themename' ),
		'all_items' => __( 'Tous Artistes', '_themename' ),
		'add_new_item' => __( 'Ajouter nouvel Artiste', '_themename' ),
		'add_new' => __( 'Ajouter', '_themename' ),
		'new_item' => __( 'Nouvel Artiste', '_themename' ),
		'edit_item' => __( 'Modifier Artiste', '_themename' ),
		'update_item' => __( 'Mettre à jour Artiste', '_themename' ),
		'view_item' => __( 'Voir Artiste', '_themename' ),
		'view_items' => __( 'Voir Artistes', '_themename' ),
		'search_items' => __( 'Rechercher dans les Artiste', '_themename' ),
		'not_found' => __( 'Aucun Artistetrouvé.', '_themename' ),
		'not_found_in_trash' => __( 'Aucun Artistetrouvé dans la corbeille.', '_themename' ),
		'featured_image' => __( 'Image mise en avant', '_themename' ),
		'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
		'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
		'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
		'insert_into_item' => __( 'Insérer dans Artiste', '_themename' ),
		'uploaded_to_this_item' => __( 'Téléversé sur cet Artiste', '_themename' ),
		'items_list' => __( 'Liste Artistes', '_themename' ),
		'items_list_navigation' => __( 'Navigation de la liste Artistes', '_themename' ),
		'filter_items_list' => __( 'Filtrer la liste Artistes', '_themename' ),
	);
	$args = array(
		'label' => __( 'Artiste', '_themename' ),
		'description' => __( 'Template de pages pour les page individuelles des artistes', '_themename' ),
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

add_action( 'init', '_themename_artiste_custom_post_type', 0 );
