<?php

Kirki::add_section('typography_section_subtitle', array(
	'title'       => esc_html__('Section Subtitle', 'planeta' ),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Section Subtitle', 'planeta'),
	'section'     => 'typography_section_subtitle',
	'settings'    => 'typography_section_subtitle',
	'default'			=> 'none',
	'default'     => array(
		'text-transform'    => 'none',
		'text-align'    		=> 'left',
	),
	'output'      => array(
		array(
			'element' 		=> '.section-subtitle',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Section Subtitle Size (rem)', 'planeta'),
	'section'     => 'typography_section_subtitle',
	'settings'    => 'typography_section_subtitle_size',
	'default'     => 2,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '.section-subtitle',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

?>
