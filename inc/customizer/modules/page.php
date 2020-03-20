<?php

Kirki::add_section('page_section', array(
	'title'	=> esc_html__('Page', 'planeta'),
	'panel'	=> 'modules_panel',
));

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

Kirki::add_field('planeta_config', array(
	'type'						=> 'select',
	'label'						=> esc_html__('Items Type', 'planeta'),
	'section'					=> 'page_section',
	'settings'				=> 'page_card_type',
	'default'					=> 'default',
	'choices'					=> array(
		'default'							=> esc_html__('Default', 'planeta'),
		'perspective-left'		=> esc_html__('Perspective Left', 'planeta'),
		'perspective-right'		=> esc_html__('Perspective Right', 'planeta'),
		'perspective-up'			=> esc_html__('Perspective Up', 'planeta'),
		'perspective-down'		=> esc_html__('Perspective Down', 'planeta'),
		'zigzag-left'					=> esc_html__('ZigZag Left', 'planeta'),
		'zigzag-right'				=> esc_html__('ZigZag Right', 'planeta'),
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
