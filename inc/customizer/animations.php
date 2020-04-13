<?php

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

	require_once(get_template_directory() . '/inc/customizer/animations-aos.php');
	planeta_add_animations_aos($section);

	require_once(get_template_directory() . '/inc/customizer/animations-lax.php');
	planeta_add_animations_lax($section);
}

?>
