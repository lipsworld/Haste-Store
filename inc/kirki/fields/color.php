<?php

/**
 * Color options
 */


// Primary Color

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'primary-color',
	'label'       => __( 'Primary color', 'haste-store' ),
	'description' => __( 'Links and primary buttons', 'haste-store' ),
	'section'     => 'colors',
	'default'     => '#4d69f1',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array(
							'.bg-primary',
							'.btn-primary',
							'.label-primary',
							'.button',
							'.list-group-item-primary',
							'.panel-primary .panel-heading',
							'.progress-bar',
							'.nav-pills li.active a',
							'.list-group-item.active',
							'.woocommerce div.product form.cart .button',
							'.woocommerce a.button',
							'.woocommerce a.button:hover',
							'.woocommerce a.button:active',
							'.woocommerce a.button:focus',
							'.woocommerce button.button',
							'.woocommerce button.button:hover',
							'.woocommerce button.button:active',
							'.woocommerce button.button:focus',
							'.woocommerce input.button',
							'.woocommerce input.button:hover',
							'.woocommerce input.button:active',
							'.woocommerce input.button:focus',
							'.woocommerce #respond input#submit',
							'.woocommerce #respond input#submit:hover',
							'.woocommerce #respond input#submit:focus',
							'.woocommerce #respond input#submit:active',
							'.woocommerce .widget_price_filter .ui-slider .ui-slider-range',
							'.woocommerce .widget_price_filter .ui-slider .ui-slider-handle',
							'.woocommerce .woocommerce-message .button',
							'.woocommerce .woocommerce-message .button',
							'.woocommerce .woocommerce-message .button:hover',
							'.woocommerce .woocommerce-message .button:active',
							'.woocommerce .woocommerce-message .button:focus',
							'.woocommerce a.button.alt',
							'.woocommerce a.button.alt:hover',
							'.woocommerce a.button.alt:active',
							'.woocommerce a.button.alt:focus',
							'.woocommerce button.button.alt',
							'.woocommerce button.button.alt:hover',
							'.woocommerce button.button.alt:active',
							'.woocommerce button.button.alt:focus',
							'.woocommerce input.button.alt',
							'.woocommerce input.button.alt:hover',
							'.woocommerce input.button.alt:active',
							'.woocommerce input.button.alt:focus',
							'.woocommerce #respond input#submit.alt',
							'.woocommerce #respond input#submit.alt:hover',
							'.woocommerce #respond input#submit.alt:active',
							'.woocommerce #respond input#submit.alt:focus',
							'#place_order',
							'#place_order:active',
							'#place_order:hover',
							'#place_order:focus',
							'.woocommerce .button.checkout',
							'.woocommerce .button.checkout:hover',
							'.woocommerce .button.checkout:focus',
							'.woocommerce .button.checkout:active',
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'a',
							'[class*="primary"] .badge',
							'.text-primary',
							'.btn-link',
							'.star-rating',
							'.pagination .active',
							'.alert-primary',
							'.panel-primary',
							'.list-group-item active',
							'.pagination>li>a',
							'.woocommerce nav.woocommerce-pagination ul>li>a',
							'ul.page-numbers>li>a',
							'.pagination>li>span',
							'.woocommerce nav.woocommerce-pagination ul>li>span',
							'ul.page-numbers>li>span',
						),
			'property' => 'color',
		),
		array(
			'element'  => array(
							'.panel-primary',
							'.panel-primary .panel-heading',
							'.alert-primary',
							'.list-group-item.active'
						 ),
			'property' => 'border-color',
		),
	),
) );



// Success = Action Color

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'action-color',
	'label'       => __( 'Action color', 'haste-store' ),
	'description' => __( 'Action buttons, notifications and success status', 'haste-store' ),
	'section'     => 'colors',
	'default'     => '#3DD36C',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array(
							'.bg-success',
							'.btn-success',
							'.label-success',
							'.woocommerce span.onsale',
							'.list-group-item-success',
							'.panel-success .panel-heading',
							'.progress-bar-success',
							'.list-group-item.success',
							'.woocommerce .checkout.button',
							'.woocommerce .checkout.button:hover',
							'.woocommerce .checkout.button:active',
							'.woocommerce .checkout.button:focus',
							'.btn-cart .badge:not(.items-0)',
							'#place_order',
							'.woocommerce a.button.alt.checkout-button'
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="success"] .badge',
							'.text-success',
							'.alert-success',
							'.panel-success',
							'.woocommerce .woocommerce-message',
							'.has-success .help-block',
							'.has-success .control-label',
							'.has-success .radio',
							'.has-success .checkbox',
							'.has-success .radio-inline',
							'.has-success .checkbox-inline',
							'.has-success.radio label',
							'.has-success.checkbox label',
							'.has-success.radio-inline label',
							'.has-success.checkbox-inline label',
							'.woocommerce div.product .stock',
						),
			'property' => 'color',
		),
		array(
			'element'  => array(
							'.panel-success',
							'.panel-success .panel-heading',
							'.woocommerce form .form-row.woocommerce-validated .select2-container',
							'.woocommerce form .form-row.woocommerce-validated input.input-text',
							'.woocommerce form .form-row.woocommerce-validated select',
							'.has-success .form-control',
							'.has-success input[name="post_password"]',
							'.has-success select',
							'.has-success textarea',
							'.has-success input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
						 ),
			'property' => 'border-color',
		),
	),
) );


