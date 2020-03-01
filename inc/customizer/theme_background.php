<?php

Kirki::add_section('global_background_section', array(
	'title'       => esc_html__('Global Background', 'kirki' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 									=> 'background',
	'settings'							=> 'global_background',
	'label'									=> esc_html__('Global Backround', 'kirki'),
	'section'								=> 'global_background_section',
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
			'element'								=> 'body',
			'property'							=> 'background',
		),
	),
));

?>
