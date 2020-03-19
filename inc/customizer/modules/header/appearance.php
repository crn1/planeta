<?php

Kirki::add_section('header_appearance', array(
	'title'       => esc_html__('Appearance', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'navbar_sticky',
	'label'				=> esc_html__('Sticky Navbar', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
	'output'			=> array(
		array(
			'element'				=> '.header-container',
			'property'			=> 'position',
			'value_pattern'	=> 'fixed',
			'exclude'				=> array(false),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'show_sections_nav',
	'label'				=> esc_html__('Show Section Menu', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
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
