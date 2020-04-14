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
			'units'					=> 'px',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-left',
			'units'					=> 'px',
		),
		array(
			'element'				=> '#main-header',
			'property'			=> 'padding-right',
			'units'					=> 'px',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-right',
			'units'					=> 'px',
		),
		array(
			'element'				=> '#scroll-top-button',
			'property'			=> 'margin-bottom',
			'units'					=> 'px',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'select',
	'settings'	=> 'navbar_type',
	'label'			=> esc_html__('Navbar Style', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 'down',
	'choices'		=> array(
		'up'				=> esc_html__('Slide Up', 'planeta'),
		'down'			=> esc_html__('Slide Down', 'planeta'),
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
	'type' 			=> 'toggle',
	'settings'	=> 'scroll_top_enable',
	'label'			=> esc_html__('Enable Scroll Top Button', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> true,
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'select',
	'settings'	=> 'scroll_top_icon',
	'label'			=> esc_html__('Scroll Top Icon', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 'simple-up',
	'choices'		=> array(
		'line-block-up'	=> 'line-block-up',
		'simple-up'			=> 'simple-up',
		'thin-up'				=> 'thin-up',
		'block-up'			=> 'block-up',
		'square-up'			=> 'square-up',
		'stylish-up'		=> 'stylish-up',
		'dotted-up'			=> 'dotted-up',
		'hand-up'				=> 'hand-up',
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_top_enable',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
	'partial_refresh'	=> array(
		'scroll_top_button'	=> array(
			'selector'				=> '#scroll-top-button',
			'render_callback'	=> function() {
				$render = get_theme_mod('scroll_top_enable', true);
				$icon_class = get_theme_mod('scroll_top_icon', 'simple-up');
				return "<i class='icofont-${icon_class}'></i>";
			},
		),
	),
));

?>
