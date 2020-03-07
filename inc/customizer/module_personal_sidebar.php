<?php

Kirki::add_section('personal_sidebar_section', array(
	'title'	=> esc_html__('Personal Sidebar', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'personal_sidebar_background',
	'label'									=> esc_html__('Background', 'planeta'),
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
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'personal_sidebar_align',
	'label'				=> esc_html__('Align', 'planeta'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 'left',
	'choices'			=> array(
		'left'				=> esc_html__('Left', 'planeta'),
		'right'				=> esc_html__('Right', 'planeta'),
	),
));

?>
