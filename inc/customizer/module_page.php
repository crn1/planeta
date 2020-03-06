<?php

Kirki::add_section('page_section', array(
	'title'	=> esc_html__('Page', 'kirki'),
	'panel'	=> 'modules_panel',
));

/*Kirki::add_field('kirki_config', array(
	'type' 						=> 'select',
	'settings'				=> 'page_scrollbar_type',
	'label'						=> esc_html__('Scrollbar Type', 'kirki'),
	'section'					=> 'page_section',
	'default'					=> 'system',
	'choices'					=> array(
		'system'						=> esc_html__('System (default)', 'kirki'),
	),
));*/

Kirki::add_field('kirki_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'page_title_is_fullscreen',
	'label'						=> esc_html__('Fullscreen Title', 'kirki'),
	'section'					=> 'page_section',
	'default'					=> 1,
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'page_padding_down',
	'label'						=> esc_html__('Padding Down', 'kirki'),
	'section'					=> 'page_section',
	'default'					=> 0,
	'choices'					=> array(
		'min'							=> 12,
		'max'							=> 100,
		'step'						=> 1,
	),
	'active_callback' => array(
		array(
			'setting'					=> 'page_title_is_fullscreen',
			'operator'				=> '==',
			'value'						=> '0',
		),
	),
));

?>
