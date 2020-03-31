<?php

Kirki::add_section('containers_section', array(
	'title'       => esc_html__('Containers', 'planeta' ),
	'panel'       => 'global_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'number',
	'settings'				=> 'default_container',
	'label'						=> esc_html__('Frontpage Container Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 1500,
	'choices'					=> array(
		'min'							=> 600,
		'max'							=> 1920,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'			=> '.default-container',
			'property'		=> 'max-width',
			'units'				=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'number',
	'settings'				=> 'page_container',
	'label'						=> esc_html__('Page/Post Container Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 700,
	'choices'					=> array(
		'min'							=> 600,
		'max'							=> 1920,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'			=> '.page-container',
			'property'		=> 'width',
			'units'				=> 'px',
		),
		array(
			'element'			=> '.page-content',
			'property'		=> 'width',
			'units'				=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'number',
	'settings'				=> 'page_container',
	'label'						=> esc_html__('Sidebar Container Width', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 700,
	'choices'					=> array(
		'min'							=> 1,
		'max'							=> 700,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'				=> '.sidebar',
			'property'			=> 'width',
			'units'					=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Promotion columns', 'planeta'),
	'section'				=> 'containers_section',
	'settings'			=> 'promotion_container',
	'default'				=> 3,
	'choices'				=> array(
		'min'						=> 1,
		'max'						=> 6,
		'step'					=> 1,
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Extended Header columns', 'planeta'),
	'section'				=> 'containers_section',
	'settings'			=> 'exntended_header_container',
	'default'				=> 3,
	'choices'				=> array(
		'min'						=> 1,
		'max'						=> 6,
		'step'					=> 1,
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Extended Footer columns', 'planeta'),
	'section'				=> 'containers_section',
	'settings'			=> 'exntended_footer_container',
	'default'				=> 3,
	'choices'				=> array(
		'min'						=> 1,
		'max'						=> 6,
		'step'					=> 1,
	),
));

?>
