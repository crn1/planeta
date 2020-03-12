<?php

Kirki::add_section('typography_section', array(
	'title'       => esc_html__('Typography', 'planeta' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Main Typography', 'planeta'),
	'section'     => 'typography_section',
	'settings'    => 'typography_main',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
	),
	'output'      => array(
		array(
			'element'				=> array('html', 'body'),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Main Typography Size (px)', 'planeta'),
	'section'     => 'typography_section',
	'settings'    => 'typography_main_size',
	'default'     => 16,
	'choices'     => array(
		'min'					=> 16,
		'max'					=> 72,
		'step'				=> 1,
	),
	'output'			=> array(
		array(
			'element'				=> array('html', 'body'),
			'property'			=> 'font-size',
			'value_pattern' => 'calc(16px + ($ - 16) * (100vw - 320px) / 640)',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Section Title', 'planeta'),
	'section'     => 'typography_section',
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
	'section'     => 'typography_section',
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

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Section Subtitle', 'planeta'),
	'section'     => 'typography_section',
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
	'section'     => 'typography_section',
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

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Page Title', 'planeta'),
	'section'     => 'typography_section',
	'settings'    => 'typography_page_title',
	'default'			=> 'none',
	'default'     => array(
		'text-transform'    => 'none',
		'text-align'    		=> 'left',
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
	'section'     => 'typography_section',
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
