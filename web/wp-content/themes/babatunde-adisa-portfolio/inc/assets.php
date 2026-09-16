<?php
/**
 * Theme asset registration and loading.
 *
 * @package Babatunde_Adisa_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueues front-end theme assets.
 *
 * @return void
 */
function babatunde_adisa_portfolio_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'babatunde-adisa-portfolio-main',
		get_theme_file_uri( 'assets/css/main.css' ),
		array(),
		$theme_version
	);

	wp_enqueue_script(
		'babatunde-adisa-portfolio-main',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		$theme_version,
		array(
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'babatunde_adisa_portfolio_enqueue_assets' );
