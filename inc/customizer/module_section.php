<?php

require_once(get_template_directory() . '/inc/customizer/misc_animate.php');
require_once(get_template_directory() . '/inc/customizer/misc_lax.php');

Kirki::add_section('frontpage_section', array(
	'title'       => esc_html__('Frontpage Section', 'planeta'),
	'panel'       => 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_title_type',
	'label'						=> esc_html__('Section Title Type', 'planeta'),
	'section'					=> 'frontpage_section',
	'default'					=> 'none',
	'choices'					=> array(
		'none'						=> esc_html__('None', 'planeta'),
		'reveal'					=> esc_html__('Reveal', 'planeta'),
		'scroll'					=> esc_html__('Scroll', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_title_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $animate_css_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_title_effect_scroll',
	'default'				=> 'blurOut',
	'choices'				=> $lax_js_list_labels,
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'scroll'
		),
	),
));

foreach($lax_js_list as $key => $lax_item)
{
	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Effect Strength', 'planeta'),
		'section'				=> 'frontpage_section',
		'settings'			=> 'frontpage_title_strength_' . $key,
		'default'				=> $lax_item['default'],
		'choices'				=> $lax_item['choices'],
		'active_callback'	=> array(
			array(
				'setting'				=> 'frontpage_title_type',
				'operator'			=> '==',
				'value'					=> 'scroll'
			),
			array(
				'setting'				=> 'frontpage_title_effect_scroll',
				'operator'			=> '==',
				'value'					=> $key,
			),
		),
	));
}

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'frontpage_title_timing',
	'label'						=> esc_html__('Timing (in seconds)', 'planeta'),
	'section'					=> 'frontpage_section',
	'default'					=> 1,
	'choices'					=> array(
		'min'							=> 0.1,
		'max'							=> 7,
		'step'						=> 0.1,
	),
	'output'					=> array(
		array(
			'element'					=> '.section-title',
			'property'				=> 'animation-duration',
			'units'						=> 's',
		),
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'slider',
	'label'			=> esc_html__('Section Title Padding Top & Bottom (vh)', 'planeta'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_title_padding',
	'default'		=> 0,
	'choices'		=> array(
		'min'			=> '0',
		'max'			=> '100',
		'step'		=> '1',
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '!=',
			'value'					=> 'scroll',
		),
	),
	'output'		=> array(
		array(
			'element'		=> '.section-title',
			'units'			=> 'vh',
			'property'	=> 'padding-top',
		),
		array(
			'element'		=> '.section-title',
			'units'			=> 'vh',
			'property'	=> 'padding-bottom',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_subtitle_type',
	'label'						=> esc_html__('Section Subtitle Type', 'planeta'),
	'section'					=> 'frontpage_section',
	'default'					=> 'none',
	'choices'					=> array(
		'none'						=> esc_html__('None', 'planeta'),
		'reveal'					=> esc_html__('Reveal', 'planeta'),
		'scroll'					=> esc_html__('Scroll', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_subtitle_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $animate_css_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),

	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_subtitle_effect_scroll',
	'default'				=> 'blurOut',
	'choices'				=> $lax_js_list_labels,
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'scroll'
		),
	),
));

foreach($lax_js_list as $key => $lax_item)
{
	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Effect Strength', 'planeta'),
		'section'				=> 'frontpage_section',
		'settings'			=> 'frontpage_subtitle_strength_' . $key,
		'default'				=> $lax_item['default'],
		'choices'				=> $lax_item['choices'],
		'active_callback'	=> array(
			array(
				'setting'				=> 'frontpage_subtitle_type',
				'operator'			=> '==',
				'value'					=> 'scroll'
			),
			array(
				'setting'				=> 'frontpage_subtitle_effect_scroll',
				'operator'			=> '==',
				'value'					=> $key,
			),
		),
	));
}

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'frontpage_subtitle_timing',
	'label'						=> esc_html__('Timing (in seconds)', 'planeta'),
	'section'					=> 'frontpage_section',
	'default'					=> 1,
	'choices'					=> array(
		'min'							=> 0.1,
		'max'							=> 7,
		'step'						=> 0.1,
	),
	'output'					=> array(
		array(
			'element'					=> '.section-subtitle',
			'property'				=> 'animation-duration',
			'units'						=> 's',
		),
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));


Kirki::add_field('planeta_config', array(
	'type'			=> 'slider',
	'label'			=> esc_html__('Section Subtitle Padding Bottom (vh)', 'planeta'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_subtitle_padding',
	'default'		=> 15,
	'choices'		=> array(
		'min'			=> '0',
		'max'			=> '100',
		'step'		=> '1',
	),
	'output'		=> array(
		array(
			'element'		=> '.section-subtitle',
			'units'			=> 'vh',
			'property'	=> 'padding-bottom',
		),
	),
));

?>