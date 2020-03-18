<?php

require_once(get_template_directory() . '/inc/customizer/misc/aos.php');
require_once(get_template_directory() . '/inc/customizer/misc/lax.php');

function planeta_add_animations($section, $section_title, &$aos_list, &$lax_labels, &$lax_list)
{
	$section = $section . '_anims';

	Kirki::add_section($section, array(
		'title'       => esc_html__($section_title, 'planeta'),
		'panel'       => 'animations_panel',
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
		'choices'				=> $aos_list,
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
		'choices'				=> $lax_labels,
		'active_callback'	=> array(
			array(
				'setting'				=> "${section}_trigger",
				'operator'			=> '==',
				'value'					=> 'lax'
			),
		),
	));

	foreach($lax_list as $key => $lax_item)
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
		'settings'				=> "${section}_strength_${key}",
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
}

Kirki::add_panel('animations_panel', array(
	'title'       => esc_html__('Animations', 'planeta'),
	'panel'       => 'theme_options_panel',
));

planeta_add_animations('section_title', 'Section Title', $aos_list, $lax_list, $lax_labels);
planeta_add_animations('section_subtitle', 'Section Subtitle', $aos_list, $lax_list, $lax_labels);
planeta_add_animations('cards', 'Cards', $aos_list, $lax_list, $lax_labels);

?>
