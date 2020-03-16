<?php

Kirki::add_section('header_logo_section', array(
	'title'       => esc_html__('Logo', 'planeta' ),
	'panel'       => 'header_panel'
));

Kirki::add_field('planeta_config', array(
	'type' 					=> 'image',
	'settings'			=> 'logo',
	'label'					=> esc_html__('Logo', 'planeta'),
	'section'				=> 'header_logo_section',
	'default'				=> '',
));

?>
