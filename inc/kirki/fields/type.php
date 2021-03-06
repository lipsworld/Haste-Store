<?php

/**
 * Typography section
 */

 Haste_Store_Kirki::add_section( 'typography', array(
    'title'          => __( 'Typography', 'haste-store' ),
    'description'    => __( 'Font options', 'haste-store' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 140,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );



Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'checkbox',
	'settings'    => 'body_type_extra_variants',
	'label'       => __( 'Load extra variants for the body font', 'haste-store' ),
	'description' => __( 'Includes the regular, italic, bold and bold italic variants.', 'haste-store' ),
	'section'     => 'typography',
	'default'     => '1',
	'priority'    => 20,
	'multiple'    => 1,
) );

$body_variants = array();

if ( true == get_theme_mod( 'body_type_extra_variants', true ) ) :
	$body_variants = array(
		'regular',
		'italic',
		'700',
		'700italic',
	);
endif;

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'typography',
	'settings'    => 'body_type',
	'label'       => esc_attr__( 'Body typography', 'haste-store' ),
	'section'     => 'typography',
	'default'     => array(
		'font-family'    => 'Arial',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
	),
	'priority'	=> 10,
	'transport'	=> 'auto',
	'js_vars'   => array(
		array(
			'element'  => 'body',
			'function' => 'style',
		),
	),
	'output'	=> array(
		array(
			'element' => 'body',
		),
	),

	'choices' => array(
		'variant' => $body_variants,
	),

) );

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'typography',
	'settings'    => 'header_type',
	'label'       => esc_attr__( 'Headers typography', 'haste-store' ),
	'section'     => 'typography',
	'default'     => array(
		'font-family'    => 'Arial',
		'variant'        => 'regular',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'line-height'    => '1.2',
		'color'          => '#333333',
		'text-transform' => 'none',
	),
	'priority'	=> 30,
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array ('h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6', '.product-name a', '.mini_cart_item a', '.product-title'),
		),
	),
) );

/**
 * Headings font size
 */

 Haste_Store_Kirki::add_field( 'haste-store', array(
 	'type'        => 'slider',
 	'settings'    => 'h1_font-size',
 	'label'       => __( 'H1 Font Size', 'haste-store' ),
 	'section'     => 'typography',
 	'default'     => 3.5,
 	'choices'     => array(
 		'min'  => '0',
 		'max'  => '10',
 		'step' => '0.1',
 	),
 	'priority'	=> 40,
 	'transport'	=> 'auto',
 	'output'	=> array(
 		array(
 			'element' => array(
 							'h1',
 						),
 			'property' => 'font-size',
 			'units'    => 'em',
 		),
 	),
 ) );

  Haste_Store_Kirki::add_field( 'haste-store', array(
  	'type'        => 'slider',
  	'settings'    => 'h2_font-size',
  	'label'       => __( 'H2 Font Size', 'haste-store' ),
  	'section'     => 'typography',
  	'default'     => 2.2,
  	'choices'     => array(
  		'min'  => '0',
  		'max'  => '10',
  		'step' => '0.1',
  	),
  	'priority'	=> 40,
  	'transport'	=> 'auto',
  	'output'	=> array(
  		array(
  			'element' => array(
  							'h2',
  						),
  			'property' => 'font-size',
  			'units'    => 'em',
  		),
  	),
  ) );


   Haste_Store_Kirki::add_field( 'haste-store', array(
   	'type'        => 'slider',
   	'settings'    => 'h3_font-size',
   	'label'       => __( 'H3 Font Size', 'haste-store' ),
   	'section'     => 'typography',
   	'default'     => 1.35,
   	'choices'     => array(
   		'min'  => '0',
   		'max'  => '10',
   		'step' => '0.1',
   	),
   	'priority'	=> 40,
   	'transport'	=> 'auto',
   	'output'	=> array(
   		array(
   			'element' => array(
   							'h3',
   						),
   			'property' => 'font-size',
   			'units'    => 'em',
   		),
   	),
   ) );
