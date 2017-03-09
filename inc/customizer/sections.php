<?php
/**
 * Customizer sections.
 *
 * @package mamasven
 */

/**
 * Register the section sections.
 */
function ms_customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'ms_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'ms-inc' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'ms_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'ms-inc' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', 'ms_customize_sections' );
