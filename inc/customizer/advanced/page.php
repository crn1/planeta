<?php

Kirki::add_section('page_section', array(
	'title'						=> esc_html__('Post/Page Appearance', 'planeta'),
	'panel'						=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'page_title_min_height',
	'label'						=> esc_html__('Title Minimum Height (vh)', 'planeta'),
	'description'			=> esc_html__('The minimum height of post, page and project title', 'planeta'),
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

?>
