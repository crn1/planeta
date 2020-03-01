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
));

?>
