<?php

supplier_add_homepage_blocks_section(
	$module_name = 'testimonials',
	$module_title = 'Testimonials',
	$num_of_instances = 1,
	$section_fields = array(
		'show_quotes' => array(
			'type'				=> 'toggle',
			'label'				=> esc_html__('Show Quotes', 'planeta'),
			'default'			=> false,
		),
	),
	$items_fields = array(
		'title'							=> array(
			'type'							=> 'textarea',
			'label'							=> esc_html__('Comment Title', 'planeta'),
			'default'						=> 'Lorem ispum dolor sit amet',
		),
		'description'				=> array(
			'type'							=> 'textarea',
			'label'							=> esc_html__('Comment', 'planeta'),
			'default'						=> 'Lorem ispum dolor sit amet',
		),
		'image'							=> array(
			'type'							=> 'image',
			'label'							=> esc_html__('Author Image', 'planeta'),
			'default'						=> 0,
		),
		'author'						=> array(
			'type'							=> 'text',
			'label'							=> esc_html__('Author', 'planeta'),
			'default'						=> 'John Doe',
		),
		'author_profession'	=> array(
			'type'							=> 'text',
			'label'							=> esc_html__('Author Profession', 'planeta'),
			'default'						=> 'Front-end Developer',
		),
	)
);

?>
