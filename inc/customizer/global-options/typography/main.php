<?php

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

?>
