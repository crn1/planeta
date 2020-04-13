<?php

Kirki::add_section('primary_color_section', array(
	'title'	=> esc_html__('Primary Color', 'planeta'),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'color',
	'settings'	=> 'primary_color',
	'label'			=> esc_html__('Primary Color', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> '#FFFFFF',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'output'		=> array(
		array(
			'element'			=> '.material-icons',
			'property'		=> 'color',
		),/*
		array(
			'element' 	=> 'body',
			'property'	=> 'color',
		),
		array(
			'element' 	=> '#top-menu',
			'property' 	=> 'color',
		),*/
	)
));

?>
