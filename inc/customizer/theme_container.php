<?php

Kirki::add_section('container_section', array(
	'title'       => esc_html__('Default Container', 'planeta' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'default_container_width',
	'label'						=> esc_html__('Width (in rems)', 'planeta'),
	'section'					=> 'container_section',
	'default'					=> 70,
	'choices'					=> array(
		'min'							=> 1,
		'max'							=> 125,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'			=> '.default-container',
			'property'		=> 'max-width',
			'units'				=> 'rem',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'header_container_width',
	'label'						=> esc_html__('Width (in rems)', 'planeta'),
	'section'					=> 'container_section',
	'default'					=> 100,
	'choices'					=> array(
		'min'							=> 1,
		'max'							=> 125,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'			=> '.header-container',
			'property'		=> 'max-width',
			'units'				=> 'rem',
		),
	),
));

?>
