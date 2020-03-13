<?php

$link_types = array(
	'default'							=> esc_html__('Default', 'planeta'),
	'default-left'				=> esc_html__('Default Left', 'planeta'),
	'default-right'				=> esc_html__('Default Right', 'planeta'),
);

$card_types = array(
	'services'						=> $link_types,
	'projects'						=> $link_types,
	'experience'					=> $link_types,
	'clients'							=> $link_types,
	'testimonials'				=> $link_types,
	'posts'								=> $link_types,
	'mini_sections'				=> $link_types,
);

$items_fields = array(
	'services'						=> array(
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
