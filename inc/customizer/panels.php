<?php
/**
 * Customizer panels.
 *
 * @package mamasven
 */

/**
 * Add a custom panels to attach sections too.
 */
function ms_customize_panels( $wp_customize ) {

	// Register a new panel.
	$wp_customize->add_panel( 'site-options', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Site Options', 'ms-inc' ),
		'description'    => esc_html__( 'Other theme options.', 'ms-inc' ),
	) );
}
add_action( 'customize_register', 'ms_customize_panels' );
