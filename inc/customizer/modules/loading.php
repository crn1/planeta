<?php

Kirki::add_section('loading_section', array(
	'title'	=> esc_html__('Loading Page', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'loading_enable',
	'label'			=> esc_html__('Enable Loading Page', 'planeta'),
	'section'		=> 'loading_section',
	'default'		=> false,
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'image',
	'settings'	=> 'loading_image',
	'label'			=> esc_html__('Image/Animation', 'planeta'),
	'section'		=> 'loading_section',
	'default'		=> '',
	'active_callback'	=> array(
		array(
			'setting'			=> 'loading_enable',
			'operator'		=> '==',
			'value'				=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'						=> 'color',
	'settings'				=> 'loading_background',
	'label'						=> esc_html__('Background Color', 'planeta'),
	'section'					=> 'loading_section',
	'default'					=> '#212121',
	'active_callback'	=> array(
		array(
			'setting'					=> 'loading_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
	'output'					=> array(
		array(
			'element'						=> '#loading-container',
			'property'					=> 'background-color',
		),
	),
));

?>
