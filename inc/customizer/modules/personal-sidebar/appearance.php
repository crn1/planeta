<?php

Kirki::add_section('portfolio_appearance', array(
	'title'	=> esc_html__('Appearance', 'planeta'),
	'panel'	=> 'portfolio_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'portfolio_enable',
	'label'				=> esc_html__('Enable Personal Sidebar', 'planeta'),
	'section'			=> 'portfolio_appearance',
	'default'			=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'portfolio_align',
	'label'				=> esc_html__('Align', 'planeta'),
	'section'			=> 'portfolio_appearance',
	'default'			=> 'left',
	'choices'			=> array(
		'left'				=> esc_html__('Left', 'planeta'),
		'right'				=> esc_html__('Right', 'planeta'),
	),
	'output'			=> array(
		array(
			'element'				=> '#sidebar-portfolio',
			'property'			=> 'float',
		),
		array(
			'element'				=> '#sidebar-portfolio',
			'property'			=> 'left',
			'value_pattern'	=> '0px',
			'exclude'				=> array('right'),
		),
		array(
			'element'				=> '#sidebar-portfolio',
			'property'			=> 'right',
			'value_pattern'	=> '0px',
			'exclude'				=> array('left'),
		),
		array(
			'element'				=> '.main-container',
			'property'			=> 'float',
			'value_pattern'	=> 'left',
			'exclude'				=> array('left'),
		),
		array(
			'element'				=> '.main-container',
			'property'			=> 'float',
			'value_pattern'	=> 'right',
			'exclude'				=> array('right'),
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
	'type' 				=> 'toggle',
	'settings'		=> 'portfolio_header',
	'label'				=> esc_html__('Show Header', 'planeta'),
	'section'			=> 'portfolio_appearance',
	'default'			=> false,
	'active_callback'		=> array(
		array(
			'operator'					=> '==',
			'setting'						=> 'portfolio_enable',
			'value'							=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'portfolio_footer',
	'label'				=> esc_html__('Show Footer', 'planeta'),
	'section'			=> 'portfolio_appearance',
	'default'			=> false,
	'active_callback'		=> array(
		array(
			'operator'					=> '==',
			'setting'						=> 'portfolio_enable',
			'value'							=> true,
		),
	),
));

?>
