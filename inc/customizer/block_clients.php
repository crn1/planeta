<?php

supplier_add_homepage_blocks_section(
	$module_name = 'clients',
	$module_title = 'Clients',
	$num_of_instances = 1,
	$section_fields = array(),
	$items_fields = array(
		'title'			=> array(
			'type'					=> 'text',
			'label'  		   	=> esc_html__('Title', 'planeta'),
		),

		'description'			=> array(
			'type'						=> 'textarea',
			'label'						=> esc_html__('Description', 'planeta'),
		),

		'image'						=> array(
			'type'						=> 'image',
			'label'						=> esc_html__('Image', 'planeta'),
		),
	)
);

?>
