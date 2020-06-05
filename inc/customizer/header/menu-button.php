<?php

Kirki::add_section('header_menu_button', array(
	'title'       => esc_html__('Menu Button', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'toggle',
	'settings'		=> 'hamburger_sharp',
	'label'				=> esc_html__('Sharp', 'planeta'),
	'section'			=> 'header_menu_button',
	'description'	=> esc_html__('Apply the sharp edges style to the menu button', 'planeta'),
	'default'			=> false,
	'transport'		=> 'auto',
	'output'			=> array(
		array(
			'element'				=> array(
				'.hamburger-inner',
				'.hamburger-inner:before',
				'.hamburger-inner:after',
			),
			'property'			=> 'border-radius',
			'value_pattern'	=> '0px',
			'exclude'				=> array(false),
		),
		array(
			'element'				=> array(
				'.hamburger-inner',
				'.hamburger-inner:before',
				'.hamburger-inner:after',
			),
			'property'			=> 'border-radius',
			'value_pattern'	=> '4px',
			'exclude'				=> array(true),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'select',
	'settings'		=> 'hamburger_class',
	'label'				=> esc_html__('Animation', 'planeta'),
	'description'	=> esc_html__('Set the menu button animation on click', 'planeta'),
	'section'			=> 'header_menu_button',
	'default'			=> '3dx',
	'choices'			=> array(
		'3dx'						=> esc_html__('3DX', 'planeta'),
		'3dx-r'					=> esc_html__('3DX Reverse', 'planeta'),
		'3dy'						=> esc_html__('3DY', 'planeta'),
		'3dy-r'					=> esc_html__('3DY Reverse', 'planeta'),
		'3dxy'					=> esc_html__('3DXY', 'planeta'),
		'3dxy-r'				=> esc_html__('3DXY Reverse', 'planeta'),
		'boring'				=> esc_html__('Boring', 'planeta'),
		'collapse'			=> esc_html__('Collapse', 'planeta'),
		'collapse-r'		=> esc_html__('Collapse Reverse', 'planeta'),
		'elastic'				=> esc_html__('Elastic', 'planeta'),
		'elastic-r'			=> esc_html__('Elasric Reverse', 'planeta'),
		'emphatic'			=> esc_html__('Emphatic', 'planeta'),
		'emphatic-r'		=> esc_html__('Emphatic Reverse', 'planeta'),
		'minus'					=> esc_html__('Minus', 'planeta'),
		'slider'				=> esc_html__('Slider', 'planeta'),
		'slider-r'			=> esc_html__('Slider Reverse', 'planeta'),
		'spring'				=> esc_html__('Spring', 'planeta'),
		'spring-r'			=> esc_html__('Spring Reverse', 'planeta'),
		'stand'					=> esc_html__('Stand', 'planeta'),
		'stand-r'				=> esc_html__('Stand Reverse', 'planeta'),
		'spin'					=> esc_html__('Spin', 'planeta'),
		'spin-r'				=> esc_html__('Spin Reverse', 'planeta'),
		'squeeze'				=> esc_html__('Squeeze', 'planeta'),
		'vortex'				=> esc_html__('Vortex', 'planeta'),
		'vortex-r'			=> esc_html__('Vortex Reverse', 'planeta'),
	),
));

?>
