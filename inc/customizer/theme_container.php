<?php

Kirki::add_section('container_section', array(
	'title'       => esc_html__('Default Container', 'planeta' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'container_columns',
	'label'						=> esc_html__('Width (in rems)', 'planeta'),
	'section'					=> 'container_section',
	'default'					=> 90,
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

?>
