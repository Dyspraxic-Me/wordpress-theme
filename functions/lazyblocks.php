<?php
/**
 * Lazyblocks
 */

$block_directory_path = __DIR__ . '/../blocks/lazyblock-';
$blocks = glob($block_directory_path . '*', GLOB_ONLYDIR);
foreach ($blocks as $block) {
	$block_name = str_replace($block_directory_path, '', $block);
	// Disable block frontend wrapper.
	add_filter( "lazyblock/$block_name/frontend_allow_wrapper", '__return_false' );
	// Initialise the block
	require_once( $block_directory_path . "$block_name/index.php" );
}