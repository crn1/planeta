<?php

supplier_add_homepage_blocks_section(
	$module_name = 'testimonials',
	$module_title = 'Testimonials',
	$num_of_instances = 1,
	$section_fields = array(
		'show_quotes' => array(
			'type'				=> 'toggle',
			'label'				=> esc_html__('Show Quotes', 'kirki'),
			'default'			=> false,
		),
		'masonry_num' => array(
			'type'				=> 'slider',
			'label'				=> esc_html__('Number of columns', 'kirki'),
			'default'			=> 3,
			'choices'			=> array(
				'min'					=> 1,
				'max'					=> 6,
				'step'				=> 1,
			),
		),
	),
	$items_fields = array(
		'title'					=> array(
			'type'					=> 'text',
			'label'					=> esc_html__('Author', 'kirki'),
			'default'				=> 'John Doe',
		),
		'profession'		=> array(
			'type'					=> 'text',
			'label'					=> esc_html__('Author Profession', 'kirki'),
			'default'				=> 'Front-end Developer',
		),
		'author_image'	=> array(
			'type'					=> 'image',
			'label'					=> esc_html__('Author Image', 'kirki'),
			'default'				=> 0,
		),
		'comment_title'	=> array(
			'type'					=> 'textarea',
			'label'					=> esc_html__('Comment Title', 'kirki'),
			'default'				=> 'Lorem ispum dolor sit amet',
		),
		'comment_content'	=> array(
			'type'						=> 'textarea',
			'label'						=> esc_html__('Comment', 'kirki'),
			'default'					=> 'Lorem ispum dolor sit amet',
		),
	)
);

?>
