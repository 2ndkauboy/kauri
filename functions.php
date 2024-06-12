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
 * Enqueue style.css file.
 */
if ( ! function_exists( 'kauri_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @return void
	 */
	function kauri_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kauri-style',
			get_stylesheet_directory_uri() . '/assets/css/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kauri-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'kauri_styles' );