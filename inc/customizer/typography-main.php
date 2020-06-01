<?php

Kirki::add_section('typography_main', array(
	'title'       => esc_html__('Main Typography', 'planeta'),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Typography', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main',
	'default'     => array(
		'text-transform'			=> 'none',
		'font-family'					=> 'Titillium Web',
		'variant'							=> 'regular',
		'line-height'					=> '1.5',
		'letter-spacing'			=> '0',
	),
	'output'      => array(
		array(
			'element' 		=> 'body',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'color',
	'settings'	=> 'typography_main_color',
	'section'		=> 'typography_main',
	'label'			=> esc_html__('Color', 'planeta'),
	'default'		=> '#000000',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'transport'	=> 'auto',
	'output'		=> array(
		array(
			'element'				=> array(
				'.hamburger-inner',
				'.hamburger-inner:before',
				'.hamburger-inner:after',
				'.hover-underline-1 > .button-link::before',
				'.hover-underline-1 > .button-link::after',
				'.hover-underline-2 > .button-link::before',
				'.hover-underline-2 > .button-link::after',
				'.hover-underline-3 > .button-link::before',
				'.hover-underline-3 > .button-link::after',
				'.hover-underline-4 > .button-link::before',
				'.hover-underline-4 > .button-link::after',
				'.hover-underline-5 > .button-link::before',
				'.hover-underline-5 > .button-link::after',
				'.hover-underline-6 > .button-link::before',
				'.hover-underline-6 > .button-link::after',
				'.hover-border-switch > .button-link::before',
				'.hover-border-switch > .button-link::after',
				'.hover-cross > .button-link::before',
				'.hover-cross > .button-link::after',
			),
			'property'			=> 'background-color',
		),
		array(
			'element'				=> array(
				'#scroll-top-button',
				'#scroll-down-button',
				'#protected-post-form > button',
				'#search-form > button',
				'#section-contact-form input',
				'#section-contact-form textarea',
				'#search-form input[type="search"]',
				".wp-block-search input[type='search']",
				".wp-block-search button",
				'body',
				'.button-link',
				'.hover-brackets-1 > .button-link::before',
				'.hover-brackets-1 > .button-link::after',
				'.hover-brackets-2 > .button-link::before',
				'.hover-brackets-2 > .button-link::after',
				'.hover-brackets-3 > .button-link::before',
				'.hover-brackets-3 > .button-link::after',
				'.hover-brackets-4 > .button-link::before',
				'.hover-brackets-4 > .button-link::after',
				'.hover-brackets-5 > .button-link::before',
				'.hover-brackets-5 > .button-link::after',
				'.hover-brackets-6 > .button-link::before',
				'.hover-brackets-6 > .button-link::after',
				"p[class^='comment-form-'] > input[type='text']",
				"p[class^='comment-form-'] > input[type='email']",
				"p[class^='comment-form-'] > input[type='checkbox']",
				"p[class^='comment-form-'] > input[type='url']",
				"p[class^='comment-form-'] > textarea",
			),
			'property'			=> 'color',
		),
		array(
			'element'				=> array(
				'#protected-post-form',
				'#search-form',
				'.gallery-icon img',
				'table th',
				'table td',
				'.hover-box-1 > .button-link',
				'.hover-box-2 > .button-link',
			),
			'property'			=> 'border-color',
		),
		array(
			'element'				=> array(
				'.post-page-numbers',
				'.gallery-icon img',
				'#section-contact-form input',
				'#section-contact-form textarea',
				"p[class^='comment-form-'] > input[type='text']",
				"p[class^='comment-form-'] > input[type='email']",
				"p[class^='comment-form-'] > input[type='url']",
				"p[class^='comment-form-'] > input[type='checkbox']",
				"p[class^='comment-form-'] > textarea",
			),
			'property'			=> 'border-color',
			'value_pattern'	=> '$ !important',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'toggle',
	'label'       => esc_html__('Fluid Typography', 'planeta'),
	'section'     => "typography_main",
	'settings'    => "typography_main_fluid",
	'default'			=> true,
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_fluid_size',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'default'     => '22',
	'transport'		=> 'auto',
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 500px) / 700))',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 1199px)',
		),
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Desktop', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_desktop',
	'default'     => '22',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '===',
			'value'						=> false,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Laptop', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_laptop',
	'default'     => '20',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 900px) and (max-width: 1199px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '===',
			'value'						=> false,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Tablet', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_tablet',
	'default'     => '18',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 899px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '===',
			'value'						=> false,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Smartphone', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_mobile',
	'default'     => '16',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (max-width: 599px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '===',
			'value'						=> false,
		),
	),
));

?>
