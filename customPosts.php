<?php

// Built by www.lattedev.com
add_action( 'init', 'lattedev_custom_posts' );
function lattedev_custom_posts() {
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Slides', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Slide', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Slides', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Add new', 'slide', 'text-domain' ),
		'add_new_item'       => __( 'Add new slide', 'text-domain' ),
		'new_item'           => __( 'New slide', 'text-domain' ),
		'edit_item'          => __( 'Edit slide', 'text-domain' ),
		'view_item'          => __( 'See slide', 'text-domain' ),
		'all_items'          => __( 'All slides', 'text-domain' ),
		'search_items'       => __( 'Search slides', 'text-domain' ),
		'not_found'          => __( 'There are no slides.', 'text-domain' ),
		'not_found_in_trash' => __( 'No slides in the bin.', 'text-domain' )
	);
    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctription.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'parent_item_colon'  => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'menu-icon'          => 'dashicons-palmtree',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'revisions' )
	);
	register_post_type( 'slide', $args );




    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Banners', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Banner', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Banners', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Add new', 'banner', 'text-domain' ),
		'add_new_item'       => __( 'Add new banner', 'text-domain' ),
		'new_item'           => __( 'New banner', 'text-domain' ),
		'edit_item'          => __( 'Edit banner', 'text-domain' ),
		'view_item'          => __( 'See banner', 'text-domain' ),
		'all_items'          => __( 'All banners', 'text-domain' ),
		'search_items'       => __( 'Search banners', 'text-domain' ),
		'not_found'          => __( 'There are no banners.', 'text-domain' ),
		'not_found_in_trash' => __( 'No banners in the bin.', 'text-domain' )
	);
    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctription.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'banner' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-store',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor' )
	);
	register_post_type( 'banner', $args );






  // /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
  // $labels = array(
  //   'name'             => _x( 'Locations', 'taxonomy general name' ),
  //   'singular_name'    => _x( 'Location', 'taxonomy singular name' ),
  //   'search_items'     => __( 'Search by Location' ),
  //   'all_items'        => __( 'All Locations' ),
  //   'parent_item'      => __( 'Parent location' ),
  //   'parent_item_colon'=> __( 'Parent location:' ),
  //   'edit_item'        => __( 'Edit Location' ),
  //   'update_item'      => __( 'Update Location' ),
  //   'add_new_item'     => __( 'Add new Location' ),
  //   'new_item_name'    => __( 'Name of new Location' ),
  // );
	//
  // /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
  // register_taxonomy( 'loc', array( 'restaurant' ), array(
  //   'labels'             => $labels,
  //   'public'             => true,
  //   'hierarchical'       => true,
  //   'show_ui'            => true,
  //   'query_var'          => true,
  //   'show_in_nav_menus'  => true,
  //   'show_admin_column'  => true,
  //   'show_in_rest'       => true, // Needed for tax to appear in Gutenberg editor.
  //   'rewrite'            => array( 'slug' => 'loc' ),
  // ));

}
