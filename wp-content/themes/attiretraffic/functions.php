<?php

include_once('inc/remove-junk.php');
include_once('inc/rebranding.php');

include_once('inc/customizer/logo-customizer.php');

function assets_script_enqueue(){
	wp_enqueue_style( "customstyle", get_template_directory_uri() . "/style.css", [], '1.0' ,'all');
}

add_action('wp_enqueue_scripts' , 'assets_script_enqueue');

function register_custom_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_custom_menu' );


/* Reset Junk */
show_admin_bar(false);
// Remove cruft from header
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_resource_hints', 2 );

//Disable Visual Editor for all users
add_filter( 'user_can_richedit' , '__return_false', 50 );
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

?>