<?php
	$GLOBALS["template-dir"] = get_template_directory_uri();

	//Root Path For Theme
	if( !defined('THEME_ROOT') ){ define('THEME_ROOT', get_template_directory_uri()); }

	//Theme Support
	if( function_exists('add_theme_support') ){
		// Add Menu Support
	    add_theme_support('menus');

	    // Add Thumbnail Theme Support
	    add_theme_support('post-thumbnails');

	    //Add Image Sizes
		add_image_size( 'thumbnail-1000x359', '1000', '359', true );
		add_image_size( 'thumbnail-363x271', '363', '271', true ); 

	    //Allow Shortcode In Widget Area
	    add_filter('widget_text','do_shortcode');
	}

	//Register Navigation Location
	function register_theme_menus(){
		register_nav_menus( array(
			'header-menu'	=>	__('Header Menu'),
			'footer-menu'	=>	__('Footer Menu')
		) );
	}
	add_action( 'after_setup_theme', 'register_theme_menus' );

	function excerpt_new($num){
	  $excerpt = get_the_content();
	  $excerpt = strip_shortcodes($excerpt);
	  $excerpt = strip_tags($excerpt);
	  $excerpt = htmlentities($excerpt, null, 'utf-8');
	  $excerpt = str_replace("&nbsp;", " ",  $excerpt);
	  $excerpt = html_entity_decode($excerpt);
	  $the_str = substr($excerpt, 0, $num);
	  $the_str = $the_str.'. . .';
	  echo $the_str;

	}

	//Load Theme assets
	function theme_assets(){
		wp_enqueue_style( 'thm-stylesheet', THEME_ROOT.'/style.css', [], filemtime( get_template_directory().'/style.css' ), $media = '' );

		// wp_enqueue_script( 'thm-main', THEME_ROOT.'/assets/js/main.js', $deps = array('jquery'), filemtime( get_template_directory().'/assets/js/main.js' ), $in_footer = true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_assets' );

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

	//Breadcrumbs 
	function get_breadcrumb() {
	    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
	    /* if its a category page, the get_category() function will retrieve the category data of category ID and get_query_var() gives the Id of that category*/
	    if (is_category()) {
	        echo "&nbsp;<span class='slash'></span>&nbsp;";
	        $cat = get_category(get_query_var('cat'));
	        echo "<span class='current'>" . $cat->name . "</span>";
	    } 
	    elseif (is_page()) {
	        echo "&nbsp;<span class='slash'></span>&nbsp;";
	        echo the_title();
	    } 

	}