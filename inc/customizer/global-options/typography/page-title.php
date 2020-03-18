<?php

Kirki::add_section('typography_page_title', array(
	'title'       => esc_html__('Page Title', 'planeta' ),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Page Title', 'planeta'),
	'section'     => 'typography_page_title',
	'settings'    => 'typography_page_title',
	'default'			=> 'none',
	'default'     => array(
		'text-transform'    => 'none',
		'text-align'    		=> 'left',
		'color'    					=> '#FFFFFF',
	),
	'output'      => array(
		array(
			'element' 		=> '.page-subtitle',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Page Title Size (rem)', 'planeta'),
	'section'     => 'typography_page_title',
	'settings'    => 'typography_page_title_size',
	'default'     => 10,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '.page-title',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

?>
