<?php

Kirki::add_section('page_section', array(
	'title'	=> esc_html__('Page', 'planeta'),
	'panel'	=> 'modules_panel',
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
	'section'					=> 'page_section',
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

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Items Columns', 'planeta'),
	'section'				=> 'page_section',
	'settings'			=> 'page_masonry_num',
	'default'				=> '3',
	'choices'				=> array(
		'min'						=> '1',
		'max'						=> '6',
		'step'					=> '1',
	),
	'output'				=> array(
		array(
			'element'				=> array(
				'#page-container .card-default',
				'#page-container .card-perspective-left',
				'#page-container .card-perspective-right',
				'#page-container .card-perspective-up',
				'#page-container .card-perspective-down',
				'#page-container .card-zigzag-left',
				'#page-container .card-zigzag-right',
			),
			'property'			=> 'flex-direction',
			'value_pattern'	=> 'row',
			'media_query'		=> '@media screen and (min-width: 769px)',
			'exclude'				=> array('2', '3', '4', '5', '6'),
		),
		array(
			'element'				=> '#page-container .card-image',
			'property'			=> 'margin-right',
			'value_pattern'	=> '2rem',
			'media_query'		=> '@media screen and (min-width: 769px)',
			'exclude'				=> array('2', '3', '4', '5', '6'),
		),
		array(
			'element'				=> '#page-container .card-image',
			'property'			=> 'margin-down',
			'value_pattern'	=> '1rem',
			'media_query'		=> '@media screen and (max-width: 768px)',
		),
		array(
			'element'				=> '#page-container .card-image',
			'property'			=> 'max-width',
			'value_pattern'	=> '33%',
			'media_query'		=> '@media screen and (min-width: 769px)',
			'exclude'				=> array('2', '3', '4', '5', '6'),
		),
		array(
			'element'				=> '#page-container .card-image',
			'property'			=> 'max-width',
			'value_pattern'	=> '100%',
			'media_query'		=> '@media screen and (max-width: 768px)',
			'exclude'				=> array('2', '3', '4', '5', '6'),
		),
		array(
			'element'				=> '#page-container .card-image',
			'property'			=> 'max-width',
			'value_pattern'	=> '100%',
			'exclude'				=> array('1'),
		),
	),
));

?>
