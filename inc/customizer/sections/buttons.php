<?php

function planeta_add_section_buttons(&$index)
{
	Kirki::add_section("section_${index}_buttons", array(
		'title' => esc_html__('Buttons', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'						=> 'repeater',
		'section'					=> "section_${index}_buttons",
		'settings'				=> "section_${index}_buttons",
		'label'						=> esc_html__('Items', 'planeta'),
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
