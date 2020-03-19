<?php

Kirki::add_section('page_section', array(
	'title'	=> esc_html__('Page', 'planeta'),
	'panel'	=> 'modules_panel',
));

/*Kirki::add_field('planeta_config', array(
	'type' 						=> 'select',
	'settings'				=> 'page_scrollbar_type',
	'label'						=> esc_html__('Scrollbar Type', 'planeta'),
	'section'					=> 'page_section',
	'default'					=> 'system',
	'choices'					=> array(
		'system'						=> esc_html__('System (default)', 'planeta'),
	),
));*/

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'page_title_is_fullscreen',
	'label'						=> esc_html__('Fullscreen Title', 'planeta'),
	'section'					=> 'page_section',
	'default'					=> false,
	'output'					=> array(
		array(
			'element'				=> '.page-title-container',
			'property'			=> 'min-height',
			'value_pattern'	=> '100vh',
			'exclude'				=> array(false),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'page_title_padding',
	'label'						=> esc_html__('Title Padding Up & Down (vh)', 'planeta'),
	'section'					=> 'page_section',
	'default'					=> 10,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 50,
		'step'						=> 1,
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'page_title_is_fullscreen',
			'operator'				=> '==',
			'value'						=> false,
		),
	),
	'output'					=> array(
		array(
			'element'				=> '.page-title',
			'property'			=> 'padding-top',
			'value_pattern'	=> '$vh',
		),
		array(
			'element'				=> '.page-title',
			'property'			=> 'padding-bottom',
			'value_pattern'	=> '$vh',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'color',
	'settings'				=> 'page_title_overlay',
	'label'						=> esc_html__('Title Color Overlay', 'planeta'),
	'section'					=> 'page_section',
	'default'					=> 'rgba(0, 0, 0, 0)',
	'choices'					=> array(
		'alpha'						=> true,
	),
	'output'					=> array(
		array(
			'element'				=> '.page-title-overlay',
			'property'			=> 'background-color',
		),
	),
));

?>
