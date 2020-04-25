<?php

Kirki::add_section("menu_background", array(
	'title' => esc_html__('Menu Background', 'planeta'),
	'panel' => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type'									=> 'background',
	'label'									=> esc_html__('Background', 'planeta'),
	'section'								=> "menu_background",
	'settings'							=> "menu_background",
	'default'								=> array(
		'default'								=> 'rgba(0, 0, 0, 0)',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-positio'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'transport'							=> 'auto',
	'output'								=>	array(
		array(
			'element'								=> '#top-menu',
		)
	),
));

?>
