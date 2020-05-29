<?php

Kirki::add_section('excerpt_section', array(
	'title'			=> esc_html__('Excerpt', 'planeta'),
	'panel'			=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'slider',
	'settings'	=> 'excerpt_length',
	'label'			=> esc_html__('Length', 'planeta'),
	'section'		=> 'excerpt_section',
	'default'		=> 25,
	'choices'		=> array(
		'min'				=> 0,
		'max'				=> 100,
		'step'			=> 1,
	),
));

?>
