<?php

Kirki::add_section('scroll_top_section', array(
	'title'       => esc_html__('Scroll Top Button', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'toggle',
	'settings'	=> 'scroll_top_enable',
	'label'			=> esc_html__('Enable Scroll Top Button', 'planeta'),
	'section'		=> 'scroll_top_section',
	'default'		=> true,
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'toggle',
	'settings'	=> 'scroll_top_enable_custom',
	'label'			=> esc_html__('Use Custom Icon', 'planeta'),
	'section'		=> 'scroll_top_section',
	'default'		=> false,
	'active_callback'	=> array(
		array(
			'setting'					=> 'scroll_top_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'select',
	'settings'	=> 'scroll_top_icon',
	'label'			=> esc_html__('Icon', 'planeta'),
	'section'		=> 'scroll_top_section',
	'default'		=> 'simple-up',
	'choices'		=> array(
		'block-up'					=> 'block-up',
		'bubble-up'					=> 'bubble-up',
		'caret-up'					=> 'caret-up',
		'circled-up'				=> 'circled-up',
		'curved-up'					=> 'curved-up',
		'dotted-up'					=> 'dotted-up',
		'hand-drawn-up'			=> 'hand-drawn-up',
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
			'setting'					=> 'scroll_top_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
		array(
			'setting'					=> 'scroll_top_enable_custom',
			'operator'				=> '===',
			'value'						=> false,
		),
	),
	'partial_refresh'	=> array(
		'scroll_top_icon'	=> array(
			'selector'				=> '#scroll-top-button',
			'render_callback'	=> function()
			{
				$icon_class = get_theme_mod('scroll_top_icon', 'simple-up');
				$alt = __esc_html('Scroll Top Button Icon', 'planeta');
				return "<i alt='${alt}' class='icofont-${icon_class}'></i>";
			},
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'image',
	'settings'	=> 'scroll_top_custom_icon',
	'label'			=> esc_html__('Custom Icon', 'planeta'),
	'section'		=> 'scroll_top_section',
	'default'		=> '',
	'choices'   => array(
		'save_as' 	=> 'id',
	),
	'partial_refresh'	=> array(
		'scroll_top_custom_icon'				=> array(
			'selector'				=> '#scroll-top-button',
			'render_callback'	=> function()
			{
				$image_id = get_theme_mod('scroll_top_custom_icon', '');
				if(!empty($image_id))
				{
					$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
					$image_url = wp_get_attachment_url($image_id);
					return "<img
						alt='${image_alt}'
						src='${image_url}'
					/>";
				}else{
					$alt = esc_html__('Scroll Top Button Icon', 'planeta');
					return "<i alt='${alt}' class='icofont-simple-up'></i>";
				}
			}
		),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_top_enable',
			'operator'			=> '===',
			'value'					=> true,
		),
		array(
			'setting'				=> 'scroll_top_enable_custom',
			'operator'			=> '===',
			'value'					=> true,
		),
	),
));

?>