// Info Color

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'info-color',
	'label'       => __( 'Info color', 'haste-store' ),
	'description' => __( 'Information status, notifications and alerts', 'haste-store' ),
	'section'     => 'colors',
	'default'     => '#83ADAF',
	'priority'    => 30,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array(
							'.bg-info',
							'.btn-info',
							'.label-info',
							'.list-group-item-info',
							'.panel-info .panel-heading',
							'.progress-bar-info',
							'.list-group-item.info',
							'.woocommerce .woocommerce-info .button',
							'.woocommerce .woocommerce-info .button',
							'.woocommerce .woocommerce-info .button:hover',
							'.woocommerce .woocommerce-info .button:active',
							'.woocommerce .woocommerce-info .button:focus',

						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="info"] .badge',
							'.text-info',
							'.alert-info',
							'.panel-info',
							'.woocommerce .woocommerce-info',
							'.has-info .help-block',
							'.has-info .control-label',
							'.has-info .radio',
							'.has-info .checkbox',
							'.has-info .radio-inline',
							'.has-info .checkbox-inline',
							'.has-info.radio label',
							'.has-info.checkbox label',
							'.has-info.radio-inline label',
							'.has-info.checkbox-inline label',
						),
			'property' => 'color',
		),
		array(
			'element'  => array(
							'.panel-info',
							'.panel-info .panel-heading',
							'.has-info .form-control',
							'.has-info input[name="post_password"]',
							'.has-info select, .has-info textarea',
							'.has-info input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
						 ),
			'property' => 'border-color',
		),
	),
) );



// Warning = Action Color

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'warning-color',
	'label'       => __( 'Warning color', 'haste-store' ),
	'description' => __( 'Warning status, notifications and alerts', 'haste-store' ),
	'section'     => 'colors',
	'default'     => '#FFCA2B',
	'priority'    => 40,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array(
							'.bg-warning',
							'.btn-warning',
							'.label-warning',
							'.list-group-item-warning',
							'.panel-warning .panel-heading',
							'.progress-bar-warning',
							'.list-group-item.warning'
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="warning"] .badge',
							'.text-warning',
							'.alert-warning',
							'.panel-warning',
							'.has-warning .help-block',
							'.has-warning .control-label',
							'.has-warning .radio',
							'.has-warning .checkbox',
							'.has-warning .radio-inline',
							'.has-warning .checkbox-inline',
							'.has-warning.radio label',
							'.has-warning.checkbox label',
							'.has-warning.radio-inline label',
							'.has-warning.checkbox-inline label',
						),
			'property' => 'color',
		),
		array(
			'element'  => array(
							'.panel-warning',
							'.panel-warning .panel-heading',
							'.has-warning .form-control',
							'.has-warning input[name="post_password"]',
							'.has-warning select',
							'.has-warning textarea',
							'.has-warning input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
						 ),
			'property' => 'border-color',
		),
	),
) );



// Danger = Error Color

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'danger-color',
	'label'       => __( 'Danger / Error color', 'haste-store' ),
	'description' => __( 'Danger status, notifications and alerts', 'haste-store' ),
	'section'     => 'colors',
	'default'     => '#FF3F3F',
	'priority'    => 50,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'auto',
	'output'	=> array(
		array(
			'element' => array(
							'.bg-danger',
							'.btn-danger',
							'.label-danger',
							'.list-group-item-danger',
							'.panel-danger .panel-heading',
							'.progress-bar-danger',
							'.list-group-item.danger',
							'.out-of-stock-badge',
							'.woocommerce .woocommerce-error .button',
							'.woocommerce .woocommerce-error .button:hover',
							'.woocommerce .woocommerce-error .button:active',
							'.woocommerce .woocommerce-error .button:focus',
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="danger"] .badge',
							'.text-danger',
							'.alert-danger',
							'.panel-danger',
							'.woocommerce .woocommerce-error',
							'.has-error .help-block',
							'.has-error .control-label',
							'.has-error .radio',
							'.has-error .checkbox',
							'.has-error .radio-inline',
							'.has-error .checkbox-inline',
							'.has-error.radio label',
							'.has-error.checkbox label',
							'.has-error.radio-inline label',
							'.has-error.checkbox-inline label',
							'.woocommerce form .form-row .required',
							'.woocommerce form .form-row.woocommerce-invalid label',
							'.woocommerce div.product .out-of-stock',
							'.woocommerce .widget_layered_nav_filters ul li a:before',
						),
			'property' => 'color',
		),
		array(
			'element' => array(
							'.woocommerce a.remove',
							'.product-remove',
						),
			'property' => 	'color',
			'suffix'   => 	' !important',
		),
		array(
			'element' => array(
							'.woocommerce a.remove:hover',
						),
			'property' => 	'background-color',
			'suffix'   => 	' !important',
		),
		array(
			'element'  => array(
							'.panel-danger',
							'.panel-danger .panel-heading',
							'.woocommerce form .form-row.woocommerce-invalid .select2-container',
							'.woocommerce form .form-row.woocommerce-invalid input.input-text',
							'.woocommerce form .form-row.woocommerce-invalid select',
							'.has-error .form-control',
							'.has-error input[name="post_password"]',
							'.has-error select, .has-error textarea',
							'.has-error input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
						 ),
			'property' => 'border-color',
		),
	),
) );
