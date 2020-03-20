<?php

Kirki::add_section('header_appearance', array(
	'title'       => esc_html__('Appearance', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'show_sections_nav',
	'label'				=> esc_html__('Show Section Menu', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'navbar_sticky',
	'label'				=> esc_html__('Sticky Navbar', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> false,
	'output'			=> array(
		array(
			'element'				=> '.header-container',
			'property'			=> 'position',
			'value_pattern'	=> 'fixed',
			'exclude'				=> array(false),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'radio-buttonset',
	'settings'	=> 'navbar_type',
	'label'			=> esc_html__('Navbar Direction', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 'down',
	'choices'		=> array(
		'up'				=> esc_html__('Up', 'planeta'),
		'down'			=> esc_html__('Down', 'planeta'),
		'left'			=> esc_html__('Left', 'planeta'),
		'right'			=> esc_html__('Right', 'planeta'),
	),
));

?>
