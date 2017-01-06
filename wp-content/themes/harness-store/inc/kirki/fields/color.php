<?php

/**
 * Color options
 */


// Primary Color

Haste_Store_Kirki::add_field( 'haste-store', array(
	'type'        => 'color',
	'settings'    => 'primary-color',
	'label'       => __( 'Primary color', 'haste-store' ),
	'section'     => 'colors',
	'default'     => '#4d69f1',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 	'.bg-primary,
							.btn-primary,
							.label-primary,
							.button,
							.woocommerce div.product form.cart .button,
							.list-group-item-primary,
							.panel-primary .panel-heading,
							.progress-bar,
							.nav-pills li.active a,
							.list-group-item.active',
			'function' => 'style',
			'property' => 'background-color',
		),
		array(
			'element'  => 	'a,
							[class*="primary"] .badge,
							.text-primary,
							.btn-link,
							.star-rating,
							.pagination .active,
							.alert-primary
							.panel-primary,
							.list-group-item active,
							.pagination>li>a,',

			'function' => 'style',
			'property' => 'color',
		),
		array(
			'element'  => 	'.panel-primary,
							.panel-primary .panel-heading,
							.alert-primary,
							.list-group-item.active',
			'function' => 'style',
			'property' => 'border-color',
		),
	),
	'output'	=> array(
		array(
			'element' => array(
							'.bg-primary',
							'.btn-primary',
							'.label-primary',
							'.button',
							'.woocommerce div.product form.cart .button',
							'.list-group-item-primary',
							'.panel-primary .panel-heading',
							'.progress-bar',
							'.nav-pills li.active a',
							'.list-group-item.active'
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
							'.pagination>li>a'
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
	'section'     => 'colors',
	'default'     => '#3DD36C',
	'priority'    => 20,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 	'.bg-success,
							.btn-success,
							.label-success,
							.woocommerce span.onsale,
							.list-group-item-success,
							.panel-success .panel-heading,
							.progress-bar-success,
							.list-group-item.success',
			'function' => 'style',
			'property' => 'background-color',
		),
		array(
			'element'  => 	'[class*="success"] .badge,
							.text-success,
							.alert-success,
							.panel-success,
							.woocommerce-message,
							.has-success .help-block,
							.has-success .control-label,
							.has-success .radio,
							.has-success .checkbox,
							.has-success .radio-inline,
							.has-success .checkbox-inline,
							.has-success.radio label,
							.has-success.checkbox label,
							.has-success.radio-inline label,
							.has-success.checkbox-inline label',

			'function' => 'style',
			'property' => 'color',
		),
		array(
			'element'  => 	'.panel-success,
							.panel-success .panel-heading,
							.woocommerce form .form-row.woocommerce-validated .select2-container,
							.woocommerce form .form-row.woocommerce-validated input.input-text,
							.woocommerce form .form-row.woocommerce-validated select,
							.has-success .form-control,
							.has-success input[name="post_password"],
							.has-success select,
							.has-success textarea,
							.has-success input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
			'function' => 'style',
			'property' => 'border-color',
		),
	),
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
							'.list-group-item.success'
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="success"] .badge',
							'.text-success',
							'.alert-success',
							'.panel-success',
							'.woocommerce-message',
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
	'section'     => 'colors',
	'default'     => '#83ADAF',
	'priority'    => 30,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 	'.bg-info,
							.btn-info,
							.label-info,
							.list-group-item-info,
							.panel-info .panel-heading,
							.progress-bar-info,
							.list-group-item.info',
			'function' => 'style',
			'property' => 'background-color',
		),
		array(
			'element'  => 	'[class*="info"] .badge,
							.text-info,
							.alert-info,
							.panel-info,
							.woocommerce-info,
							.has-info .help-block,
							.has-info .control-label,
							.has-info .radio,
							.has-info .checkbox,
							.has-info .radio-inline,
							.has-info .checkbox-inline,
							.has-info.radio label,
							.has-info.checkbox label,
							.has-info.radio-inline label,
							.has-info.checkbox-inline label',

			'function' => 'style',
			'property' => 'color',
		),
		array(
			'element'  => 	'.panel-info,
							.panel-info .panel-heading,
							.has-info .form-control,
							.has-info input[name="post_password"],
							.has-info select, .has-info textarea,
							.has-info input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
			'function' => 'style',
			'property' => 'border-color',
		),
	),
	'output'	=> array(
		array(
			'element' => array(
							'.bg-info',
							'.btn-info',
							'.label-info',
							'.list-group-item-info',
							'.panel-info .panel-heading',
							'.progress-bar-info',
							'.list-group-item.info'
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="info"] .badge',
							'.text-info',
							'.alert-info',
							'.panel-info',
							'.woocommerce-info',
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
	'section'     => 'colors',
	'default'     => '#FFCA2B',
	'priority'    => 40,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 	'.bg-warning,
							.btn-warning,
							.label-warning,
							.list-group-item-warning,
							.panel-warning .panel-heading,
							.progress-bar-warning,
							.list-group-item.warning',
			'function' => 'style',
			'property' => 'background-color',
		),
		array(
			'element'  => 	'[class*="warning"] .badge,
							.text-warning,
							.alert-warning,
							.panel-warning,
							.has-warning .help-block,
							.has-warning .control-label,
							.has-warning .radio,
							.has-warning .checkbox,
							.has-warning .radio-inline,
							.has-warning .checkbox-inline,
							.has-warning.radio label,
							.has-warning.checkbox label,
							.has-warning.radio-inline label,
							.has-warning.checkbox-inline label',

			'function' => 'style',
			'property' => 'color',
		),
		array(
			'element'  => 	'.panel-warning,
							.panel-warning .panel-heading,
							.has-warning .form-control,
							.has-warning input[name="post_password"],
							.has-warning select,
							.has-warning textarea,
							.has-warning input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
			'function' => 'style',
			'property' => 'border-color',
		),
	),
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
	'section'     => 'colors',
	'default'     => '#FF3F3F',
	'priority'    => 50,
	'choices'     => array(
		'alpha' => true,
	),
	'transport'	=> 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => 	'.bg-danger,
							.btn-danger,
							.label-danger,
							.list-group-item-danger,
							.panel-danger .panel-heading,
							.progress-bar-danger,
							.list-group-item.danger',
			'function' => 'style',
			'property' => 'background-color',
		),
		array(
			'element'  => 	'[class*="danger"] .badge,
							.text-danger,
							.alert-danger,
							.panel-danger,
							.woocommerce-error,
							.has-error .help-block,
							.has-error .control-label,
							.has-error .radio,
							.has-error .checkbox,
							.has-error .radio-inline,
							.has-error .checkbox-inline,
							.has-error.radio label,
							.has-error.checkbox label,
							.has-error.radio-inline label,
							.has-error.checkbox-inline label',

			'function' => 'style',
			'property' => 'color',
		),
		array(
			'element'  => 	'.panel-danger,
							.panel-danger .panel-heading,
							.woocommerce form .form-row.woocommerce-invalid .select2-container,
							.woocommerce form .form-row.woocommerce-invalid input.input-text,
							.woocommerce form .form-row.woocommerce-invalid select,
							.has-error .form-control,
							.has-error input[name="post_password"],
							.has-error select, .has-error textarea,
							.has-error input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="reset"])',
			'function' => 'style',
			'property' => 'border-color',
		),
	),
	'output'	=> array(
		array(
			'element' => array(
							'.bg-danger',
							'.btn-danger',
							'.label-danger',
							'.list-group-item-danger',
							'.panel-danger .panel-heading',
							'.progress-bar-danger',
							'.list-group-item.danger'
						),
			'property' => 'background-color',
		),
		array(
			'element' => array(
							'[class*="danger"] .badge',
							'.text-danger',
							'.alert-danger',
							'.panel-danger',
							'.woocommerce-error',
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
						),
			'property' => 'color',
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
