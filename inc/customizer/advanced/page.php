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
	'default'					=> 33,
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
			'element'				=> '.page-title-overlay',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Items Columns', 'planeta'),
	'section'				=> 'page_section',
	'settings'			=> 'page_masonry_num',
	'default'				=> '3',
	'choices'				=> array(
		'min'						=> '1',
		'max'						=> '7',
		'step'					=> '1',
	),
	'output'				=> array(
		array(
			'element'				=> "#page .card",
			'property'			=> 'flex-direction',
			'value_pattern'	=> 'row',
			'media_query'		=> '@media screen and (min-width: 600px)',
			'exclude'				=> array('2', '3', '4', '5', '6', '7'),
		),
		array(
			'element'				=> "#page .card > .image",
			'property'			=> 'max-width',
			'value_pattern'	=> '33%',
			'media_query'		=> '@media screen and (min-width: 600px)',
			'exclude'				=> array('2', '3', '4', '5', '6', '7'),
		),
		array(
			'element'				=> "#page .card > .image",
			'property'			=> 'max-width',
			'value_pattern'	=> '100%',
			'media_query'		=> '@media screen and (max-width: 599px)',
			'exclude'				=> array('2', '3', '4', '5', '6', '7'),
		),
		array(
			'element'				=> "#page .card > .image",
			'property'			=> 'max-width',
			'value_pattern'	=> '100%',
			'exclude'				=> array('1'),
		),
		array(
			'element'				=> "#page .card > .image",
			'property'			=> 'margin-bottom',
			'value_pattern'	=> '2rem',
			'exclude'				=> array('1'),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'radio-buttonset',
	'label'					=> esc_html__('Images Align', 'planeta'),
	'section'				=> 'page_section',
	'settings'			=> 'page_image_align',
	'default'				=> 'all-left',
	'choices'				=> array(
		'all-left'				=> esc_html__('All Left', 'planeta'),
		'all-right'				=> esc_html__('All Right', 'planeta'),
		'first-left'			=> esc_html__('First Left', 'planeta'),
		'first-right'			=> esc_html__('First Right', 'planeta'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'page_masonry_num',
			'operator'			=> '==',
			'value'					=> 1,
		),
	),
));

Kirki::add_field('planeta_config', array(
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
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'label'						=> esc_html__('Enable Search', 'planeta'),
	'settings'				=> 'enable_search_bar',
	'section'					=> 'page_section',
	'default'					=> '1',
));

?>
