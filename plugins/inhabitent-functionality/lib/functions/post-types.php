<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
 function inhabitent_cpt_products() {

 	$labels = array(
 		'name'                  => 'Products',
 		'singular_name'         => 'product',
 		'menu_name'             => 'Products',
 		'name_admin_bar'        => 'Post Type',
 		'archives'              => 'Item Archives',
 		'attributes'            => 'Product Attributes',
 		'parent_item_colon'     => 'Parent Item:',
 		'all_items'             => 'All Items',
 		'add_new_item'          => 'Add New Product',
 		'add_new'               => 'Add New',
 		'new_item'              => 'New Product',
 		'edit_item'             => 'Edit Item',
 		'update_item'           => 'Update Product',
 		'view_item'             => 'View Item',
 		'view_items'            => 'View Products',
 		'search_items'          => 'Search Product',
 		'not_found'             => 'Not found',
 		'not_found_in_trash'    => 'Not found in Trash',
 		'featured_image'        => 'Featured Image',
 		'set_featured_image'    => 'Set featured image',
 		'remove_featured_image' => 'Remove featured image',
 		'use_featured_image'    => 'Use as featured image',
 		'insert_into_item'      => 'Insert into item',
 		'uploaded_to_this_item' => 'Uploaded to this item',
 		'items_list'            => 'Product list',
 		'items_list_navigation' => 'Product list navigation',
 		'filter_items_list'     => 'Filter items list',
 	);
 	$args = array(
 		'label'                 => 'product',
 		'description'           => 'Listing of items to sell',
 		'labels'                => $labels,
 		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
 		'taxonomies'            => array( 'category', 'post_tag' ),
 		'hierarchical'          => false,
 		'public'                => true,
 		'show_ui'               => true,
 		'show_in_menu'          => true,
 		'menu_position'         => 10,
 		'menu_icon'             => 'dashicons-hammer',
 		'show_in_admin_bar'     => true,
 		'show_in_nav_menus'     => true,
 		'can_export'            => true,
 		'has_archive'           => true,
 		'exclude_from_search'   => false,
 		'publicly_queryable'    => true,
 		'capability_type'       => 'post',
 	);
 	register_post_type( 'products', $args );

 }
 add_action( 'init', 'inhabitent_cpt_products', 0 );