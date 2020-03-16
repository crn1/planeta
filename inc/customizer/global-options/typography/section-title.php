<?php

Kirki::add_section('typography_section_title', array(
	'title'       => esc_html__('Section Title', 'planeta' ),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Section Title', 'planeta'),
	'section'     => 'typography_section_title',
	'settings'    => 'typography_section_title',
	'default'			=> 'none',
	'default'     => array(
		'text-transform'    => 'none',
		'text-align'    		=> 'left',
	),
	'output'      => array(
		array(
			'element' 		=> '.section-title',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Section Title Size (rem)', 'planeta'),
	'section'     => 'typography_section_title',
	'settings'    => 'typography_section_title_size',
	'default'     => 10,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '.section-title',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

?>
