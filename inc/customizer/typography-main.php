<?php

Kirki::add_section('typography_main', array(
	'title'       => esc_html__('Main Typography', 'planeta'),
	'panel'       => 'typography_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'typography',
	'label'       => esc_html__('Typography', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main',
	'default'     => array(
		'text-transform'			=> 'none',
		'color'								=> '#000000',
		'font-family'					=> 'Rubik',
		'variant'							=> 'regular',
		'line-height'					=> '1.5',
		'letter-spacing'			=> '0',
	),
	'output'      => array(
		array(
			'element' 		=> 'html',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'toggle',
	'label'       => esc_html__('Fluid Typography', 'planeta'),
	'section'     => "typography_main",
	'settings'    => "typography_main_fluid",
	'default'			=> true,
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_fluid_size',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'default'     => '22',
	'transport'		=> 'auto',
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Desktop', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_desktop',
	'default'     => '22',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '==',
			'value'						=> false,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Laptop', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_laptop',
	'default'     => '20',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 900px) and (max-width: 1199px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '==',
			'value'						=> false,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Tablet', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_tablet',
	'default'     => '18',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 899px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '==',
			'value'						=> false,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'        => 'slider',
	'label'       => esc_html__('Size on Smartphone', 'planeta'),
	'section'     => 'typography_main',
	'settings'    => 'typography_main_size_mobile',
	'default'     => '16',
	'transport'		=> 'auto',
	'choices'     => array(
		'min'					=> '16',
		'max'					=> '32',
		'step'				=> '1',
	),
	'output'			=> array(
		array(
			'element' 			=> 'html',
			'property'			=> 'font-size',
			'units'					=> 'px',
			'media_query'		=> '@media (max-width: 599px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'typography_main_fluid',
			'operator'				=> '==',
			'value'						=> false,
		),
	),
));

?>
