<?php

Kirki::add_section('footer_section', array(
	'title'       => esc_html__('Footer', 'kirki' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 									=> 'background',
	'settings'							=> 'footer_background',
	'label'									=> esc_html__('Backround', 'kirki'),
	'section'								=> 'footer_section',
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
			'element'								=> '.footer-background',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'sortable',
	'settings'		=> 'footer_main_layout',
	'label'				=> esc_html__('Layout', 'kirki'),
	'section'			=> 'footer_section',
	'default'			=> array(
		'widgets',
		'menu',
		'copyright'
	),
	'choices'			=> array(
		'widgets'			=> esc_html__('Widgets', 'kirki'),
		'menu'				=> esc_html__('Menu', 'kirki'),
		'copyright'		=> esc_html__('Copyright', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'editor',
	'settings'				=> 'footer_copyright',
	'label'						=> esc_html__('Copyright', 'kirki'),
	'section'					=> 'footer_section',
	'default'					=> 'Copyright (C) 2020 Lorem Ipsum. All rights reserved.',
	'active_callback' => array(
		array(
			'setting'					=> 'footer_main_layout',
			'operator'				=> 'contains',
			'value'						=> 'copyright',
		),
	),
));

?>
