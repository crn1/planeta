<?php

Kirki::add_section('portfolio_background', array(
	'title'	=> esc_html__('Background', 'planeta'),
	'panel'	=> 'portfolio_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'portfolio_background',
	'label'									=> esc_html__('Background', 'planeta'),
	'section'								=> 'portfolio_background',
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
			'element'								=> '#sidebar-portfolio',
		),
	),
	'active_callback'		=> array(
		array(
			'operator'					=> '==',
			'setting'						=> 'portfolio_enable',
			'value'							=> true,
		),
	),
));

?>
