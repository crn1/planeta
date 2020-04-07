<?php

Kirki::add_panel('typography_panel', array(
	'title'       => esc_html__('Typography', 'planeta'),
	'panel'       => 'global_panel',
));

function typography_generator($args)
{
	$args = array_merge(array(
		'name'								=> '',
		'section'							=> '',
		'class'								=> '',
		'enable_sizing'				=> true,
		'enable_hover'				=> false,
		'default_typography'	=> array(
			//POPRAVI ME
			'text-transform'			=> 'none',
			'color'								=> '#000000',
			'font-family'					=> 'inherit',
			'variant'							=> 'regular',
			'line-height'					=> '1.5',
			'letter-spacing'			=> '0',
		),
		'size_units'					=> 'rem',
		'size_choices'				=> array(
			'min'									=> 0.1,
			'max'									=> 7,
			'step'								=> 0.1,
		),
	), $args);

	$section = $args['section'];
	$class = $args['class'];
	$name = $args['name'];

	Kirki::add_section("typography_${section}", array(
		'title'       => esc_html__($name, 'planeta'),
		'panel'       => 'typography_panel',
	));

	$typography = array_merge(array(
			'text-transform'			=> 'none',
			'color'								=> '#000000',
			'font-family'					=> 'inherit',
			'variant'							=> 'regular',
			'line-height'					=> '1.5',
			'letter-spacing'			=> '0',
	), $args['default_typography']);

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Typography', 'planeta'),
		'section'     => "typography_${section}",
		'settings'    => "typography_${section}",
		'default'			=> $args['default_typography'],
		'output'      => array(
			array(
				'element' 		=> $class,
			),
		),
	));

	if($args['enable_sizing'])
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'slider',
			'label'       => esc_html__('Size', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_size",
			'choices'     => $args['size_choices'],
			'output'			=> array(
				array(
					'element'				=> $class,
					'property'			=> 'font-size',
					'units'					=> $args['size_units'],
				),
			),
		));
	}

	if($args['enable_hover'])
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'select',
			'label'       => esc_html__('Style', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_hover",
			'default'     => 'none',
			'choices'     => array(
				'none'       			=> esc_html__('None 1(default)', 'planeta'),
				'cl-effect-1'			=> esc_html__('None 2(default)', 'planeta'),
				'cl-effect-3'			=> esc_html__('None dfsaja(default)', 'planeta'),
				'cl-effect-4'			=> esc_html__('None sa(default)', 'planeta'),
				'cl-effect-6'			=> esc_html__('None g(default)', 'planeta'),
				'cl-effect-7'			=> esc_html__('None h(default)', 'planeta'),
				'cl-effect-8'			=> esc_html__('None z(default)', 'planeta'),
				'cl-effect-13'		=> esc_html__('None n(default)', 'planeta'),
				'cl-effect-14'		=> esc_html__('None m(default)', 'planeta'),
				'cl-effect-18'		=> esc_html__('None o(default)', 'planeta'),
				'cl-effect-21'		=> esc_html__('None ddffee(default)', 'planeta'),
			),
		));
	}
}

require_once(get_template_directory() . '/inc/customizer/global/typography-main.php');
require_once(get_template_directory() . '/inc/customizer/global/typography-heading.php');

typography_generator(array(
	'name' 					=> 'Button Link',
	'section' 			=> 'button_link',
	'class'					=> '.button-link',
	'enable_hover'	=> true,
));

typography_generator(array(
	'name' 						=> 'Section Title',
	'section' 				=> 'section_title',
	'class'						=> '.section-title',
));

typography_generator(array(
	'name' 						=> 'Section Subtitle',
	'section' 				=> 'section_subtitle',
	'class'						=> '.section-subtitle',
));

typography_generator(array(
	'name'								=> 'Page Title',
	'section'							=> 'page_title',
	'class'								=> '.page-title',
	'default_typography' 	=> array(
		'text-align'					=> 'center',
	),
));

typography_generator(array(
	'name' 						=> 'Page Subtitle',
	'section' 				=> 'page_subtitle',
	'class'						=> '.page-subtitle',
	'default_typography' 	=> array(
		'text-align'					=> 'center',
	),
));

?>
