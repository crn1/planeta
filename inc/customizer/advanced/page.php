<?php

Kirki::add_panel('page_panel', array(
	'title'						=> esc_html__('Page Options', 'planeta'),
	'panel'						=> 'advanced_panel',
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
	'transport'				=> 'auto',
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
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> '.page-title-overlay',
			'property'			=> 'background-color',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'label'						=> esc_html__('Enable Search', 'planeta'),
	'section'					=> 'enable_search_bar',
	'settings'				=> 'page_title',
	'default'					=> '1',
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Items Columns', 'planeta'),
	'section'				=> 'page_general',
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
	'section'				=> 'page_general',
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

?>
