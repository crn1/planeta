<?php

Kirki::add_section('portfolio_avatar', array(
	'title'	=> esc_html__('Avatar', 'planeta'),
	'panel'	=> 'portfolio_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'image',
	'settings'		=> 'portfolio_avatar',
	'label'				=> esc_html__('Image (Avatar)', 'planeta'),
	'section'			=> 'portfolio_avatar',
	'default'			=> '',
	'active_callback'		=> array(
		array(
			'operator'					=> '==',
			'setting'						=> 'portfolio_enable',
			'value'							=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'portfolio_avatar_width',
	'label'				=> esc_html__('Avatar Padding (in px)', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> 15,
	'choices'			=> array(
		'min'					=> 0,
		'max'					=> 100,
		'step'				=> 1,
	),
	'output'			=> array(
		array(
			'element'			=> '#sidebar-portfolio-avatar',
			'property'		=> 'padding',
			'units'				=> 'px',
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

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'portfolio_avatar_radius',
	'label'				=> esc_html__('Avatar Border Radius (in %)', 'planeta'),
	'section'			=> 'portfolio_avatar',
	'default'			=> 50,
	'choices'			=> array(
		'min'					=> 0,
		'max'					=> 50,
		'step'				=> 1,
	),
	'output'			=> array(
		array(
			'element'			=> '#sidebar-portfolio-avatar',
			'property'		=> 'border-radius',
			'units'				=> '%',
		)
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
