<?php

Kirki::add_panel('typography_panel', array(
	'title'       => esc_html__('Typography', 'planeta' ),
	'panel'       => 'theme_options_panel',
));

function typography_generator($name, $section, $class)
{
	Kirki::add_section("typography_${section}", array(
		'title'       => esc_html__($name, 'planeta' ),
		'panel'       => 'typography_panel',
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Typography', 'planeta'),
		'section'     => "typography_${section}",
		'settings'    => "typography_${section}",
		'default'			=> 'none',
		'default'     => array(
			'text-transform'    => 'none',
			'text-align'    		=> 'left',
			'color'    					=> '#FFFFFF',
			'font-family'    		=> 'Rubik',
			'variant'        		=> 'regular',
			'line-height'    		=> '1.5',
			'letter-spacing' 		=> '0',
		),
		'output'      => array(
			array(
				'element' 		=> $class,
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Size (rem)', 'planeta'),
		'section'     => "typography_${section}",
		'settings'    => "typography_${section}_size",
		'default'     => 2,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 10,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> $class,
				'units'				=> 'rem',
				'property'		=> 'font-size',
			),
		),
	));
}

Kirki::add_section('typography_main', array(
	'title'       => esc_html__('Global', 'planeta' ),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Main Typography', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main',
	'default'     => array(
		'font-family'    => 'Rubik',
		'variant'        => 'regular',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'    			=> '#FFFFFF',
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
	'section'     => 'typography_main',
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

typography_generator('Section Title', 'section_title', '.section-title');
typography_generator('Section Subtitle', 'section_subtitle', '.section-subtitle');
typography_generator('Page Title', 'page_title', '.page-title');
typography_generator('Page Subtitle', 'page_subtitle', '.page-subtitle');

?>
