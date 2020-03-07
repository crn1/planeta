<?php

supplier_add_homepage_blocks_section(
	$module_name = 'posts',
	$module_title = 'Posts',
	$num_of_instances = 1,
	$section_fields = array(
		'masonry_num' 	=> array(
			'type'					=> 'slider',
			'label'					=> esc_html__('Number of columns for items', 'planeta'),
			'default'				=> 3,
			'choices'				=> array(
				'min'						=> 1,
				'max'						=> 6,
				'step'					=> 1,
			),
		),
	),
	$items_fields = array()
);

?>
