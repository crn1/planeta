<?php

Kirki::add_section('sections_layout', array(
	'title'       => esc_html__('Frontpage Layout', 'planeta'),
	'panel'     	=> esc_html__('sections_panel', 'planeta'),
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'sortable',
	'label'       => esc_html__('Layout', 'planeta'),
	'section'			=> 'sections_layout',
	'settings'		=> 'sections_layout',
	'default'			=> array(),
	'choices'			=> array(
		'posts'						=> esc_html__('Posts', 'planeta'),
		'contact'					=> esc_html__('Contact Us', 'planeta'),
	),
));

?>
