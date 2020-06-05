<?php

function planeta_add_section_buttons($name)
{
	Kirki::add_section("${name}_buttons", array(
		'title' => esc_html__('Additional Buttons', 'planeta'),
		'panel' => "${name}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'						=> 'repeater',
		'section'					=> "${name}_buttons",
		'settings'				=> "${name}_buttons",
		'label'						=> esc_html__('Additional Buttons', 'planeta'),
		'default'					=> array(),
		'row_label'				=> array(
			'type'						=> 'field',
			'field'						=> 'title',
			'value'						=> esc_html__('Item', 'planeta'),
		),
		'fields'					=> array(
			'title'								=> array(
				'type'								=> 'text',
				'label'								=> esc_html__('Text', 'planeta'),
				'default'							=> esc_html__('Read More...', 'planeta'),
			),
			'url'									=> array(
				'type'								=> 'text',
				'label'								=> esc_html__('URL', 'planeta'),
				'default'							=> esc_html__('http://example.com', 'planeta'),
			),
			'url_tab'							=> array(
				'type'								=> 'checkbox',
				'label'								=> esc_html__('Open URL in a new tab', 'planeta'),
				'default'							=> false,
			),
		),
	));
}

?>
