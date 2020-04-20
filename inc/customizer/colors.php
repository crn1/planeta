<?php

Kirki::add_section('primary_color_section', array(
	'title'	=> esc_html__('Primary Color', 'planeta'),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_enable',
	'label'			=> esc_html__('Enable Primary Color', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> false,
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'color',
	'settings'	=> 'primary_color',
	'label'			=> esc_html__('Primary Color', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> '#000000',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_menu_button',
	'label'			=> esc_html__('Enable on Menu Button', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'#menu-button > .hamburger-box > .hamburger-inner:before',
				'#menu-button > .hamburger-box > .hamburger-inner',
				'#menu-button > .hamburger-box > .hamburger-inner:after',
			),
			'property'				=> 'background-color',
			'value_pattern' 	=> 'primary_color !important',
			'exclude'					=> array(false),
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_scroll_top',
	'label'			=> esc_html__('Enable on Scroll Top Button', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'#scroll-top-button',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'exclude'					=> array(false),
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_scroll_down',
	'label'			=> esc_html__('Enable on Scroll Down Button', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'#scroll-down-button',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'exclude'					=> array(false),
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_links_hover',
	'label'			=> esc_html__('Enable on Links', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'body > *:not(#wpadminbar) a:not(.button-link)',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_button_links_hover',
	'label'			=> esc_html__('Enable on Button Links (on Hover)', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'.button-link:hover',
				'.button-link:hover::before',
				'.button-link:hover::after',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				'.button-link:hover::before',
				'.button-link:hover::after',
			),
			'property'				=> 'border-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				'.button-link:hover::before',
				'.button-link:hover::after',
			),
			'property'				=> 'background-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_forms',
	'label'			=> esc_html__('Enable on Forms', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				"body > *:not(#wpadminbar) form input[type='text']:hover",
				"body > *:not(#wpadminbar) form textarea:hover",
				'body > *:not(#wpadminbar) #search-form:hover',
			),
			'property'				=> 'border-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				"body > *:not(#wpadminbar) form input[type='submit']:hover",
				'#protected-post-form:hover button',
				'body > *:not(#wpadminbar) #search-form:hover button',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
	),
));

?>
