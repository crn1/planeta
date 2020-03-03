<?php

supplier_add_homepage_blocks_section(
	$module_name = 'mini_sections',
	$module_title = 'Mini Sections',
	$num_of_instances = 5,
	$section_fields = array(),
	$items_fields  = array(
		'title'				=> array(
			'type'				=> 'textarea',
			'label'  	   	=> esc_html__('Title', 'kirki'),
		),

		'description'	=> array(
			'type'				=> 'textarea',
			'label'  	   	=> esc_html__('Content', 'kirki'),
		),

		'image'				=> array(
			'type'				=> 'image',
			'label'				=> esc_html__('Image', 'kirki'),
		),

		// Za sad samo left :O
		/*'image_position'	=> array(
			'type'						=> 'select',
			'label'     			=> esc_html__('Image Position', 'kirki'),
			'choices'					=> array(
				'left'						=> esc_html__('Left (default)', 'kirki'),
				'right'						=> esc_html__('Right', 'kirki'),
			),
		),*/

		'url'					=> array(
			'type'				=> 'text',
			'label'				=> esc_html__('Item URL', 'kirki'),
		),

		'url_tab'			=> array(
			'type'				=> 'checkbox',
			'label'				=> esc_html__('Open URL in a new tab', 'kirki'),
		),
	)
);

?>
