<?php

Kirki::add_section('personal_sidebar_section', array(
	'title'	=> esc_html__('Personal Sidebar', 'kirki'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'enable_personal_sidebar',
	'label'				=> esc_html__('Enable Personal Sidebar', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 0,
));

Kirki::add_field('kirki_config', array(
	'type' 									=> 'background',
	'settings'							=> 'personal_sidebar_background',
	'label'									=> esc_html__('Background', 'kirki'),
	'section'								=> 'personal_sidebar_section',
	'default'     					=> array(
		'background-color'			=> '#212121',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-position'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'output'								=> array(
		array(
			'element'								=> '.personal-sidebar-background',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'personal_sidebar_align',
	'label'				=> esc_html__('Align', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 'left',
	'choices'			=> array(
		'left'				=> esc_html__('Left', 'kirki'),
		'right'				=> esc_html__('Right', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
	),
));

?>
