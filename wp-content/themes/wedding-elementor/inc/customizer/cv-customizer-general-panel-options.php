<?php
/**
 * Wedding Elementor manage the Customizer options of general panel.
 *
 * @subpackage wedding-elementor
 * @since 1.0 
 */
Kirki::add_field(
	'wedding_elementor_config', array(
		'type'        => 'checkbox',
		'settings'    => 'wedding_elementor_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'wedding-elementor' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);
