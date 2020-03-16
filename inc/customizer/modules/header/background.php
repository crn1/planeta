<?php

Kirki::add_section('header_overlay', array(
	'title'       => esc_html__('Overlay Background', 'planeta' ),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'header_overlay',
	'label'									=> esc_html__('Overlay Backround', 'planeta'),
	'section'								=> 'header_overlay',
	'default'     					=> array(
		'background-color'			=> 'rgba(0, 0, 0, 1)',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-position'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'output'								=> array(
		array(
			'element'								=> '#top-menu',
		),
	),
));

?>
