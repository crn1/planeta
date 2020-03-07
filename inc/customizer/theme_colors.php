<?php

Kirki::add_section('colors_section', array(
	'title'	=> esc_html__('Colors', 'kirki'),
	'panel'	=> 'theme_options_panel',
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'color',
	'settings'	=> 'colors_primary',
	'label'			=> esc_html__('Primary', 'kirki'),
	'section'		=> 'colors_section',
	'default'		=> '#D50000',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'output'		=> array(
		array(
			'element' 	=> '#menu-button',
			'property' 	=> 'background-color',
		),
		array(
			'element' 	=> 'a',
			'property' 	=> 'color',
		),
	)
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'color',
	'settings'	=> 'colors_border',
	'label'			=> esc_html__('Border/Seperator', 'kirki'),
	'section'		=> 'colors_section',
	'default'		=> '#616161',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'output'		=> array(
	)
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'color',
	'settings'	=> 'colors_text',
	'label'			=> esc_html__('Text', 'kirki'),
	'section'		=> 'colors_section',
	'default'		=> '#FFFFFF',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'output'		=> array(
		array(
			'element'			=> '.material-icons',
			'property'		=> 'color',
		),
		array(
			'element' 	=> 'body',
			'property'	=> 'color',
		),
		array(
			'element' 	=> '#top-menu',
			'property' 	=> 'color',
		),
	)
));

?>
