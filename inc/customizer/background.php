<?php
	Kirki::add_field('planeta_config', array(
		'type'									=> 'background',
		'label'									=> esc_html__('Background', 'planeta'),
		'section'								=> "global_background",
		'settings'							=> "global_background",
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
				'element'								=> 'body',
			)
		),
	));
?>
