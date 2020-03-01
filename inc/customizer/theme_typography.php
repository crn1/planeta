<?php

Kirki::add_section('typography_section', array(
	'title'       => esc_html__('Typography', 'kirki' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Main Typography', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_main',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
		'text-transform' => 'none',
		'text-align'     => 'left',
	),
	'output'      => array(
		array(
			'element' => array('body', 'a'),
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Main Heading (h1) Size (rem)', 'kirki'),
	'settings'    => 'typography_main_heading_size',
	'section'     => 'typography_section',
	'default'     => 3,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> 'h1',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'select',
	'label'       => esc_html__('Main Heading (h1) Text Transform', 'kirki'),
	'settings'    => 'typography_main_heading_transform',
	'section'     => 'typography_section',
	'default'			=> 'none',
	'choices'			=> array(
		'none'      	 => esc_html__('None (default)', 'kirki'),
		'capitalize'   => esc_html__('Capitalize', 'kirki'),
		'uppercase'    => esc_html__('Uppercase', 'kirki'),
		'lowercase'    => esc_html__('Lowercase', 'kirki'),
		'initial'	 	   => esc_html__('Initial', 'kirki'),
		'inherit' 	   => esc_html__('Inherit', 'kirki'),
	),
	'output'			=> array(
		array(
			'element'			=> 'h1',
			'property'		=> 'text-transform',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Title Heading (h2) Size (rem)', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_title_size',
	'default'     => 5,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> 'h2',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'select',
	'label'       => esc_html__('Title Heading (h2) Text Transform', 'kirki'),
	'settings'    => 'typography_title_heading_transform',
	'section'     => 'typography_section',
	'default'			=> 'none',
	'choices'			=> array(
		'none'      	 => esc_html__('None (default)', 'kirki'),
		'capitalize'   => esc_html__('Capitalize', 'kirki'),
		'uppercase'    => esc_html__('Uppercase', 'kirki'),
		'lowercase'    => esc_html__('Lowercase', 'kirki'),
		'initial'	 	   => esc_html__('Initial', 'kirki'),
		'inherit' 	   => esc_html__('Inherit', 'kirki'),
	),
	'output'			=> array(
		array(
			'element'			=> 'h2',
			'property'		=> 'text-transform',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Subtitle Heading (h3) Size (rem)', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_subtitle_size',
	'default'     => 2,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> 'h3',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'select',
	'label'       => esc_html__('Subtitle Heading (h3) Text Transform', 'kirki'),
	'settings'    => 'typography_subtitle_heading_transform',
	'section'     => 'typography_section',
	'default'			=> 'none',
	'choices'			=> array(
		'none'      	 => esc_html__('None (default)', 'kirki'),
		'capitalize'   => esc_html__('Capitalize', 'kirki'),
		'uppercase'    => esc_html__('Uppercase', 'kirki'),
		'lowercase'    => esc_html__('Lowercase', 'kirki'),
		'initial'	 	   => esc_html__('Initial', 'kirki'),
		'inherit' 	   => esc_html__('Inherit', 'kirki'),
	),
	'output'			=> array(
		array(
			'element'			=> 'h3',
			'property'		=> 'text-transform',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Caption Size (rem)', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_caption_size',
	'default'     => 0.8,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> array('small', 'caption'),
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'select',
	'label'       => esc_html__('Caption Heading Text Transform', 'kirki'),
	'settings'    => 'typography_caption_heading_transform',
	'section'     => 'typography_section',
	'default'			=> 'none',
	'choices'			=> array(
		'none'      	 => esc_html__('None (default)', 'kirki'),
		'capitalize'   => esc_html__('Capitalize', 'kirki'),
		'uppercase'    => esc_html__('Uppercase', 'kirki'),
		'lowercase'    => esc_html__('Lowercase', 'kirki'),
		'initial'	 	   => esc_html__('Initial', 'kirki'),
		'inherit' 	   => esc_html__('Inherit', 'kirki'),
	),
	'output'			=> array(
		array(
			'element'			=> array('small', 'caption'),
			'property'		=> 'text-transform',
		),
	),
));

?>
