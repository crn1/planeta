<?php

supplier_add_homepage_blocks_section(
	$module_name = 'portfolio',
	$module_title = 'Portfolio/Projects',
	$num_of_instances = 1,
	$section_fileds = array(
		'masonry_num' 	=> array(
			'type'					=> 'slider',
			'label'					=> esc_html__('Number of columns for items', 'kirki'),
			'default'				=> 3,
			'choices'				=> array(
				'min'						=> 1,
				'max'						=> 6,
				'step'					=> 1,
			),
		),
	),
	array(
		'title'			=> array(
			'type'					=> 'text',
			'label'  		   	=> esc_html__('Title', 'kirki'),
		),

		'description'			=> array(
			'type'						=> 'text',
			'label'						=> esc_html__('Description', 'kirki'),
		),

		'align'						=> array(
			'type'						=> 'select',
			'label'     			=> esc_html__('Align', 'kirki'),
			'choices'					=> array(
				'left'						=> esc_html__('Left (default)', 'kirki'),
				'center'					=> esc_html__('Center', 'kirki'),
				'right'						=> esc_html__('Right', 'kirki'),
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
				'center_bellow'		=> esc_html__('Center (below description)', 'kirki'),
				'center_above'		=> esc_html__('Center (above description)', 'kirki'),
				'right'						=> esc_html__('Right', 'kirki'),
			),
		),

		'item_link'						=> array(
			'type'						=> 'text',
			'label'						=> esc_html__('Item URL', 'kirki'),
		),

		'item_link'						=> array(
			'type'						=> 'checkbox',
			'label'						=> esc_html__('Open URL in a new tab', 'kirki'),
		),
	)
);

?>
