<?php
/** abstraction for post-types,that way it can easily be resused**/


// Add new post type for Events
add_action('init', 'events_init');
add_theme_support( 'post-thumbnails' );
function events_init() 
{
	$event_labels = array(
		'name' => _x('Events', 'post type general name'),
		'singular_name' => _x('Event', 'post type singular name'),
		'all_items' => __('All Events'),
		'add_new' => _x('Add new Event', 'events'),
		'add_new_item' => __('Add new event'),
		'edit_item' => __('Edit event'),
		'new_item' => __('New event'),
		'view_item' => __('View event'),
		'search_items' => __('Search in events'),
        'taxonomies' => array('category'),
		'not_found' =>  __('No events found'),
		'not_found_in_trash' => __('No events found in trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $event_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'events'
	); 
	register_post_type('events',$args);
}

//* Link e4gf_events CPT to categories taxonomy
add_action( 'init', 'add_category_taxonomy_to_events' );
function add_category_taxonomy_to_events() {
	register_taxonomy_for_object_type( 'category', 'events' );
}
// Add new post type for Site Posts (Informational posts which require specific placements etc)
add_action('init', 'site_posts_init');
add_theme_support( 'post-thumbnails' );
function site_posts_init() 
{
	$site_post_labels = array(
		'name' => _x('Site Posts', 'post type general name'),
		'singular_name' => _x('Site Post', 'post type singular name'),
		'all_items' => __('All Site Posts'),
		'add_new' => _x('Add new  Site Post', 'site posts'),
		'add_new_item' => __('Add new Site Post'),
		'edit_item' => __('Edit Site Post'),
		'new_item' => __('New Site Post'),
		'view_item' => __('View Site Post'),
		'search_items' => __('Search in Site Posts'),
        'taxonomies' => array('category'),
		'not_found' =>  __('No Site Posts found'),
		'not_found_in_trash' => __('No Site Posts found in trash'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $site_post_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
		'has_archive' => 'site_posts'
	); 
	register_post_type('site_post',$args);
}
add_action( 'init', 'add_category_taxonomy_to_site_posts' );
function add_category_taxonomy_to_site_posts() {
	register_taxonomy_for_object_type( 'category', 'site_post' );
}


?>