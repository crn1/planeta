<?php

Kirki::add_section('containers_section', array(
	'title'       => esc_html__('Containers', 'planeta' ),
	'panel'       => 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'number',
	'settings'				=> 'container_default',
	'label'						=> esc_html__('Default Container Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 1200,
	'choices'					=> array(
		'min'							=> 600,
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
	'type' 						=> 'number',
	'settings'				=> 'container_sidebar',
	'label'						=> esc_html__('Post Container Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 700,
	'choices'					=> array(
		'min'							=> 600,
		'max'							=> 1920,
		'step'						=> 10,
	),
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> '.article-container',
			'property'			=> 'max-width',
			'value_pattern'	=> '$px !important',
		),
	),
));

/*Kirki::add_field('planeta_config', array(
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
));*/

?>
