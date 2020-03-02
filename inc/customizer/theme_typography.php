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
		'font-family'    => 'Roboto',
		'variant'        => '600',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
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
	'label'       => esc_html__('Main Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_main_heading',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> '.main-heading',
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
			'element'			=> '.main-heading',
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Title Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_title_heading',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> '.title-heading',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Title Heading Size (rem)', 'kirki'),
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
			'element'			=> '.title-heading',
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
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> '.subtitle-heading',
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
			'element'			=> '.subtitle-heading',
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
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
		'text-align'     => 'left',
		'text-transform' => 'none',
	),
	'output'      => array(
		array(
			'element'			=> array('small', 'caption', '.caption-heading'),
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
			'element'			=> array('small', 'caption', '.caption-heading'),
			'units'				=> 'rem',
			'property'		=> 'font-size',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Top Menu Links Heading', 'kirki'),
	'section'     => 'typography_section',
	'settings'    => 'typography_top_menu_heading',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#FFFFFF',
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

?>
