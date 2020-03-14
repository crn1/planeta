<?php

$card_types = array(
	'projects'						=> array(
		'default'							=> esc_html__('Default', 'planeta'),
		'perspective-left'		=> esc_html__('Perspective Left', 'planeta'),
		'perspective-right'		=> esc_html__('Perspective Right', 'planeta'),
		'zigzag-left'					=> esc_html__('ZigZag Left', 'planeta'),
		'zigzag-right'				=> esc_html__('ZigZag Right', 'planeta'),
	),
	'experience'					=> array(
		'default'							=> esc_html__('Default', 'planeta'),
	)
	/*'clients'							=> $link_types,
	'testimonials'				=> $link_types,
	'posts'								=> $link_types,
	'mini_sections'				=> $link_types,*/
);

$items_fields = array(
	'services'						=> array(),

	'projects'						=> array(
		'url'									=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Item URL', 'planeta'),
		),
		'url_tab'							=> array(
			'type'								=> 'checkbox',
			'label'								=> esc_html__('Open URL in a new tab', 'planeta'),
		),
	),

	'experience'					=> array(
		'date_span'						=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Date', 'planeta'),
			'default'							=> 'May 2019 - July 2020',
		),
	),

	'clients'							=> array(),

	'testimonials' 				=> array(
		'author'							=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Author', 'planeta'),
			'default'							=> 'John Doe',
		),
		'author_profession'		=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Author Profession', 'planeta'),
			'default'							=> 'Front-end Developer',
		),
	),

	'posts'								=> array(),

	'mini_sections'				=> array(
		'url'									=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Item URL', 'planeta'),
		),
		'url_tab'							=> array(
			'type'								=> 'checkbox',
			'label'								=> esc_html__('Open URL in a new tab', 'planeta'),
		),
	),
);

?>
