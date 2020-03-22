<?php

Kirki::add_section('header_menu_button', array(
	'title'       => esc_html__('Menu Button', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'select',
	'settings'	=> 'hamburger_class',
	'label'			=> esc_html__('Animation', 'planeta'),
	'section'		=> 'header_menu_button',
	'default'		=> 'boring',
	'choices'		=> array(
		'3dx'					=> esc_html__('3DX', 'planeta'),
		'3dx-r'				=> esc_html__('3DX Reverse', 'planeta'),
		'3dy'					=> esc_html__('3DY', 'planeta'),
		'3dy-r'				=> esc_html__('3DY Reverse', 'planeta'),
		'3dxy'				=> esc_html__('3DXY', 'planeta'),
		'3dxy-r'			=> esc_html__('3DXY Reverse', 'planeta'),
		'arrow'				=> esc_html__('Arrow', 'planeta'),
		'arrow-r'			=> esc_html__('Arrow Reverse', 'planeta'),
		'arrowalt'		=> esc_html__('Arrow 2', 'planeta'),
		'arrowalt-r'	=> esc_html__('Arrow 2 Reverse', 'planeta'),
		'arrowturn'		=> esc_html__('Arrow 3', 'planeta'),
		'arrowturn-r'	=> esc_html__('Arrow 3 Reverse', 'planeta'),
		'boring'			=> esc_html__('Boring', 'planeta'),
		'collapse'		=> esc_html__('Collapse', 'planeta'),
		'collapse-r'	=> esc_html__('Collapse Reverse', 'planeta'),
		'elastic'			=> esc_html__('Elastic', 'planeta'),
		'elastic-r'		=> esc_html__('Elasric Reverse', 'planeta'),
		'emphatic'		=> esc_html__('Emphatic', 'planeta'),
		'emphatic-r'	=> esc_html__('Emphatic Reverse', 'planeta'),
		'minus'				=> esc_html__('Minus', 'planeta'),
		'slider'			=> esc_html__('Slider', 'planeta'),
		'slider-r'		=> esc_html__('Slider Reverse', 'planeta'),
		'spring'			=> esc_html__('Spring', 'planeta'),
		'spring-r'		=> esc_html__('Spring Reverse', 'planeta'),
		'stand'				=> esc_html__('Stand', 'planeta'),
		'stand-r'			=> esc_html__('Stand Reverse', 'planeta'),
		'spin'				=> esc_html__('Spin', 'planeta'),
		'spin-r'			=> esc_html__('Spin Reverse', 'planeta'),
		'squeeze'			=> esc_html__('Squeeze', 'planeta'),
		'vortex'			=> esc_html__('Vortex', 'planeta'),
		'vortex-r'		=> esc_html__('Vortex Reverse', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'color',
	'settings'	=> 'hamburger_color',
	'label'			=> esc_html__('Color', 'planeta'),
	'section'		=> 'header_menu_button',
	'default'		=> '#000000',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'output'		=> array(
		array(
			'element'		=> '#menu-button .hamburger-inner',
			'property'	=> 'background-color',
		),
		array(
			'element'		=> '#menu-button .hamburger-inner:before',
			'property'	=> 'background-color',
		),
		array(
			'element'		=> '#menu-button .hamburger-inner:after',
			'property'	=> 'background-color',
		),
	),
));

?>
