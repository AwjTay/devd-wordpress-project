<?php

//declares custom post types: relatedreading / codesnippets

add_action('init','create_custom_post_type_related_reading'); // define related-reading custom post type


function create_custom_post_type_related_reading(){

	$labels = array(
		'name' => 'related-reading',
		'singular_name' => 'related-reading',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New related-reading',
		'edit_item' => 'Edit related-reading',
		'new_item' => 'New related-reading',
		'view_item' => 'View related-reading',
		'search_items' => 'Search related-reading',
		'not_found' => 'No related-reading found',
		'not_found_in_trash' => 'No related-reading found in Trash',
		'parent_item_colon' => '',
	);
	

	$args = array(
		'label' => __('related-reading'),
		'labels' => $labels, // from array above
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'menu_icon' => 'dashicons-calendar', // from this list
		'hierarchical' => false,
		'rewrite' => array( "slug" => "related-reading" ), // defines URL base
		'supports'=> array('title', 'thumbnail', 'editor', 'excerpt'),
		'show_in_nav_menus' => true,
		'taxonomies' => array( 'related-reading_category', 'post_tag') // own categories
	);

register_post_type('relatedreading', $args);

}


//add_action('init','create_custom_post_type_code_snippets'); // define code-snippets custom post type


add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}