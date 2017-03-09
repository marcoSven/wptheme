<?php
/**
 * Customizer settings.
 *
 * @package mamasven
 */

/**
 * Register additional scripts.
 */
function ms_customize_additional_scripts( $wp_customize ) {

	// Register a setting.
	$wp_customize->add_setting(
		'ms_header_scripts',
		array(
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'ms_header_scripts',
		array(
			'label'       => esc_html__( 'Header Scripts', 'ms-inc' ),
			'description' => esc_html__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', 'ms-inc' ),
			'section'     => 'ms_additional_scripts_section',
			'type'        => 'textarea',
		)
	);

	// Register a setting.
	$wp_customize->add_setting(
		'ms_footer_scripts',
		array(
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'ms_footer_scripts',
		array(
			'label'       => esc_html__( 'Footer Scripts', 'ms-inc' ),
			'description' => esc_html__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', 'ms-inc' ),
			'section'     => 'ms_additional_scripts_section',
			'type'        => 'textarea',
		)
	);
}
add_action( 'customize_register', 'ms_customize_additional_scripts' );

/**
 * Register a social icons setting.
 */
function ms_customize_social_icons( $wp_customize ) {

	// Create an array of our social links for ease of setup.
	$social_networks = array( 'facebook', 'googleplus', 'instagram', 'linkedin', 'twitter' );

	// Loop through our networks to setup our fields.
	foreach ( $social_networks as $network ) {

		// Register a setting.
		$wp_customize->add_setting(
			'ms_' . $network . '_link',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url',
	        )
	    );

	    // Create the setting field.
	    $wp_customize->add_control(
	        'ms_' . $network . '_link',
	        array(
	            'label'   => sprintf( esc_html__( '%s Link', 'ms-inc' ), ucwords( $network ) ),
	            'section' => 'ms_social_links_section',
	            'type'    => 'text',
	        )
	    );
	}
}
add_action( 'customize_register', 'ms_customize_social_icons' );

/**
 * Register copyright text setting.
 */
function ms_customize_copyright_text( $wp_customize ) {

	// Register a setting.
	$wp_customize->add_setting(
		'ms_copyright_text',
		array(
			'default' => '',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		new ms_Text_Editor_Custom_Control(
			$wp_customize,
			'ms_copyright_text',
			array(
				'label'       => esc_html__( 'Copyright Text', 'ms-inc' ),
				'description' => esc_html__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'ms-inc' ),
				'section'     => 'ms_footer_section',
				'type'        => 'textarea',
			)
		)
	);
}
add_action( 'customize_register', 'ms_customize_copyright_text' );
