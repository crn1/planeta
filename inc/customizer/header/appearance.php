<?php

Kirki::add_section('header_appearance', array(
	'title'       => esc_html__('Appearance', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'navbar_padding',
	'label'				=> esc_html__('Header Padding (px)', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> 48,
	'choices'			=> array(
		'min'					=> 16,
		'max'					=> 128,
		'step'				=> 2,
	),
	'transport'		=> 'auto',
	'output'			=> array(
		array(
			'element'				=> array(
				'#logo-container',
			),
			'property'			=> 'left',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> array(
				'#logo-container',
			),
			'property'			=> 'left',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 500px) / 700))',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 1199px)',
		),
		array(
			'element'				=> array(
				'#hamburger-container',
				'#scroll-top-button',
			),
			'property'			=> 'right',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> array(
				'#hamburger-container',
				'#scroll-top-button',
			),
			'property'			=> 'right',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 500px) / 700))',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 1199px)',
		),
		array(
			'element'				=> array(
				'#scroll-top-button',
			),
			'property'			=> 'bottom',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> array(
				'#scroll-top-button',
			),
			'property'			=> 'bottom',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 500px) / 700))',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 1199px)',
		),
		array(
			'element'				=> array(
				'#logo-container',
				'#hamburger-container',
			),
			'property'			=> 'top',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> array(
				'#logo-container',
				'#hamburger-container',
			),
			'property'			=> 'top',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 500px) / 700))',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 1199px)',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'select',
	'settings'		=> 'navbar_type',
	'label'				=> esc_html__('Navbar Toggle Style', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> 'top',
	'choices'			=> array(
		'top'					=> esc_html__('Slide Top', 'planeta'),
		'bottom'			=> esc_html__('Slide Bottom', 'planeta'),
		'left'				=> esc_html__('Slide Left', 'planeta'),
		'right'				=> esc_html__('Slide Right', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'toggle',
	'settings'		=> 'header_sensitive_frontpage',
	'label'				=> esc_html__('Enable Sensitive Colors', 'planeta'),
	'description'	=> esc_html__('When this option is enabled, all header colors are inverted depending on a background color', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
	'transport'		=> 'auto',
	'output'			=> array(
		array(
			'element'				=> array(
				'body #main-header',
				'body #scroll-top-button',
				'body #scroll-down-button',
			),
			'property'			=> 'mix-blend-mode',
			'value_pattern'	=> 'difference',
			'exclude'				=> array(false),
		),
		array(
			'element'				=> array(
				'body #main-header',
				'body #scroll-top-button',
				'body #scroll-down-button',
			),
			'property'			=> 'mix-blend-mode',
			'value_pattern'	=> 'unset',
			'exclude'				=> array(true),
		),
	),
));

?>
