<?php

supplier_add_homepage_blocks_section(
	$module_name = 'experience',
	$module_title = 'Experience',
	$num_of_instances = 1,
	$section_fields = array(
		'reverse' => array(
			'type'				=> 'toggle',
			'label'				=> esc_html__('Reverse Experience Items Order', 'kirki'),
			'default'			=> false,
		),
	),
	$items_fields = array(
		'title'					=> array(
			'type'					=> 'text',
			'label'					=> esc_html__('Title/Job', 'kirki'),
			'default'				=> 'Front-end Developer',
		),
		'description'		=> array(
			'type'					=> 'textarea',
			'label'					=> esc_html__('Description', 'kirki'),
			'default'				=> 'Front-end Developer',
		),
		'date_span'			=> array(
			'type'					=> 'text',
			'label'					=> esc_html__('Date', 'kirki'),
			'default'				=> 'May 2019 - July 2020',
		),
	)
);

?>
