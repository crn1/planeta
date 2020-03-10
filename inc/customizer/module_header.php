<?php

Kirki::add_section('header_section', array(
	'title'       => esc_html__('Header', 'planeta' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'header_sticky',
	'label'				=> esc_html__('Fixed Header', 'planeta'),
	'section'			=> 'header_section',
	'default'			=> false,
	'output'			=> array(
		array(
			'element'				=> '#main-header',
			'property'			=> 'position',
			'value_pattern'	=> 'fixed',
			'exclude'				=> array(false),
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'position',
			'value_pattern'	=> 'static',
			'exclude'				=> array(true),
		),
	)
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'header_background',
	'label'									=> esc_html__('Backround', 'planeta'),
	'section'								=> 'header_section',
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
			'element'								=> '#main-header',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 					=> 'image',
	'settings'			=> 'header_logo',
	'label'					=> esc_html__('Logo', 'planeta'),
	'section'				=> 'header_section',
	'default'				=> '',
));

Kirki::add_field('planeta_config', array(
	'type'							=> 'select',
	'settings'					=> 'header_type',
	'label'							=> esc_html__('Header Type', 'planeta'),
	'section'						=> 'header_section',
	'default'						=> 'header-classic',
	'choices'						=> array(
		'header-classic'		=> esc_html__('Classic (default)', 'planeta'),
		'header-modern'			=> esc_html__('Modern', 'planeta'),
		'header-planeta'		=> esc_html__('Planeta', 'planeta'),
	),
));

?>
