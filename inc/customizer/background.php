<?php

Kirki::add_section('global_background', array(
	'title'       => esc_html__('Global Background', 'planeta'),
));

Kirki::add_field('planeta_config', array(
	'type'									=> 'background',
	'label'									=> esc_html__('Background', 'planeta'),
	'section'								=> "global_background",
	'settings'							=> "global_background",
	'default'								=> array(
		'background-color'			=> 'rgba(0, 0, 0, 0)',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-position'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'transport'							=> 'auto',
	'output'								=>	array(
		array(
			'element'								=> 'body',
		)
	),
));

?>
