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
	'default'			=> 64,
	'choices'			=> array(
		'min'					=> 16,
		'max'					=> 128,
		'step'				=> 2,
	),
	'output'			=> array(
		array(
			'element'				=> '.header-container',
			'property'			=> 'margin-top',
			'units'					=> 'px',
		),
		array(
			'element'				=> '.header-container',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
		),
		array(
			'element'				=> '.header-container',
			'property'			=> 'padding-left',
			'units'					=> 'px',
		),
		array(
			'element'				=> '.header-container',
			'property'			=> 'padding-right',
			'units'					=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'navbar_spacing',
	'label'				=> esc_html__('Spacing', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> 32,
	'choices'			=> array(
		'min'					=> 0,
		'max'					=> 72,
		'step'				=> 1,
	),
	'output'			=> array(
		array(
			'element'				=> '#top-menu > a:not(:last-child)',
			'property'			=> 'margin-right',
			'units'					=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'navbar_sticky',
	'label'				=> esc_html__('Sticky', 'planeta'),
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
	'label'				=> esc_html__('Show Sections Menu', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
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
		//Dodaj me jos
	),
));

?>
