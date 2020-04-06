<?php

Kirki::add_panel('page_panel', array(
	'title'	=> esc_html__('Page (Search/Archive/Post)', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_section('page_title', array(
	'title'						=> esc_html__('Title', 'planeta'),
	'panel'						=> 'page_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'page_title_min_height',
	'label'						=> esc_html__('Title Minimum Height', 'planeta'),
	'section'					=> 'page_title',
	'default'					=> 33,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 100,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'				=> '.page-title-container',
			'property'			=> 'min-height',
			'units'					=> 'vh',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'page_title_padding',
	'label'						=> esc_html__('Title Spacing Down', 'planeta'),
	'section'					=> 'page_title',
	'default'					=> 10,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 33,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'				=> '.page-title-container',
			'property'			=> 'margin-bottom',
			'units'					=> 'vh',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'color',
	'settings'				=> 'page_title_overlay',
	'label'						=> esc_html__('Title Color Overlay', 'planeta'),
	'section'					=> 'page_title',
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

require_once(get_template_directory() . '/inc/customizer/items-appearance.php');
planeta_add_items_appearance('page');

?>
