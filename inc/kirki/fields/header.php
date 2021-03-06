<?php



/**
 * Header section
 */

 Haste_Store_Kirki::add_section( 'header', array(
    'title'          => __( 'Header', 'haste-store' ),
    'description'    => __( 'Header options', 'haste-store' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'header-bg-color',
	'label'       => __( 'Header background color', 'haste-store' ),
	'section'     => 'header',
	'default'     => '#fff',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array( '#main-navigation', '#main-navigation .dropdown-menu' ),
			'property' => 'background-color',
		),
	),
) );

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'header-text-color',
	'label'       => __( 'Header text color', 'haste-store' ),
	'section'     => 'header',
	'default'     => 'inherit',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array( '#main-navigation', '#main-navigation .dropdown-menu', '.mini_cart_item a' ),
			'property' => 'color',
		),
	),
) );
