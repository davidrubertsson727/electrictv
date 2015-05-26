<?php
/**
 * Roots functions
 */


add_filter('show_admin_bar', '__return_false');

require_once locate_template('/inc/soil-setup.php');		// soil setup


if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

require_once locate_template('/inc/util.php');						// Utility functions
require_once locate_template('/inc/config.php');					// Configuration and constants
require_once locate_template('/inc/activation.php');			// Theme activation
require_once locate_template('/inc/template-tags.php');		// Template tags
require_once locate_template('/inc/cleanup.php');					// Cleanup
require_once locate_template('/inc/scripts.php');					// Scripts and stylesheets
require_once locate_template('/inc/htaccess.php');				// Rewrites for assets, H5BP .htaccess
require_once locate_template('/inc/hooks.php');						// Hooks
require_once locate_template('/inc/actions.php');					// Actions
require_once locate_template('/inc/widgets.php');					// Sidebars and widgets
require_once locate_template('/inc/custom.php');					// Custom functions

function roots_setup() {

	// Make theme available for translation
	load_theme_textdomain('roots', get_template_directory() . '/lang');

	// Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
	register_nav_menus(array(
		'primary_navigation' => __('Primary Navigation', 'roots'),
	));

	// Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	// add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

	// Add post formats (http://codex.wordpress.org/Post_Formats)
	// add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

	// Tell the TinyMCE editor to use a custom stylesheet
	add_editor_style('css/editor-style.css');

}

add_action('after_setup_theme', 'roots_setup');


// Track Post Views
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count.' Views';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


// Excerpt Length & Continue Text
function custom_excerpt_length( $length ) {
	global $post;
	if ('etv_video' == $post->post_type)
		return 10;
	else 
		return 50;	
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
		global $post;
	if ('etv_video' == $post->post_type)
		return ' <a href="'. get_permalink($post->ID) . '">watch video...</a>';
	else 
		return ' <a href="'. get_permalink($post->ID) . '">read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



// Add video thumbnail functionality
if (function_exists('add_theme_support')) { add_theme_support('post-thumbnails'); }
	set_post_thumbnail_size( 640, 385, true );
	add_image_size( 'small-thumb', 145, 87, true );



// Add video post type to feed
function add_video_to_feed($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type']))
		$qv['post_type'] = array('post', 'etv_video');
	return $qv;
}
add_filter('request', 'add_video_to_feed');


