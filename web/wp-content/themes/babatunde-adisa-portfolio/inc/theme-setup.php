<?php
/**
 * Theme setup and support configuration.
 *
 * @package Babatunde_Adisa_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configures the theme's core WordPress features.
 *
 * @return void
 */
function babatunde_adisa_portfolio_setup() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );

	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'search-form',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'unlink-homepage-logo' => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'babatunde-adisa-portfolio' ),
			'footer'  => esc_html__( 'Footer Menu', 'babatunde-adisa-portfolio' ),
		)
	);
}
add_action( 'after_setup_theme', 'babatunde_adisa_portfolio_setup' );
