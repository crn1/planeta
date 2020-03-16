<?php

Kirki::add_section('portfolio_section', array(
	'title'	=> esc_html__('Personal Sidebar', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'portfolio_enable',
	'label'				=> esc_html__('Enable Personal Sidebar', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 									=> 'background',
	'settings'							=> 'portfolio_background',
	'label'									=> esc_html__('Background', 'planeta'),
	'section'								=> 'portfolio_section',
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
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'portfolio_align',
	'label'				=> esc_html__('Align', 'planeta'),
	'section'			=> 'portfolio_section',
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
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'image',
	'settings'		=> 'portfolio_avatar',
	'label'				=> esc_html__('Image (Avatar)', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> '',
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		)
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
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'portfolio_avatar_radius',
	'label'				=> esc_html__('Avatar Border Radius (in %)', 'planeta'),
	'section'			=> 'portfolio_section',
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
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'text',
	'settings'		=> 'portfolio_name',
	'label'				=> esc_html__('Name', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> 'John Doe',
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'text',
	'settings'		=> 'portfolio_profession',
	'label'				=> esc_html__('Profession/Occupation', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> 'Frontend Developer',
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'portfolio_header',
	'label'				=> esc_html__('Show Header', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> false,
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'portfolio_footer',
	'label'				=> esc_html__('Show Footer', 'planeta'),
	'section'			=> 'portfolio_section',
	'default'			=> false,
	'active_callback'				=> array(
		array(
			'setting'								=> 'portfolio_enable',
			'operator'							=> '==',
			'value'									=> true,
		),
	),
));

?>
