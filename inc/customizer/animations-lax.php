<?php

require_once(get_template_directory() . '/inc/customizer/animations-lax-list.php');

function planeta_add_animations_lax($section)
{
	for($i = 1; $i <= 3; $i++)
	{
		Kirki::add_field('planeta_config', array(
			'type'					=> 'select',
			'label'					=> esc_html__("Animation #${i}", 'planeta'),
			'settings'			=> "${section}_lax_type_${i}",
			'section'				=> $section,
			'default'				=> 'none',
			'choices'				=> array(
				'none'				=> esc_html__('None (default)', 'planeta'),
				'linger'			=> esc_html__('Linger', 'planeta'),
				'lazy'				=> esc_html__('Lazy', 'planeta'),
				'eager'				=> esc_html__('Eager', 'planeta'),
				'slalom'			=> esc_html__('Slalom', 'planeta'),
				'spin'				=> esc_html__('Spin', 'planeta'),
				'spinRev'			=> esc_html__('Spin Reversed', 'planeta'),
				'spinIn'			=> esc_html__('Spin In', 'planeta'),
				'spinOut'			=> esc_html__('Spin Out', 'planeta'),
				'blurInOut'		=> esc_html__('Blur In & Out', 'planeta'),
				'blurIn'			=> esc_html__('Blur In', 'planeta'),
				'blurOut'			=> esc_html__('Blur Out', 'planeta'),
				'fadeInOut'		=> esc_html__('Fade In & Out', 'planeta'),
				'fadeIn'			=> esc_html__('Fade In', 'planeta'),
				'fadeOut'			=> esc_html__('Fade Out', 'planeta'),
				'driftLeft'		=> esc_html__('Drift Left', 'planeta'),
				'driftRight'	=> esc_html__('Drift Right', 'planeta'),
				'leftToRight'	=> esc_html__('Left to Right', 'planeta'),
				'rightToLeft'	=> esc_html__('Right to Left', 'planeta'),
				'zoomInOut'		=> esc_html__('Zoom In & Out', 'planeta'),
				'zoomIn'			=> esc_html__('Zoom In', 'planeta'),
				'zoomOut'			=> esc_html__('Zoom Out', 'planeta'),
				'swing'				=> esc_html__('Swing', 'planeta'),
				'speedy'			=> esc_html__('Speedy', 'planeta'),
			),
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
				'label'					=> esc_html__("Effect Strength #${i}", 'planeta'),
				'settings'			=> "${section}_strength_${key}_${i}",
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
						'setting'				=> "${section}_lax_type_${i}",
						'operator'			=> '==',
						'value'					=> $key,
					),
				),
			));
		}
	}
}

?>
