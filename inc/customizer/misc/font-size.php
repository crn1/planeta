<?php
function generate_single_font_size_setting(&$args)
{
	$section = $args['section'];
	$class = $args['class'];
	$device = $args['device'];
	$device_name = $args['device_name'];

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__("Size on ${device_name}", 'planeta'),
		'section'     => $section,
		'settings'    => "${section}_size_desktop",
		'choices'     => $args['size_choices'],
		'output'			=> array(
			array(
				'element'				=> $class,
				'property'			=> 'font-size',
				'units'					=> $args['size_units'],
				'media_query'		=> $args['media_query'],
			),
		),
	));
}

function planeta_generate_font_size_setting($args)
{
	$args = array_merge($args, array(
		'section'								=> '',
		'class'									=> '',
		'size_choices'					=> array(
			'min'										=> '0.1',
			'max'										=> '7',
			'min'										=> '0.1',
		),
		'size_units'						=> 'rem',
	));

	generate_single_font_size_setting(array_merge($args, array(
		'device'				=> 'desktop',
		'device_name'		=> 'Desktop',
		'media_query'		=> '(min-width: 1200px)',
	)));
	generate_single_font_size_setting(array_merge($args, array(
		'device'				=> 'laptop',
		'device_name'		=> 'Laptop',
		'media_query'		=> '(min-width: 900px) and (max-width: 1199px)',
	)));
	generate_single_font_size_setting(array_merge($args, array(
		'device'				=> 'tablet',
		'device_name'		=> 'Tablet',
		'media_query'		=> '(min-width: 600px) and (max-width: 899px)',
	)));
	generate_single_font_size_setting(array_merge($args, array(
		'device'				=> 'mobile',
		'device_name'		=> 'Smartphone',
		'media_query'		=> '(max-width: 599px)',
	)));
}

?>
