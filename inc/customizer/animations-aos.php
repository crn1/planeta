<?php

require_once(get_template_directory() . '/inc/customizer/misc/aos.php');

function planeta_add_animations_aos($section)
{

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
		'type' 						=> 'select',
		'settings'				=> "${section}_easing",
		'section'					=> $section,
		'label'						=> esc_html__('Easing Function', 'planeta'),
		'default'					=> 'linear',
		'choices'					=> array(
			'linear'						=> 'linear',
			'ease'							=> 'ease',
			'ease-in'						=> 'ease-in',
			'ease-out'					=> 'ease-out',
			'ease-in-out'				=> 'ease-in-out',
			'ease-in-back'			=> 'ease-in-back',
			'ease-out-back'			=> 'ease-out-back',
			'ease-in-out-back'	=> 'ease-in-out-back',
			'ease-in-sine'			=> 'ease-in-sine',
			'ease-out-sine'			=> 'ease-out-sine',
			'ease-in-out-sine'	=> 'ease-in-out-sine',
			'ease-in-quad'			=> 'ease-in-quad',
			'ease-out-quad'			=> 'ease-out-quad',
			'ease-in-out-quad'	=> 'ease-in-out-quad',
			'ease-in-cubic'			=> 'ease-in-cubic',
			'ease-out-cubic'		=> 'ease-out-cubic',
			'ease-in-quart'			=> 'ease-in-quart',
			'ease-out-quart'		=> 'ease-out-quart',
			'ease-in-out-quart'	=> 'ease-in-out-quart',
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
		'type' 						=> 'toggle',
		'settings'				=> "${section}_aos_advanced_opt",
		'section'					=> $section,
		'label'						=> esc_html__('Advanced Options', 'planeta'),
		'default'					=> false,
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
			array(
				'setting'				=> "${section}_aos_advanced_opt",
				'operator'			=> '==',
				'value'					=> true,
			),
		),
	));


	Kirki::add_field('planeta_config', array(
		'type' 						=> 'number',
		'settings'				=> "${section}_offset",
		'section'					=> $section,
		'label'						=> esc_html__('Offset', 'planeta'),
		'default'					=> 120,
		'choices'					=> array(
			'min'							=> 0,
			'max'							=> 1280,
			'step'						=> 10,
		),
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
			array(
				'setting'				=> "${section}_aos_advanced_opt",
				'operator'			=> '==',
				'value'					=> true,
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'select',
		'settings'				=> "${section}_anchor",
		'section'					=> $section,
		'label'						=> esc_html__('Anchor Placement', 'planeta'),
		'default'					=> 'top-center',
		'choices'					=> array(
			'top-bottom'			=> esc_html__('Top Bottom', 'planeta'),
			'top-center'			=> esc_html__('Top Center', 'planeta'),
			'top-top'					=> esc_html__('Top Top', 'planeta'),
			'center-bottom'		=> esc_html__('Center Bottom', 'planeta'),
			'center-center'		=> esc_html__('Center Center', 'planeta'),
			'center-top'			=> esc_html__('Center Top', 'planeta'),
			'bottom-bottom'		=> esc_html__('Bottom Bottom', 'planeta'),
			'bottom-center'		=> esc_html__('Bottom Center', 'planeta'),
			'bottom-top'			=> esc_html__('Bottom Top', 'planeta'),
		),
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
			array(
				'setting'				=> "${section}_aos_advanced_opt",
				'operator'			=> '==',
				'value'					=> true,
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'toggle',
		'settings'				=> "${section}_once",
		'section'					=> $section,
		'label'						=> esc_html__('Once', 'planeta'),
		'default'					=> false,
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
			array(
				'setting'				=> "${section}_aos_advanced_opt",
				'operator'			=> '==',
				'value'					=> true,
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type' 						=> 'toggle',
		'settings'				=> "${section}_mirror",
		'section'					=> $section,
		'label'						=> esc_html__('Mirror', 'planeta'),
		'default'					=> false,
		'active_callback' => array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'aos',
			),
			array(
				'setting'				=> "${section}_aos_advanced_opt",
				'operator'			=> '==',
				'value'					=> true,
			),
		),
	));
}

?>
