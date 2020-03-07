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
		'font-family'    => 'Rubik',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
	),
	'output'      => array(
		array(
			'element' => array('body'),
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Links', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_links',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => '600',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> 'a',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Top Menu Links', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_top_menu_heading',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-align'     => 'center',
		'text-transform' => 'uppercase',
	),
	'output'      => array(
		array(
			'element'			=> array('#top-menu', '#top-menu a'),
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Top Menu Links Size (rem)', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_top_menu_size',
	'default'     => 3,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '#top-menu a',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Main Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_main_heading',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => '700',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> '.heading-main',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Main Heading Size (rem)', 'kirki'),
	'settings'    => 'typography_main_heading_size',
	'section'     => 'typography_section',
	'default'     => 2,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '.heading-main',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Main Heading Opacity', 'kirki'),
	'settings'    => 'typography_main_heading_opacity',
	'section'     => 'typography_section',
	'default'     => 1,
	'choices'     => array(
		'min'					=> 0,
		'max'					=> 1,
		'step'				=> 0.01,
	),
	'output'			=> array(
		array(
			'element'			=> '.heading-main',
			'property'		=> 'opacity',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Title Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_title_heading',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => '900',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-align'     => 'left',
		'text-transform' => 'uppercase',
	),
	'output'      => array(
		array(
			'element'			=> '.heading-title',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Title Heading Opacity', 'kirki'),
	'settings'    => 'typography_title_heading_opacity',
	'section'     => 'typography_section',
	'default'     => 1,
	'choices'     => array(
		'min'					=> 0,
		'max'					=> 1,
		'step'				=> 0.01,
	),
	'output'			=> array(
		array(
			'element'			=> '.heading-title',
			'property'		=> 'opacity',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Title Heading Size (rem)', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_title_size',
	'default'     => 10,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'output'			=> array(
		array(
			'element'			=> '.heading-title',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Subtitle Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_subtitle_heading',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> '.heading-subtitle',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Subtitle Heading Size (rem)', 'kirki'),
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
			'element'			=> '.heading-subtitle',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Caption Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_caption_heading',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> array('small', 'caption', '.heading-caption'),
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
			'element'			=> array('small', 'caption', '.heading-caption'),
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));


?>
