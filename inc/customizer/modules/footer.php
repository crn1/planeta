<?php

Kirki::add_section('footer_section', array(
	'title'       => esc_html__('Footer', 'planeta' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'footer_background',
	'label'									=> esc_html__('Backround', 'planeta'),
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
			'element'								=> '#footer',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'textarea',
	'settings'				=> 'footer_copyright',
	'label'						=> esc_html__('Copyright', 'planeta'),
	'section'					=> 'footer_section',
	'default'					=> 'Copyright (C) 2020 Lorem Ipsum. All rights reserved.',
));

?>
