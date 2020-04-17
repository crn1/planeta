<?php

Kirki::add_section('header_appearance', array(
	'title'       => esc_html__('Appearance', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'navbar_padding',
	'label'				=> esc_html__('Padding', 'planeta'),
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
			'element'				=> '#main-header',
			'property'			=> 'margin-top',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-top',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-bottom',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-left',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-left',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-right',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-right',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-right',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-right',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-bottom',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'select',
	'settings'	=> 'navbar_type',
	'label'			=> esc_html__('Navbar Style', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 'down',
	'choices'		=> array(
		'up'				=> esc_html__('Slide Up', 'planeta'),
		'down'			=> esc_html__('Slide Down', 'planeta'),
		'left'			=> esc_html__('Slide Left', 'planeta'),
		'right'			=> esc_html__('Slide Right', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'navbar_reverse',
	'label'			=> esc_html__('Reverse Logo & Menu Button', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> false,
));
