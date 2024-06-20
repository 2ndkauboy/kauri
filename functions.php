<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kauri
 * @since 1.0
 */

/**
 * Load front-end assets.
 */
function kauri_assets() {
	$asset = include get_theme_file_path( 'public/css/screen.asset.php' );

	wp_enqueue_style(
		'kauri-style',
		get_theme_file_uri( 'public/css/screen.css' ),
		$asset['dependencies'],
		$asset['version']
	);
}

add_action( 'wp_enqueue_scripts', 'kauri_assets' );


/**
 * Load editor stylesheets.
 */
function kauri_editor_styles() {
	add_editor_style( [
		get_theme_file_uri( 'public/css/screen.css' )
	] );
}

add_action( 'after_setup_theme', 'kauri_editor_styles' );

/**
 * Load editor scripts.
 */
function kauri_editor_assets() {
	$script_asset = include get_theme_file_path( 'public/js/editor.asset.php' );
	$style_asset  = include get_theme_file_path( 'public/css/editor.asset.php' );

	wp_enqueue_script(
		'kauri-editor',
		get_theme_file_uri( 'public/js/editor.js' ),
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);

	wp_enqueue_style(
		'kauri-editor',
		get_theme_file_uri( 'public/css/editor.css' ),
		$style_asset['dependencies'],
		$style_asset['version']
	);
}

add_action( 'enqueue_block_editor_assets', 'kauri_editor_assets' );