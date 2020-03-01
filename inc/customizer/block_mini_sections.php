<?php

supplier_add_homepage_blocks_section(
	$module_name = 'mini_sections',
	$module_title = 'Mini Sections',
	$num_of_instances = 5,
	$section_fileds = array(),
	array(
		'content'			=> array(
			'type'					=> 'textarea',
			'label'  		   	=> esc_html__('Content', 'kirki'),
		),

		'content_align'	=> array(
			'type'						=> 'select',
			'label'     			=> esc_html__('Content Align', 'kirki'),
			'choices'					=> array(
				'left'						=> esc_html__('Left (default)', 'kirki'),
				'center'					=> esc_html__('Center', 'kirki'),
				'right'						=> esc_html__('Right', 'kirki'),
				'random'					=> esc_html__('Random', 'kirki'),
			),
		),

		'image'						=> array(
			'type'						=> 'image',
			'label'						=> esc_html__('Image', 'kirki'),
		),

		'image_position'	=> array(
			'type'						=> 'select',
			'label'     			=> esc_html__('Image Position', 'kirki'),
			'choices'					=> array(
				'left'						=> esc_html__('Left (default)', 'kirki'),
				'center_bellow'		=> esc_html__('Center (below subtitle)', 'kirki'),
				'center_above'		=> esc_html__('Center (above subtitle)', 'kirki'),
				'right'						=> esc_html__('Right', 'kirki'),
				'random'					=> esc_html__('Random', 'kirki'),
			),
		),

		'button_text'		=> array(
			'type'					=> 'text',
			'label'					=> esc_html__('Button Text', 'kirki'),
		),

		'button_url'		=> array(
			'type'					=> 'text',
			'label'					=> esc_html__('Button URL', 'kirki'),
		),
	)
);

?>
