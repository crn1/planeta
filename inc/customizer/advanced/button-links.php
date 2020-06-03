<?php

Kirki::add_section('button_links_section', array(
	'title'	=> esc_html__('Button Links', 'planeta'),
	'panel'	=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type'        => 'select',
	'label'       => esc_html__('Border/Line Style', 'planeta'),
	'section'     => 'button_links_section',
	'settings'    => 'button_links_hover',
	'default'     => 'box-1',
	'choices'     => array(
		'none'       			=> esc_html__('None (default)', 'planeta'),
		'brackets-1'			=> esc_html__('Brackets 1', 'planeta'),
		'brackets-2'			=> esc_html__('Brackets 2', 'planeta'),
		'brackets-3'			=> esc_html__('Brackets 3', 'planeta'),
		'brackets-4'			=> esc_html__('Brackets 4', 'planeta'),
		'brackets-5'			=> esc_html__('Brackets 5', 'planeta'),
		'brackets-6'			=> esc_html__('Brackets 6', 'planeta'),
		'underline-1'			=> esc_html__('Underline 1', 'planeta'),
		'underline-2'			=> esc_html__('Underline 2', 'planeta'),
		'underline-3'			=> esc_html__('Underline 3', 'planeta'),
		'underline-4'			=> esc_html__('Underline 4', 'planeta'),
		'underline-5'			=> esc_html__('Underline 5', 'planeta'),
		'underline-6'			=> esc_html__('Underline 6', 'planeta'),
		'box-1'						=> esc_html__('Box 1', 'planeta'),
		'box-2'						=> esc_html__('Box 2', 'planeta'),
		'border-switch'		=> esc_html__('Border Switch', 'planeta'),
	),
));

Kirki::add_field('planeta_config', array(
	'type'						=> 'slider',
	'label'						=> esc_html__('Border/Line Size', 'planeta'),
	'section'     		=> 'button_links_section',
	'settings'    		=> 'button_links_border_size',
	'default'					=> 4,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 12,
		'step'						=> 1,
	),
	'transport'				=> 'auto',
	'output'					=> array(
		array(
			'element'				=> array(
				".hover-border-switch a::before",
				".hover-border-switch a::after",
				".hover-cross a::before",
				".hover-cross a::after",
			),
			'units'					=> 'px',
			'property'			=> 'height',
		),
		array(
			'element'				=> array(
				".hover-box-1 a::before",
				".hover-box-1 a::after",
				".hover-box-2 a",
				".card-image",
			),
			'units'					=> 'px',
			'property'			=> 'border-width',
		),
		array(
			'element'				=> array(
				".testimonial-excerpt",
				".number-container",
			),
			'value_pattern'	=> '$px !important',
			'property'			=> 'border-width',
		),
		array(
			'element'				=> array(
				".hover-underline-1 a::after",
				".hover-underline-2 a:hover::after",
				".hover-underline-2 a:focus::after",
				".hover-underline-3 a::before",
				".hover-underline-3 a::after",
				".hover-underline-4 a::before",
				".hover-underline-4 a::after",
				".hover-underline-5 a::before",
				".hover-underline-5 a::after",
				".hover-underline-6 a::before",
				".hover-underline-6 a::after",
			),
			'units'					=> 'px',
			'property'			=> 'height',
		),
		array(
			'element'				=> array(
				".hover-underline-3 a::after",
				".hover-underline-4 a::after",
			),
			'units'					=> 'px',
			'property'			=> 'width',
		),
	),
	'active_callback'		=> array(
		'setting'						=> "typography_${section}_hover",
		'operator'					=> "!=",
		'operator'					=> 'none',
	),
));

?>
