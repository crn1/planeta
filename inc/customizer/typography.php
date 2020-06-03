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
		'title'       => $name,
		'panel'       => 'typography_panel',
	));

	$typography = array_merge(array(
			'text-transform'			=> 'none',
			'color'								=> '#000000',
			'font-family'					=> 'inherit',
			'variant'							=> 'regular',
			'line-height'					=> '1.5',
			'text-align'					=> 'center',
			'letter-spacing'			=> '0',
	), $args['default_typography']);

	Kirki::add_field('planeta_config', array(
		'type'        => 'toggle',
		'label'       => esc_html__('Inherit Typography', 'planeta'),
		'section'     => "typography_${section}",
		'settings'    => "typography_${section}_inherit_typography",
		'default'			=> $section === 'button_link' ? true : false,
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
}

require_once get_template_directory() . '/inc/customizer/typography-main.php';
require_once get_template_directory() . '/inc/customizer/typography-heading.php';

typography_generator(array(
	'name'								=> esc_html__('Section Title', 'planeta'),
	'section'							=> 'section_title',
	'class'								=> '.section-title',
	'default_size'				=> 4,
));

typography_generator(array(
	'name'								=> esc_html__('Section Subtitle', 'planeta'),
	'section'							=> 'section_subtitle',
	'class'								=> '.section-subtitle',
	'default_size'				=> 1.2,
));

typography_generator(array(
	'name'								=> esc_html__('Page Title', 'planeta'),
	'section'							=> 'page_title',
	'class'								=> '.page-title',
	'default_size'				=> 4,
));

?>
