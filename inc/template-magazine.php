<?php
// Register Custom Post Type Magazine
// Register Custom Post Type magazine
function create_magazine_cpt() {

	$labels = array(
		'name' => _x( 'Magazine', 'Post Type General Name', 'opensource' ),
		'singular_name' => _x( 'magazine', 'Post Type Singular Name', 'opensource' ),
		'menu_name' => _x( 'Magazine', 'Admin Menu text', 'opensource' ),
		'name_admin_bar' => _x( 'agazine', 'Add New on Toolbar', 'opensource' ),
		'archives' => __( 'magazine Archives', 'opensource' ),
		'attributes' => __( 'magazine Attributes', 'opensource' ),
		'parent_item_colon' => __( 'Parent magazine:', 'opensource' ),
		'all_items' => __( 'All Magazine', 'opensource' ),
		'add_new_item' => __( 'Add New Magazine', 'opensource' ),
		'add_new' => __( 'Add New', 'opensource' ),
		'new_item' => __( 'New magazine', 'opensource' ),
		'edit_item' => __( 'Edit Magazine', 'opensource' ),
		'update_item' => __( 'Update Magazine', 'opensource' ),
		'view_item' => __( 'View Magazine', 'opensource' ),
		'view_items' => __( 'View magazine', 'opensource' ),
		'search_items' => __( 'Search magazine', 'opensource' ),
		'not_found' => __( 'Not found', 'opensource' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'opensource' ),
		'featured_image' => __( 'Featured Image', 'opensource' ),
		'set_featured_image' => __( 'Set featured image', 'opensource' ),
		'remove_featured_image' => __( 'Remove featured image', 'opensource' ),
		'use_featured_image' => __( 'Use as featured image', 'opensource' ),
		'insert_into_item' => __( 'Insert into magazine', 'opensource' ),
		'uploaded_to_this_item' => __( 'Uploaded to this magazine', 'opensource' ),
		'items_list' => __( 'magazine list', 'opensource' ),
		'items_list_navigation' => __( 'magazine list navigation', 'opensource' ),
		'filter_items_list' => __( 'Filter magazine list', 'opensource' ),
	);
	$args = array(
		'label' => __( 'magazine', 'opensource' ),
		'description' => __( '', 'opensource' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array('magazine-category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'query_var' => 'true',
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'magazine', $args );

	

}
add_action( 'init', 'create_magazine_cpt', 0 );


/*==============================================END HERE===================================================================*/

/*--===============================================Magazine Category=======================================================*/
function opensource_create_the_magazines_taxonomy() {  
    register_taxonomy(  
        'magazine-category',  					// This is a name of the taxonomy. Make sure it's not a capital letter and no space in between
        'magazine',        			//post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Magazine Categories',  	//Display name
            'query_var' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'magazine-category')
        )  
    );  
}  
add_action( 'init', 'opensource_create_the_magazines_taxonomy');

/*--===============================================Magazine Category=======================================================*/
/*--===============================================Magazine TAG===========================================================*/

//register taxonomy for custom post tags
function opensource_create_tag_magazines_taxonomy_tag() {  
register_taxonomy( 
	'magazine-tag', //taxonomy 
	'magazine', //post-type
	array( 
		'hierarchical'  => false, 
		'label'         => __( 'Magazine Tags','taxonomy general name'), 
		'singular_name' => __( 'Tag', 'taxonomy general name' ), 
		'rewrite'       => true, 
		'query_var'     => true 
	));
}	
add_action( 'init', 'opensource_create_tag_magazines_taxonomy_tag');

/*--===============================================Magazine TAG===========================================================*/

?>