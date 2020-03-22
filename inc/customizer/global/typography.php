<?php

Kirki::add_panel('typography_panel', array(
	'title'       => esc_html__('Typography', 'planeta' ),
	'panel'       => 'global_panel',
));

function typography_generator($name, $section, $class, $enable_sizing=true, $enable_hover=false, $enable_fittext=false)
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

	if($enable_sizing)
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'slider',
			'label'       => esc_html__('Size (rem)', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_size",
			'default'     => 2,
			'choices'     => array(
				'min'					=> 0.1,
				'max'					=> 7,
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

	if($enable_fittext)
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'toggle',
			'label'       => esc_html__('Fit Text', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_fittext",
			'default'     => false,
		));
	}

	if($enable_hover)
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'select',
			'label'       => esc_html__('Hover Effect', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_hover",
			'default'     => 'none',
			'choices'     => array(
				'none'       			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-1'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-2'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-3'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-4'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-5'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-6'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-7'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-8'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-9'			=> esc_html__('None (default)', 'planeta'),
				'cl-effect-10'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-11'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-12'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-13'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-14'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-15'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-16'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-17'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-18'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-19'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-20'		=> esc_html__('None (default)', 'planeta'),
				'cl-effect-21'		=> esc_html__('None (default)', 'planeta'),
			),
		));
	}
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
		'font-family'    => 'inherit',
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
		'max'					=> 48,
		'step'				=> 1,
	),
	'output'			=> array(
		array(
			'element'				=> array('html', 'body'),
			'property'			=> 'font-size',
			'value_pattern' => 'calc(16px + ($ - 16) * (100vw - 600px) / 680)',
		),
	),
));

typography_generator('Links', 'links', 'a', false, true);
typography_generator('Section Title', 'section_title', '.section-title', true, false, true);
typography_generator('Section Subtitle', 'section_subtitle', '.section-subtitle', true, false, true);
typography_generator('Page Title', 'page_title', '.page-title', true, false, true);
typography_generator('Page Subtitle', 'page_subtitle', '.page-subtitle', true, false, true);

?>
