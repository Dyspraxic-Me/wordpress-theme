<?php


if ( ! defined( '_DYSPRAXIC_ME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_DYSPRAXIC_ME_VERSION', '0.0.1' );
}

function main_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	// Register template menu locations
	register_nav_menus([
		'nav' => 'Navigation',
		'footer_policies' => 'Footer policies',
	]);
}
add_action( 'after_setup_theme', 'main_setup' );

/**
 * Add custom scripts and styles to the page.
 */
function enqueue_assets() {
	wp_enqueue_style( 'dyspraxic-me-style', get_stylesheet_uri(), array(), _DYSPRAXIC_ME_VERSION );
	wp_enqueue_script( 'dyspraxic-me-javascript', get_template_directory_uri() . '/scripts.js', array(), _DYSPRAXIC_ME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_assets' );

function new_excerpt_more( $more ) {
	return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');


require_once( __DIR__ . "/functions/lazyblocks.php" );

/* Improve the Eventbrite markup output with some awful regexing */
add_action('wp_head', function () {
	ob_start(function ($buffer) {
		return preg_replace(
			'/title="Eventbrite.*" rel="bookmark" >Dyspraxic Me[:]?(.*)\<\/a\>/i',
			">$1</a>",
			$buffer
		);
	});
});
add_action('wp_footer', function () {
	ob_end_flush();
});

require_once( __DIR__ . "/functions/subnavigation.php" );
