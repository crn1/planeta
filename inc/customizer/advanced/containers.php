<?php

Kirki::add_section('containers_section', array(
	'title'       => esc_html__('Containers', 'planeta' ),
	'panel'       => 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'number',
	'settings'				=> 'default_container_desktop',
	'label'						=> esc_html__('Container Max Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 1500,
	'choices'					=> array(
		'min'							=> 320,
		'max'							=> 1920,
		'step'						=> 10,
	),
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> '.default-container',
			'property'			=> 'max-width',
			'units'					=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'article_container',
	'label'						=> esc_html__('Article Container Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 44,
	'choices'					=> array(
		'min'							=> 1,
		'max'							=> 90,
		'step'						=> 1,
	),
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> '.article-container',
			'property'			=> 'flex-basis',
			'value_pattern'	=> '$% !important',
		),
		array(
			'element'				=> '.sidebar',
			'property'			=> 'flex-basis',
			'value_pattern'	=> 'calc((100% - $%) / 2 - 3%) !important',
		),
	),
));

?>