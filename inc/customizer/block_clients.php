<?php

supplier_add_homepage_blocks_section(
	$module_name = 'clients',
	$module_title = 'Clients',
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

		'image'						=> array(
			'type'						=> 'image',
			'label'						=> esc_html__('Image', 'kirki'),
		),
	)
);

?>
