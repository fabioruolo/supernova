<?php
/* ---------------------------------
*  Constants
*  --------------------------------- */
define( "SN_THEME_VERSION"  , "v.1.0.0");
define( "SN_THEME_PATH"     , get_template_directory_uri() );
define( "SN_JQUERY_VERSION" , "1.10.2" );

/* ---------------------------------
*  Styles
*  --------------------------------- */
function sn_enqueue_styles() {
	wp_register_style( 'main' , SN_THEME_PATH . "/css/main.css", array(), SN_THEME_VERSION, 'screen' );

	wp_enqueue_style( 'main' );
}

/* ---------------------------------
*  Scripts
*  --------------------------------- */
function sn_enqueue_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/" . SN_JQUERY_VERSION . "/jquery.min.js", array(), SN_THEME_VERSION, false );
	wp_register_script( 'modernizr', "//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.0/modernizr.min.js", array(), SN_THEME_VERSION, false );
	wp_register_script( 'main', SN_THEME_PATH . "/js/main.js", array(), null, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'main' );
}

/* ---------------------------------
*  Enqueue CSS and JS files
*  --------------------------------- */
add_action( "wp_enqueue_scripts" , "sn_enqueue_styles" );
add_action( "wp_enqueue_scripts" , "sn_enqueue_scripts" );

/* ---------------------------------
*  <head> functions
*  --------------------------------- */
function sn_meta_tags( $meta ) {
	foreach ( $meta as $name => $content ) {
		print '<meta name="' . $name . '" content="' . $content . '">';
	}
}

function sn_google_analytics( $code ) {
	print '<script>var _gaq = _gaq || [];_gaq.push(["_setAccount", "' . $code . '"]);_gaq.push(["_trackPageview"]);(function() {var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);})();</script>';
}

function sn_google_cdn_check() {
	print '<script>window.jQuery || document.write(\'<script src="' . SN_THEME_PATH . '/assets/js/lib/jquery-' . SN_JQUERY_VERSION . '.min.js\"><\/script>\')</script>';
}

add_action('wp_head', 'sn_google_cdn_check');

/* ---------------------------------
*  WP: Remove tags from <head>
*  --------------------------------- */
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
add_filter( 'index_rel_link', 'sn_remove_rel_links' );
add_filter( 'parent_post_rel_link', 'sn_remove_rel_links' );
add_filter( 'start_post_rel_link', 'sn_remove_rel_links' );
add_filter( 'previous_post_rel_link', 'sn_remove_rel_links' );
add_filter( 'next_post_rel_link', 'sn_remove_rel_links' );

function sn_remove_rel_links( $data ) {
	return false;
}

/* ---------------------------------
*  WP: Add menus
*  --------------------------------- */
register_nav_menu( 'header_menu', 'Main Navigation' );

/* ---------------------------------
*  WP: Add theme support and filters
*  --------------------------------- */
add_theme_support( 'automatic_feed_links' );