<?php

define('ITEMS_FIELDS', array(

	'projects'						=> array(
		'title'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Title (Primary Text)', 'planeta'),
			'default'							=> 'This is title',
		),
		'description'					=> array(
			'type'								=> 'textarea',
			'label'								=> esc_html__('Description (Secondary Text)', 'planeta'),
			'default'							=> 'This is description of a project',
		),
		'url'									=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('URL', 'planeta'),
			'default'							=> esc_html__('http://example.com', 'planeta'),
		),
		'url_tab'							=> array(
			'type'								=> 'checkbox',
			'label'								=> esc_html__('Open URL in a new tab', 'planeta'),
			'default'							=> false,
		),
	),

	'experience'					=> array(
		'title'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Name (Primary Text)', 'planeta'),
			'default'							=> 'Experience Name',
		),
		'date_span'						=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Date Span (Secondary Text)', 'planeta'),
			'default'							=> 'May 2019 - July 2020',
		),
		'description'					=> array(
			'type'								=> 'textarea',
			'label'								=> esc_html__('Description', 'planeta'),
			'default'							=> 'This is experience description',
		),
	),

	'clients'							=> array(
		'title'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Title (Primary Text)', 'planeta'),
			'default'							=> 'ACME Corp, Inc.',
		),
		'description'					=> array(
			'type'								=> 'textarea',
			'label'								=> esc_html__('Description (Secondary Text)', 'planeta'),
			'default'							=> 'This is description of a client',
		),
	),

	'testimonials' 				=> array(
		'title'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Author (Primary Text)', 'planeta'),
			'default'							=> 'John Doe',
		),
		'author_description'	=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Author Description', 'planeta'),
			'default'							=> 'Front-end Developer',
		),
		'excerpt'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Excerpt (Secondary Text)', 'planeta'),
			'default'							=> 'ACME Corp, Inc.',
		),
		'full_testimonial'					=> array(
			'type'								=> 'textarea',
			'label'								=> esc_html__('Full Testimonial', 'planeta'),
			'default'							=> 'This is full text of testimonial',
		),
	),

	'numbers'							=> array(
		'number'							=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Number (Primary Text)', 'planeta'),
			'default'							=> '101',
		),
		'title'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Title (Secondary Text)', 'planeta'),
			'default'							=> 'Satisfied Clients',
		),
		'description'					=> array(
			'type'								=> 'textarea',
			'label'								=> esc_html__('Description', 'planeta'),
			'default'							=> 'Lorem ipsum dolor sit amet',
		),
	),

	'buttons'							=> array(
		'title'								=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('Title (Primary Text)', 'planeta'),
			'default'							=> 'Read More...',
		),
		'url'									=> array(
			'type'								=> 'text',
			'label'								=> esc_html__('URL', 'planeta'),
			'default'							=> esc_html__('http://example.com', 'planeta'),
		),
		'url_tab'							=> array(
			'type'								=> 'checkbox',
			'label'								=> esc_html__('Open URL in a new tab', 'planeta'),
			'default'							=> false,
		),
	),
));

?>
