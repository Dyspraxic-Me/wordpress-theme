<?php


if ( ! defined( '_DYSPRAXIC_ME_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_DYSPRAXIC_ME_VERSION', '0.0.1' );
}

function main_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-logo' );
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main' => 'Primary',
		)
	);
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


/**
 * Restrict what block usage can be used to what the theme supports.
 * This also gives fine control over accessibility and usability.
*/
// https://developer.wordpress.org/block-editor/reference-guides/core-blocks/
function allowed_block_types( $allowed_block_types, $block_editor_context ) {
	$allowed_blocks = array(
    	// "core/calendar",
    	// "core/categories",
    	// "core/comment-author-name",
    	// "core/comment-content",
    	// "core/comment-date",
    	// "core/comment-edit-link",
    	// "core/comment-reply-link",
    	// "core/comment-template",
    	// "core/comments",
    	// "core/comments-pagination",
    	// "core/comments-pagination-next",
    	// "core/comments-pagination-numbers",
    	// "core/comments-pagination-previous",
    	// "core/comments-title",
    	// "core/cover",
    	"core/file",
    	"core/footnotes",
    	// "core/gallery",
    	"core/heading",
    	// "core/home-link",
    	"core/image",
    	// "core/latest-comments",
    	// "core/latest-posts",
    	"core/list",
    	// "core/loginout",
    	// "core/media-text",
    	// "core/navigation",
    	// "core/navigation-link",
    	// "core/navigation-submenu",
    	// "core/page-list",
    	// "core/page-list-item",
    	"core/pattern",
    	// "core/post-author",
    	// "core/post-author-biography",
    	// "core/post-author-name",
    	// "core/post-comments",
    	// "core/post-comments-form",
    	// "core/post-content",
    	// "core/post-date",
    	// "core/post-excerpt",
    	// "core/post-featured-image",
    	// "core/post-navigation-link",
    	// "core/post-template",
    	// "core/post-terms",
    	// "core/post-title",
    	// "core/query",
    	// "core/query-no-results",
    	// "core/query-pagination",
    	// "core/query-pagination-next",
    	// "core/query-pagination-numbers",
    	// "core/query-pagination-previous",
    	// "core/query-title",
    	// "core/read-more",
    	// "core/rss",
    	// "core/search",
    	"core/shortcode",
    	// "core/site-logo",
    	// "core/site-tagline",
    	// "core/site-title",
    	// "core/social-link",
    	// "core/tag-cloud",
    	"core/template-part",
    	// "core/term-description",
    	"core/audio",
    	"core/buttons",
    	// "core/code",
    	// "core/column",
    	// "core/columns",
    	// "core/details",
    	"core/embed",
    	// "core/freeform",
    	// "core/group",
    	"core/html",
    	"core/list-item",
    	"core/missing",
    	// "core/more",
    	// "core/nextpage",
    	"core/paragraph",
    	// "core/preformatted",
    	"core/pullquote",
    	// "core/quote",
    	"core/separator",
    	// "core/social-links",
    	// "core/spacer",
    	"core/table",
    	"core/text-columns",
    	// "core/verse",
    	"core/video",
	);
	
	// Get all registered blocks if $allowed_block_types is not already set.
	if ( ! is_array( $allowed_block_types ) || empty( $allowed_block_types ) ) {
		$registered_blocks   = WP_Block_Type_Registry::get_instance()->get_all_registered();
		$allowed_block_types = array_keys( $registered_blocks );
	}

	$filtered_blocks = array();
	foreach ( $allowed_block_types as $block ) {
		// If the block is a lazyblock it's custom so just allow it.
		if ( str_starts_with( $block, 'lazyblock' ) ) {
			$filtered_blocks[] = $block;
		} elseif ( in_array( $block, $allowed_blocks, true ) ) {
			$filtered_blocks[] = $block;
		}
	}
	return $filtered_blocks;
}
add_filter( 'allowed_block_types_all', 'allowed_block_types', 10, 2 );

// Remove default patterns that are not connected to the website
add_action('init', function() {
	remove_theme_support('core-block-patterns');
}, 9);

// Remove default styles
function remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' ); // Remove WordPress core CSS
    wp_dequeue_style( 'wp-block-library-theme' ); // Remove WordPress theme core CSS
    wp_dequeue_style( 'classic-theme-styles' ); // Remove global styles inline CSS
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
    wp_deregister_style( 'global-styles' ); // Remove theme.json css
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

// Initialise custom blocks
require(__DIR__ . '/blocks/lazyblock-section/index.php');