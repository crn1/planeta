<?php

Kirki::add_section('portfolio_content', array(
	'title'	=> esc_html__('Content', 'planeta'),
	'panel'	=> 'portfolio_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'text',
	'settings'		=> 'portfolio_name',
	'label'				=> esc_html__('Name', 'planeta'),
	'section'			=> 'portfolio_content',
	'default'			=> 'John Doe',
	'active_callback'		=> array(
		array(
			'operator'					=> '==',
			'setting'						=> 'portfolio_enable',
			'value'							=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'text',
	'settings'		=> 'portfolio_profession',
	'label'				=> esc_html__('Profession/Occupation', 'planeta'),
	'section'			=> 'portfolio_content',
	'default'			=> 'Frontend Developer',
	'active_callback'		=> array(
		array(
			'operator'					=> '==',
			'setting'						=> 'portfolio_enable',
			'value'							=> true,
		),
	),
));

?>
