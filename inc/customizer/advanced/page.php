<?php

Kirki::add_section('page_section', array(
	'title'						=> esc_html__('Page Options', 'planeta'),
	'panel'						=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'page_title_min_height',
	'label'						=> esc_html__('Title Minimum Height', 'planeta'),
	'section'					=> 'page_section',
	'default'					=> 75,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 100,
		'step'						=> 1,
	),
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> '.page-title-container',
			'property'			=> 'min-height',
			'units'					=> 'vh',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'color',
	'settings'				=> 'page_title_background',
	'label'						=> esc_html__('Title Color Overlay', 'planeta'),
	'section'					=> 'page_section',
	'choices'					=> array(
		'alpha'						=> true,
	),
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> '.page-title-container',
			'property'			=> 'background-color',
		),
	),
));

//Disabld until solution is found
/*Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'label'			=> esc_html__('Scroll Snap for Sections', 'planeta'),
	'section'		=> 'page_section',
	'settings'	=> 'page_scroll_snap',
	'default'		=> true,
	'transport'	=> 'auto',
	'output'		=> array(
		array(
			'element'				=> '#scroll-container',
			'property'			=> 'scroll-snap-type',
			'value_pattern'	=> 'none',
			'exclude'				=> array(true),
		),
		array(
			'element'				=> array(
				'#scroll-container > section',
				'#scroll-container > footer',
			),
			'property'			=> 'scroll-snap-align',
			'value_pattern'	=> 'none',
			'exclude'				=> array(true),
		),
	),
));*/

?>
