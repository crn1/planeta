<?php

function planeta_add_section_layout($name)
{
	Kirki::add_section("${name}_layout", array(
		'title' => esc_html__('Layout', 'planeta'),
		'panel' => "${name}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'sortable',
		'label'			=> esc_html__('Layout', 'planeta'),
		'section'		=> "${name}_layout",
		'settings'	=> "${name}_layout",
		'default'		=> array(
			'logo',
			'title',
			'subtitle',
			'items',
			'buttons',
		),
		'choices'		=> array(
			'logo'			=> esc_html__('Logo/Image', 'planeta'),
			'title'			=> esc_html__('Title', 'planeta'),
			'subtitle'	=> esc_html__('Subtitle', 'planeta'),
			'items'			=> esc_html__('Items', 'planeta'),
			'buttons'		=> esc_html__('Buttons', 'planeta'),
		),
	));
}

?>
