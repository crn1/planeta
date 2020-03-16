<?php

Kirki::add_panel('header_panel', array(
	'title'       => esc_html__('Header', 'planeta' ),
	'panel'       => 'modules_panel',
));

Kirki::add_section('header_appearance', array(
	'title'       => esc_html__('Appearance', 'planeta' ),
	'panel'       => 'header_panel',
));

Kirki::add_section('header_overlay', array(
	'title'       => esc_html__('Overlay Background', 'planeta' ),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'menu_button_sticky',
	'label'				=> esc_html__('Sticky Menu Button', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
	'output'			=> array(
		array(
			'element'				=> '#main-button',
			'property'			=> 'position',
			'value_pattern'	=> 'fixed',
			'exclude'				=> array(false),
		),
		array(
			'element'				=> '#menu-button',
			'property'			=> 'position',
			'value_pattern'	=> 'static',
			'exclude'				=> array(true),
		),
	)
));

Kirki::add_field('planeta_config', array(
	'type' 					=> 'image',
	'settings'			=> 'header_logo',
	'label'					=> esc_html__('Logo', 'planeta'),
	'section'				=> 'header_appearance',
	'default'				=> '',
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'header_overlay',
	'label'									=> esc_html__('Overlay Backround', 'planeta'),
	'section'								=> 'header_overlay',
	'default'     					=> array(
		'background-color'			=> 'rgba(0, 0, 0, 1)',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-position'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'output'								=> array(
		array(
			'element'								=> '#top-menu',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'								=> 'select',
	'settings'						=> 'navbar_type',
	'label'								=> esc_html__('Navbar Type', 'planeta'),
	'section'							=> 'header_appearance',
	'default'							=> 'fullscreen-up',
	'choices'							=> array(
		'drawer-left'					=> esc_html__('Drawer (Left)', 'planeta'),
		'drawer-right'				=> esc_html__('Drawer (Right)', 'planeta'),
		'circle-left'					=> esc_html__('Circle (Left)', 'planeta'),
		'circle-right'				=> esc_html__('Circle (Right)', 'planeta'),
		'polygon-left'				=> esc_html__('Polygon (Left)', 'planeta'),
		'polygon-right'				=> esc_html__('Polygon (Right)', 'planeta'),
		'point-left'					=> esc_html__('Point (Left)', 'planeta'),
		'point-right'					=> esc_html__('Point (Right)', 'planeta'),
		'parallelogram-left'	=> esc_html__('Parallelogram (Left)', 'planeta'),
		'parallelogram-right'	=> esc_html__('Parallelogram (Right)', 'planeta'),
		'fullscreen-up'				=> esc_html__('Fullscreen (Up)', 'planeta'),
		'fullscreen-down'			=> esc_html__('Fullscreen (Down)', 'planeta'),
		'fullscreen-left'			=> esc_html__('Fullscreen (Left)', 'planeta'),
		'fullscreen-right'		=> esc_html__('Fullscreen (Right)', 'planeta'),
	),
));

?>
