<?php

Kirki::add_section('typography_page_subtitle', array(
	'title'       => esc_html__('Page Subtitle', 'planeta' ),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Page Subtitle', 'planeta'),
	'section'     => 'typography_page_subtitle',
	'settings'    => 'typography_page_subtitle',
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
	'label'       => esc_html__('Page Subtitle Size (rem)', 'planeta'),
	'section'     => 'typography_page_subtitle',
	'settings'    => 'typography_page_subtitle_size',
	'default'     => 2,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '.page-subtitle',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

?>
