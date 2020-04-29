<?php

Kirki::add_section('header_appearance', array(
	'title'       => esc_html__('Appearance', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'navbar_padding',
	'label'				=> esc_html__('Padding', 'planeta'),
	'section'			=> 'header_appearance',
	'default'			=> 48,
	'choices'			=> array(
		'min'					=> 16,
		'max'					=> 128,
		'step'				=> 2,
	),
	'transport'		=> 'auto',
	'output'			=> array(
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-top',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-top',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-bottom',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-left',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-left',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-right',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-right',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-right',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-right',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-bottom',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 600px) / 600))',
			'media_query'		=> '@media (min-width: 600px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'select',
	'settings'	=> 'navbar_type',
	'label'			=> esc_html__('Navbar Style', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 'top',
	'choices'		=> array(
		'top'				=> esc_html__('Slide Top', 'planeta'),
		'bottom'		=> esc_html__('Slide Bottom', 'planeta'),
		'left'			=> esc_html__('Slide Left', 'planeta'),
		'right'			=> esc_html__('Slide Right', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'navbar_reverse',
	'label'			=> esc_html__('Reverse Logo & Menu Button', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> false,
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'navbar_reverse',
	'label'			=> esc_html__('Reverse Logo & Menu Button', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> false,
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'header_sensitive_frontpage',
	'label'			=> esc_html__('Sensitive Colors on Frontpage', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> false,
	'transport'	=> 'auto',
	'output'		=> array(
		array(
			'element'				=> array(
				'body.home #main-header',
				'body.home #scroll-top-button',
				'body.home #scroll-down-button',
			),
			'property'			=> 'mix-blend-mode',
			'value_pattern'	=> 'difference',
			'exclude'				=> array(false),
		),
		array(
			'element'				=> array(
				'body.home #main-header',
				'body.home #scroll-top-button',
				'body.home #scroll-down-button',
			),
			'property'			=> 'mix-blend-mode',
			'value_pattern'	=> 'unset',
			'exclude'				=> array(true),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'header_sensitive_other_pages',
	'label'			=> esc_html__('Sensitive Colors on Other Pages', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> false,
	'transport'	=> 'auto',
	'output'		=> array(
		array(
			'element'				=> array(
				'body:not(.home) #main-header',
				'body:not(.home) #scroll-top-button',
				'body:not(.home) #scroll-down-button',
			),
			'property'			=> 'mix-blend-mode',
			'value_pattern'	=> 'difference',
			'exclude'				=> array(false),
		),
		array(
			'element'				=> array(
				'body:not(.home) #main-header',
				'body:not(.home) #scroll-top-button',
				'body:not(.home) #scroll-down-button',
			),
			'property'			=> 'mix-blend-mode',
			'value_pattern'	=> 'unset',
			'exclude'				=> array(true),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'header_colors_inherit',
	'label'			=> esc_html__('Inherit Colors from Main Typography', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> true,
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'color',
	'settings'	=> 'header_colors',
	'label'			=> esc_html__('Color', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> '#000000',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'header_colors_inherit',
			'operator'				=> '==',
			'value'						=> false,
		),
	),
	'output'		=> array(
		array(
			'element'				=> array(
				'.hamburger-inner',
				'.hamburger-inner:before',
				'.hamburger-inner:after',
			),
			'property'			=> 'background-color',
		),
		array(
			'element'				=> array(
				'#scroll-top-button',
				'#scroll-down-button',
			),
			'property'			=> 'color',
		),
	),
));

?>
