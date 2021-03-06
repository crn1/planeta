<?php

Kirki::add_section('containers_section', array(
	'title'       => esc_html__('Containers', 'planeta' ),
	'panel'       => 'advanced_panel',
	'description'	=> esc_html__("Set the width of the theme's containers.", 'planeta'),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'number',
	'settings'				=> 'container_default',
	'label'						=> esc_html__('Main Container Width (px)', 'planeta'),
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
	'settings'				=> 'container_article',
	'label'						=> esc_html__('Post Container Width (px)', 'planeta'),
	'description'			=> esc_html__('Set the width of post, page and project content.', 'planeta'),
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

?>
