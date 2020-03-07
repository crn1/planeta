<?php

Kirki::add_section('module_header_section', array(
	'title'       => esc_html__('Header', 'planeta' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'header_is_sticky',
	'label'				=> esc_html__('Sticky Header', 'planeta'),
	'section'			=> 'module_header_section',
	'default'			=> '1',
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'header_background',
	'label'									=> esc_html__('Backround', 'planeta'),
	'section'								=> 'module_header_section',
	'default'     					=> array(
		'background-color'			=> 'rgba(0, 0, 0, 0)',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-position'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'output'								=> array(
		array(
			'element'								=> '.header-background',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'sortable',
	'settings'		=> 'header_main_layout',
	'label'				=> esc_html__('Main Layout', 'planeta'),
	'section'			=> 'module_header_section',
	'default'			=> array(
		'logo',
		'menu',
	),
	'choices'			=> array(
		'logo'				=> esc_html__('Logo/Title', 'planeta'),
		'menu'				=> esc_html__('Menu', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'header_extended_menu',
	'label'						=> esc_html__('Extended Menu', 'planeta'),
	'section'					=> 'module_header_section',
	'default'					=> '0',
	'active_callback'	=> array(
		array(
			'setting'				=> 'header_main_layout',
			'operator'			=> 'contains',
			'value'					=> 'menu',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'image',
	'settings'				=> 'header_logo',
	'label'						=> esc_html__('Logo', 'planeta'),
	'section'					=> 'module_header_section',
	'default'					=> '',
	'active_callback'	=> array(
		array(
			'setting'				=> 'header_main_layout',
			'operator'			=> 'contains',
			'value'					=> 'logo',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'sortable',
	'settings'		=> 'header_logo_layout',
	'label'				=> esc_html__('Logo/Title Layout', 'planeta'),
	'section'			=> 'module_header_section',
	'default'			=> array(
		'logo',
		'title',
	),
	'choices'			=> array(
		'logo'				=> esc_html__('Logo', 'planeta'),
		'title'				=> esc_html__('Title', 'planeta'),
		'tagline'			=> esc_html__('Tagline', 'planeta'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'header_main_layout',
			'operator'			=> 'contains',
			'value'					=> 'logo',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'radio-buttonset',
	'settings'		=> 'header_logo_direction',
	'label'				=> esc_html__('Logo/Title Direction', 'planeta'),
	'section'			=> 'module_header_section',
	'default'			=> 'horizontal',
	'choices'			=> array(
		'horizontal'	=> esc_html__('Horizontal', 'planeta'),
		'vertical'		=> esc_html__('Vertical', 'planeta'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'header_main_layout',
			'operator'			=> 'contains',
			'value'					=> 'logo',
		),
	),
));

?>
