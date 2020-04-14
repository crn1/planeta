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
		'block-up'					=> 'block-up',
		'bubble-up'					=> 'bubble-up',
		'caret-up'					=> 'caret-up',
		'circled-up'				=> 'circled-up',
		'curved-up'					=> 'curved-up',
		'dotted-up'					=> 'dotted-up',
		'hand-drawn-up'			=> 'hand-drawn-up',
		'hand-drawn-alt-up'	=> 'hand-drawn-alt-up',
		'line-block-up'			=> 'line-block-up',
		'rounded-up'				=> 'rounded-up',
		'simple-up'					=> 'simple-up',
		'square-up'					=> 'square-up',
		'swoosh-up'					=> 'swoosh-up',
		'thin-up'						=> 'thin-up',
		'stylish-up'				=> 'stylish-up',
		'dotted-up'					=> 'dotted-up',
		'hand-up'						=> 'hand-up',
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
				if($render)
				{
					$icon_class = get_theme_mod('scroll_top_icon', 'simple-up');
					return "<i class='icofont-${icon_class}'></i>";
				}else{
					return "";
				}
			},
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'toggle',
	'settings'	=> 'scroll_down_enable',
	'label'			=> esc_html__('Enable Scroll Down Icon', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> true,
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'select',
	'settings'	=> 'scroll_down_icon',
	'label'			=> esc_html__('Scroll Down Icon', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 'simple-down',
	'choices'		=> array(
		'arrow-down'					=> 'arrow-down',
		'block-down'					=> 'block-down',
		'bubble-down'					=> 'bubble-down',
		'caret-down'					=> 'caret-down',
		'circled-down'				=> 'circled-down',
		'curved-down'					=> 'curved-down',
		'dotted-down'					=> 'dotted-down',
		'line-block-down'			=> 'line-block-down',
		'rounded-down'				=> 'rounded-down',
		'simple-down'					=> 'simple-down',
		'scroll-down'					=> 'scroll-down',
		'scroll-bubble-down'	=> 'scroll-bubble-down',
		'scroll-double-down'	=> 'scroll-double-down',
		'square-down'					=> 'square-down',
		'swoosh-down'					=> 'swoosh-down',
		'thin-down'						=> 'thin-down',
		'stylish-down'				=> 'stylish-down',
		'dotted-down'					=> 'dotted-down',
		'hand-down'						=> 'hand-down',
		'hand-drawn-down'			=> 'hand-drawn-down',
		'hand-drawn-alt-down'	=> 'hand-drawn-alt-down',
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_down_enable',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
	'partial_refresh'	=> array(
		'scroll_down_button'	=> array(
			'selector'				=> '#scroll-down-button',
			'render_callback'	=> function()
			{
				$render = get_theme_mod('scroll_down_enable', true);
				if($render) {
					$icon_class = get_theme_mod('scroll_down_icon', 'simple-down');
					return "<i class='icofont-${icon_class}'></i>";
				}else{
					return "";
				}
			},
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'slider',
	'settings'	=> 'scroll_down_bottom',
	'label'			=> esc_html__('Scroll Down Icon Spacing', 'planeta'),
	'section'		=> 'header_appearance',
	'default'		=> 32,
	'choices'		=> array(
		'min'				=> 0,
		'max'				=> 100,
		'step'			=> 1,
	),
	'transport'	=> 'auto',
	'output'		=> array(
		array(
			'element'				=> '#scroll-down-button',
			'property'			=> 'bottom',
			'units'					=> 'px',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_down_enable',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
));

?>
