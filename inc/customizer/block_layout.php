<?php

Kirki::add_section('blocks_layout_section', array(
	'title'       => esc_html__('Layout', 'planeta'),
	'panel'       => 'blocks_panel',
));

//
// TODO: Videti ovaj kurac za mini sectionse (vrvt for petlja)
//

Kirki::add_field('planeta_config', array(
	'type'				=> 'sortable',
	'label'       => esc_html__('Layout', 'planeta'),
	'section'			=> 'blocks_layout_section',
	'settings'		=> 'blocks_layout',
	'default'			=> array(
		'landing',
		'portfolio',
		'services',
		'clients',
	),
	'choices'			=> array(
		'landing'					=> esc_html__('Landing', 'planeta'),
		'portfolio'				=> esc_html__('Portfolio/Projects', 'planeta'),
		'services'				=> esc_html__('Services', 'planeta'),
		'clients'					=> esc_html__('Clients', 'planeta'),
		'testimonials'		=> esc_html__('Testemonials', 'planeta'),
		'experience'			=> esc_html__('Experience', 'planeta'),
		'posts'						=> esc_html__('Posts', 'planeta'),
		'contact'					=> esc_html__('Contact', 'planeta'),
		'mini_sections_1'	=> esc_html__('Mini Sections #1', 'planeta'),
		'mini_sections_2'	=> esc_html__('Mini Sections #2', 'planeta'),
		'mini_sections_3'	=> esc_html__('Mini Sections #3', 'planeta'),
		'mini_sections_4'	=> esc_html__('Mini Sections #4', 'planeta'),
		'mini_sections_5'	=> esc_html__('Mini Sections #5', 'planeta'),
	),
));

?>
