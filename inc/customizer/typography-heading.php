<?php

Kirki::add_section('typography_heading', array(
	'title'       => esc_html__('General Heading', 'planeta'),
	'panel'       => 'typography_panel',
));

function generate_setting($device_name='Desktop', $device='desktop', $media_query='(min-width: 1200px)', $default_scale='1.414')
{
	$media_query = '@media ' . $media_query;

	$ratios = array(
		'1.067'       => esc_html__('1.067 - Minor Second', 'planeta'),
		'1.125'       => esc_html__('1.125 - Major Second', 'planeta'),
		'1.200'       => esc_html__('1.200 - Minor Third', 'planeta'),
		'1.250'       => esc_html__('1.250 - Major Third', 'planeta'),
		'1.333'       => esc_html__('1.333 - Perfect Fourth', 'planeta'),
		'1.414'       => esc_html__('1.414 - Augmented Fourth', 'planeta'),
		'1.500'       => esc_html__('1.500 - Perfect Fifth', 'planeta'),
		'1.618'       => esc_html__('1.618 - Golden Ratio', 'planeta'),
	);

	Kirki::add_field('planeta_config', array(
		'type'        => 'select',
		'label'       => esc_html__("Scale on ${device_name}", 'planeta'),
		'section'     => 'typography_heading',
		'settings'    => "typography_main_scale_${device}",
		'default'     => $default_scale,
		'choices'     => $ratios,
		'transport'		=> 'auto',
		'output' 			=> array(
			array(
				'element'					=> 'h1',
				'property'				=> 'font-size',
				'media_query'			=> $media_query,
				'value_pattern'		=> 'calc(1rem*$*$*$*$*$)',
			),
			array(
				'element'					=> 'h2',
				'property'				=> 'font-size',
				'media_query'			=> $media_query,
				'value_pattern'		=> 'calc(1rem*$*$*$*$)',
			),
			array(
				'element'					=> 'h3',
				'property'				=> 'font-size',
				'media_query'			=> $media_query,
				'value_pattern'		=> 'calc(1rem*$*$*$)',
			),
			array(
				'element'					=> 'h4',
				'property'				=> 'font-size',
				'media_query'			=> $media_query,
				'value_pattern'		=> 'calc(1rem*$*$)',
			),
			array(
				'element'					=> 'h5',
				'property'				=> 'font-size',
				'media_query'			=> $media_query,
				'value_pattern'		=> 'calc(1rem*$)',
			),
			array(
				'element'					=> 'h6',
				'property'				=> 'font-size',
				'media_query'			=> $media_query,
				'value_pattern' 	=> '1rem',
			),
		),
	));
}

generate_setting();
generate_setting('Laptop', 'laptop', '(min-width: 900px) and (max-width: 1199px)', '1.333');
generate_setting('Tablet', 'tablet', '(min-width: 500px) and (max-width: 899px)', '1.250');
generate_setting('Smartphone', 'mobile', '(max-width: 499px)', '1.200');

?>
