<?php
/**
 * Wedding Elementor manage the Customizer panels.
 *
 * @subpackage wedding-elementor
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'wedding_elementor_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'wedding-elementor' ),
) );

/**
 * Wedding Elementor Options
 */
Kirki::add_panel( 'wedding_elementor_options_panel', array(
	'priority' => 20,
	'title'    => __( 'Wedding Elementor Theme Options', 'wedding-elementor' ),
) );