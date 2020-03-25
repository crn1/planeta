<?php

require_once(get_template_directory() . '/inc/customizer/misc/aos.php');
require_once(get_template_directory() . '/inc/customizer/misc/lax.php');

function planeta_add_animations($section, $title, $panel)
{
	$section = $section . '_anims';

	Kirki::add_section($section, array(
		'title'       => esc_html__($title, 'planeta'),
		'panel'       => $panel,
	));

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'radio-buttonset',
		'settings'				=> "${section}_trigger",
		'section'					=> $section,
		'label'						=> esc_html__('Trigger Type', 'planeta'),
		'default'					=> 'none',
		'choices'					=> array(
			'none'						=> esc_html__('None', 'planeta'),
			'aos'							=> esc_html__('Reveal', 'planeta'),
			'lax'							=> esc_html__('Scroll', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'select',
		'label'					=> esc_html__('Animation Type', 'planeta'),
		'settings'			=> "${section}_aos_type",
		'section'				=> $section,
		'default'				=> 'fade-in',
		'choices'				=> AOS_LIST,
		'active_callback'	=> array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos'
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'select',
		'label'					=> esc_html__('Animation Type', 'planeta'),
		'settings'			=> "${section}_lax_type",
		'section'				=> $section,
		'default'				=> 'blurOut',
		'choices'				=> LAX_LABELS,
		'active_callback'	=> array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'lax'
			),
		),
	));

	foreach(LAX_LIST as $key => $lax_item)
	{
		Kirki::add_field('planeta_config', array(
			'type'					=> 'slider',
			'label'					=> esc_html__('Effect Strength', 'planeta'),
			'settings'			=> "${section}_strength_${key}",
			'section'				=> $section,
			'default'				=> $lax_item['default'],
			'choices'				=> $lax_item['choices'],
			'active_callback'	=> array(
				array(
					'setting'				=> "${section}_trigger",
					'operator'			=> '==',
					'value'					=> 'lax'
				),
				array(
					'setting'				=> "${section}_lax_type",
					'operator'			=> '==',
					'value'					=> $key,
				),
			),
		));
	}

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'slider',
		'settings'				=> "${section}_duration",
		'section'					=> $section,
		'label'						=> esc_html__('Duration (milliseconds)', 'planeta'),
		'default'					=> 400,
		'choices'					=> array(
			'min'							=> 50,
			'max'							=> 3000,
			'step'						=> 50,
		),
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'slider',
		'settings'				=> "${section}_delay",
		'section'					=> $section,
		'label'						=> esc_html__('Delay (milliseconds)', 'planeta'),
		'default'					=> 0,
		'choices'					=> array(
			'min'							=> 0,
			'max'							=> 3000,
			'step'						=> 50,
		),
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'select',
		'settings'				=> "${section}_easing",
		'section'					=> $section,
		'label'						=> esc_html__('Easing Function', 'planeta'),
		'default'					=> 'linear',
		'choices'					=> array(
			'linear'					=> esc_html__('Linear (default)', 'planeta'),
		),
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
		),
	));

	//todo in future: AOS mirroring and once
}

?>
