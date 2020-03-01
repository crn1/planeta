<?php

supplier_add_homepage_blocks_section(
	$module_name = 'posts',
	$module_title = 'Posts',
	$num_of_instances = 1,
	$section_fields = array(
		'show_posts' 		=> array(
			'type'					=> 'radio-buttonset',
			'label'					=> esc_html__('Show Posts', 'kirki'),
			'default'				=> 'recent',
			'choices'				=> array(
				'recent'				=> esc_html__('Most Recent', 'kirki'),
				'sticky'				=> esc_html__('All Sticky', 'kirki'),
			),
		),

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
	$items_fields = array()
);

?>
