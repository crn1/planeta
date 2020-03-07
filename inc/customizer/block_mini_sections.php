<?php

supplier_add_homepage_blocks_section(
	$module_name = 'mini_sections',
	$module_title = 'Mini Sections',
	$num_of_instances = 5,
	$section_fields = array(),
	$items_fields  = array(
		'title'				=> array(
			'type'				=> 'textarea',
			'label'  	   	=> esc_html__('Title', 'planeta'),
		),

		'description'	=> array(
			'type'				=> 'textarea',
			'label'  	   	=> esc_html__('Content', 'planeta'),
		),

		'image'				=> array(
			'type'				=> 'image',
			'label'				=> esc_html__('Image', 'planeta'),
		),

		// Za sad samo left :O
		/*'image_position'	=> array(
			'type'						=> 'select',
			'label'     			=> esc_html__('Image Position', 'planeta'),
			'choices'					=> array(
				'left'						=> esc_html__('Left (default)', 'planeta'),
				'right'						=> esc_html__('Right', 'planeta'),
			),
		),*/

		'url'					=> array(
			'type'				=> 'text',
			'label'				=> esc_html__('Item URL', 'planeta'),
		),

		'url_tab'			=> array(
			'type'				=> 'checkbox',
			'label'				=> esc_html__('Open URL in a new tab', 'planeta'),
		),
	)
);

?>
