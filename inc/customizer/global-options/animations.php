<?php

require_once(get_template_directory() . '/inc/customizer/misc/aos.php');
require_once(get_template_directory() . '/inc/customizer/misc/lax.php');

Kirki::add_section('animations_section', array(
	'title'       => esc_html__('Animations', 'planeta'),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'animations_title_type',
	'label'						=> esc_html__('Section Title Type', 'planeta'),
	'section'					=> 'animations_section',
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
	'section'				=> 'animations_section',
	'settings'			=> 'animations_title_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $aos_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'animations_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'animations_section',
	'settings'			=> 'animations_title_effect_scroll',
	'default'				=> 'blurOut',
	'choices'				=> $lax_js_list_labels,
	'active_callback'	=> array(
		array(
			'setting'				=> 'animations_title_type',
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
		'section'				=> 'animations_section',
		'settings'			=> 'animations_title_strength_' . $key,
		'default'				=> $lax_item['default'],
		'choices'				=> $lax_item['choices'],
		'active_callback'	=> array(
			array(
				'setting'				=> 'animations_title_type',
				'operator'			=> '==',
				'value'					=> 'scroll'
			),
			array(
				'setting'				=> 'animations_title_effect_scroll',
				'operator'			=> '==',
				'value'					=> $key,
			),
		),
	));
}

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'animations_title_duration',
	'label'						=> esc_html__('Duration (milliseconds)', 'planeta'),
	'section'					=> 'animations_section',
	'default'					=> 400,
	'choices'					=> array(
		'min'							=> 50,
		'max'							=> 3000,
		'step'						=> 50,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'animations_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'animations_subtitle_type',
	'label'						=> esc_html__('Section Subtitle Type', 'planeta'),
	'section'					=> 'animations_section',
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
	'section'				=> 'animations_section',
	'settings'			=> 'animations_subtitle_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $aos_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'animations_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),

	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'animations_section',
	'settings'			=> 'animations_subtitle_effect_scroll',
	'default'				=> 'blurOut',
	'choices'				=> $lax_js_list_labels,
	'active_callback'	=> array(
		array(
			'setting'				=> 'animations_subtitle_type',
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
		'section'				=> 'animations_section',
		'settings'			=> 'animations_subtitle_strength_' . $key,
		'default'				=> $lax_item['default'],
		'choices'				=> $lax_item['choices'],
		'active_callback'	=> array(
			array(
				'setting'				=> 'animations_subtitle_type',
				'operator'			=> '==',
				'value'					=> 'scroll'
			),
			array(
				'setting'				=> 'animations_subtitle_effect_scroll',
				'operator'			=> '==',
				'value'					=> $key,
			),
		),
	));
}

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'animations_subtitle_duration',
	'label'						=> esc_html__('Duration (milliseconds)', 'planeta'),
	'section'					=> 'animations_section',
	'default'					=> 400,
	'choices'					=> array(
		'min'							=> 50,
		'max'							=> 3000,
		'step'						=> 50,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'animations_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'animations_card_type',
	'label'						=> esc_html__('Card Type', 'planeta'),
	'section'					=> 'animations_section',
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
	'section'				=> 'animations_section',
	'settings'			=> 'animations_card_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $aos_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'animations_card_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'planeta'),
	'section'				=> 'animations_section',
	'settings'			=> 'animations_card_effect_scroll',
	'default'				=> 'blurOut',
	'choices'				=> $lax_js_list_labels,
	'active_callback'	=> array(
		array(
			'setting'				=> 'animations_card_type',
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
		'section'				=> 'animations_section',
		'settings'			=> 'animations_card_strength_' . $key,
		'default'				=> $lax_item['default'],
		'choices'				=> $lax_item['choices'],
		'active_callback'	=> array(
			array(
				'setting'				=> 'animations_card_type',
				'operator'			=> '==',
				'value'					=> 'scroll'
			),
			array(
				'setting'				=> 'animations_card_effect_scroll',
				'operator'			=> '==',
				'value'					=> $key,
			),
		),
	));
}

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'animations_card_duration',
	'label'						=> esc_html__('Duration (milliseconds)', 'planeta'),
	'section'					=> 'animations_section',
	'default'					=> 400,
	'choices'					=> array(
		'min'							=> 50,
		'max'							=> 3000,
		'step'						=> 50,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'animations_card_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

?>
