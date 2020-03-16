<?php

Kirki::add_section('containers_section', array(
	'title'       => esc_html__('Containers', 'planeta' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'default_container',
	'label'						=> esc_html__('Main Container Width (px)', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 1920,
	'choices'					=> array(
		'min'							=> 600,
		'max'							=> 1920,
		'step'						=> 10,
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
	'type' 						=> 'slider',
	'settings'				=> 'header_container',
	'label'						=> esc_html__('Header Container Width (px)', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 1440,
	'choices'					=> array(
		'min'							=> 600,
		'max'							=> 1920,
		'step'						=> 10,
	),
	'output'					=> array(
		array(
			'element'			=> '.header-container',
			'property'		=> 'max-width',
			'units'				=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'portfolio_container',
	'label'						=> esc_html__('Portfolio Container Width (in pixels)', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 300,
	'choices'					=> array(
		'min'							=> 300,
		'max'							=> 600,
		'step'						=> 2,
	),
	'output'					=> array(
		array(
			'element'			=> '#sidebar-portfolio',
			'property'		=> 'max-width',
			'units'				=> 'px',
		),
		array(
			'element'			=> '#sidebar-portfolio-avatar-container',
			'property'		=> 'min-height',
			'units'				=> 'px',
		),
		array(
			'element'				=> '.main-container',
			'value_pattern' => 'calc(100% - $px)',
			'property'			=> 'width',
		),
	),
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'content_container',
	'label'						=> esc_html__('Page/Blog Sidebar Container Width (in %)', 'planeta'),
	'section'					=> 'containers_section',
	'default'					=> 23,
	'choices'					=> array(
		'min'							=> 1,
		'max'							=> 49,
		'step'						=> 1,
	),
	'output'					=> array(
		array(
			'element'				=> '.content-container',
			'property'			=> 'grid-template-columns',
			'value_pattern'	=> '$% auto $%',
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
