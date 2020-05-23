<?php

Kirki::add_section('scroll_down_section', array(
	'title'       => esc_html__('Scroll Down Button', 'planeta'),
	'panel'       => 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'toggle',
	'settings'	=> 'scroll_down_enable',
	'label'			=> esc_html__('Enable Scroll Down Icon', 'planeta'),
	'section'		=> 'scroll_down_section',
	'default'		=> true,
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'toggle',
	'settings'	=> 'scroll_down_enable_custom',
	'label'			=> esc_html__('Use Custom Icon', 'planeta'),
	'section'		=> 'scroll_down_section',
	'default'		=> false,
	'active_callback'	=> array(
		array(
			'setting'					=> 'scroll_down_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'select',
	'settings'	=> 'scroll_down_icon',
	'label'			=> esc_html__('Scroll Down Icon', 'planeta'),
	'section'		=> 'scroll_down_section',
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
		'square-down'					=> 'square-down',
		'swoosh-down'					=> 'swoosh-down',
		'thin-down'						=> 'thin-down',
		'stylish-down'				=> 'stylish-down',
		'dotted-down'					=> 'dotted-down',
		'hand-down'						=> 'hand-down',
		'hand-drawn-down'			=> 'hand-drawn-down',
		'custom'							=> esc_html__('Custom Icon', 'planeta'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_down_enable',
			'operator'			=> '===',
			'value'					=> true,
		),
		array(
			'setting'				=> 'scroll_down_enable_custom',
			'operator'			=> '===',
			'value'					=> false,
		),
	),
	'partial_refresh'	=> array(
		'scroll_down_icon'	=> array(
			'selector'				=> '#scroll-down-button',
			'render_callback'	=> function()
			{
				$icon_class = get_theme_mod('scroll_down_icon', 'simple-down');
				$alt = __esc_html('Scroll Down Button Icon', 'planeta');
				return "<i alt='${alt}' class='icofont-${icon_class}'></i>";
			},
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'image',
	'settings'	=> 'scroll_down_custom_icon',
	'label'			=> esc_html__('Scroll Down Custom Icon', 'planeta'),
	'section'		=> 'scroll_down_section',
	'default'		=> '',
	'choices'   => array(
		'save_as' 	=> 'id',
	),
	'partial_refresh'	=> array(
		'scroll_down_custom_icon'	=> array(
			'selector'				=> '#scroll-down-button',
			'render_callback'	=> function()
			{
				$image_id = get_theme_mod('scroll_down_custom_icon', '');
				if(!empty($image_id))
				{
					$image_url = wp_get_attachment_url($image_id);
					$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
					return "<img
						alt='${image_alt}'
						src='${image_url}'
					/>";
				}else{
					$alt = __esc_html('Scroll Down Button Icon', 'planeta');
					return "<i alt='${alt}' class='icofont-simple-up'></i>";
				}
			}
		),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_down_enable',
			'operator'			=> '===',
			'value'					=> true,
		),
		array(
			'setting'				=> 'scroll_down_enable_custom',
			'operator'			=> '===',
			'value'					=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 			=> 'number',
	'settings'	=> 'scroll_down_bottom',
	'label'			=> esc_html__('Scroll Down Icon Spacing', 'planeta'),
	'section'		=> 'scroll_down_section',
	'default'		=> 110,
	'choices'		=> array(
		'min'				=> 0,
		'max'				=> 300,
		'step'			=> 10,
	),
	'transport'	=> 'auto',
	'output'		=> array(
		array(
			'element'				=> '#scroll-down-button',
			'property'			=> 'bottom',
			'value_pattern'	=> 'calc(16px + ($ - 16) * ((100vw - 500px) / 700))',
			'media_query'		=> '@media (min-width: 500px) and (max-width: 1199px)',
		),
		array(
			'element'				=> '#scroll-down-button',
			'property'			=> 'bottom',
			'units'					=> 'px',
			'media_query'		=> '@media (min-width: 1200px)',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'scroll_down_enable',
			'operator'			=> '===',
			'value'					=> true,
		),
	),
));

?>
