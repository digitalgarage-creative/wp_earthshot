<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package earthshot_catalog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function earthshot_catalog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'earthshot_catalog_body_classes' );
remove_filter( 'the_content', 'wpautop' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function earthshot_catalog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'earthshot_catalog_pingback_header' );


// WPMP language switcher
function icl_post_languages_link(){
	$languages = icl_get_languages('skip_missing=1');
	if(1 < count($languages)){
	  echo __('');
	  foreach($languages as $l){
		if(!$l['active']) $langs[] = $l['url'];
	  }
	  echo join(' ', $langs);
	}
  }