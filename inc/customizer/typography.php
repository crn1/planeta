<?php

Kirki::add_panel('typography_panel', array(
	'title'       => esc_html__('Typography', 'planeta'),
));

function typography_generator($args)
{
	$args = array_merge(array(
		'name'								=> '',
		'section'							=> '',
		'class'								=> '',
		'enable_sizing'				=> true,
		'enable_hover'				=> false,
		'default_size'				=> 1,
		'default_typography'	=> array(),
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
			'text-align'					=> 'left',
	), $args['default_typography']);

	Kirki::add_field('planeta_config', array(
		'type'        => 'toggle',
		'label'       => esc_html__('Inherit Typography', 'planeta'),
		'section'     => "typography_${section}",
		'settings'    => "typography_${section}_inherit_typography",
		'default'			=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Typography', 'planeta'),
		'section'     => "typography_${section}",
		'settings'    => "typography_${section}",
		'default'			=> $typography,
		'output'      => array(
			array(
				'element' 		=> $class,
			),
		),
		'active_callback'	=> array(
			array(
				'setting'    	=> "typography_${section}_inherit_typography",
				'operator'		=> '!=',
				'value'				=> true,
			),
		),
	));

	if($args['enable_sizing'])
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'toggle',
			'label'       => esc_html__('Inherit Size', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_inherit_size",
			'default'			=> true,
		));

		Kirki::add_field('planeta_config', array(
			'type'        => 'slider',
			'label'       => esc_html__('Size', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_size",
			'choices'     => $args['size_choices'],
			'default'			=> $args['default_size'],
			'transport'		=> 'auto',
			'output'			=> array(
				array(
					'element'				=> $class,
					'property'			=> 'font-size',
					'units'					=> $args['size_units'],
				),
			),
			'active_callback'	=> array(
				array(
					'setting'    	=> "typography_${section}_inherit_size",
					'operator'		=> '!=',
					'value'				=> true,
				),
			),
		));
	}

	if($args['enable_hover'])
	{
		Kirki::add_field('planeta_config', array(
			'type'        => 'select',
			'label'       => esc_html__('Border/Line Style', 'planeta'),
			'section'     => "typography_${section}",
			'settings'    => "typography_${section}_hover",
			'default'     => 'none',
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
				'cross'						=> esc_html__('Cross', 'planeta'),
			),
		));

		require_once(get_template_directory() . '/inc/customizer/misc/hover.php');
		Kirki::add_field('planeta_config', array(
			'type'						=> 'slider',
			'label'						=> esc_html__('Border/Line Size', 'planeta'),
			'section'					=> "typography_${section}",
			'settings'				=> "typography_${section}_border_size",
			'default'					=> '0.25',
			'choices'					=> array(
				'min'							=> '0.05',
				'max'							=> '1',
				'step'						=> '0.05',
			),
			'transport'				=> 'auto',
			'output'					=> HOVER_BORDER,
			'active_callback' => array(
				'setting'				=> "typography_${section}_hover",
				'operator'			=> "!=",
				'operator'			=> 'none',
			),
		));
	}
}

require_once(get_template_directory() . '/inc/customizer/typography-main.php');
require_once(get_template_directory() . '/inc/customizer/typography-heading.php');

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
	'default_size'		=> 5, //Promeni me!
));

typography_generator(array(
	'name' 						=> 'Section Subtitle',
	'section' 				=> 'section_subtitle',
	'class'						=> '.section-subtitle',
	'default_size'		=> 2, //Promeni me!
));

typography_generator(array(
	'name'								=> 'Page Title',
	'section'							=> 'page_title',
	'class'								=> '.page-title',
	'default_size'				=> 5, //Promeni me!
	'default_typography' 	=> array(
		'text-align'					=> 'center',
	),
));

typography_generator(array(
	'name'								=> 'Page Subtitle',
	'section'							=> 'page_subtitle',
	'class'								=> '.page-subtitle',
	'default_size'				=> 2, //Promeni me!
	'default_typography' 	=> array(
		'text-align'					=> 'center',
	),
));

?>
