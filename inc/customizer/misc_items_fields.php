<?php

$items_fields = array(
	'clients'							=> array(),

	'posts'								=> array(),

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

	'mini_sectrions'			=> array(
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
