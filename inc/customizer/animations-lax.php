<?php

require_once(get_template_directory() . '/inc/customizer/misc/lax.php');

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
