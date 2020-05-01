<?php

Kirki::add_section('sections_layout', array(
	'title'       => esc_html__('Frontpage Layout', 'planeta'),
	'priority'		=> 1,
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'sortable',
	'label'       => esc_html__('Layout', 'planeta'),
	'section'			=> 'sections_layout',
	'settings'		=> 'sections_layout',
	'default'			=> array(),
	'choices'			=> array(
		'post'						=> esc_html__('Posts', 'planeta'),
		'testimonial'			=> esc_html__('Testimonials', 'planeta'),
		'project'					=> esc_html__('Projects', 'planeta'),
		'number'					=> esc_html__('Numbers', 'planeta'),
		'service'					=> esc_html__('Services', 'planeta'),
		'price'						=> esc_html__('Pricing', 'planeta'),
		'gallery'					=> esc_html__('Gallery', 'planeta'),
		'team'						=> esc_html__('Team', 'planeta'),
		'client'					=> esc_html__('Clients', 'planeta'),
		'tech'						=> esc_html__('Tech Stack', 'planeta'),
		'contact'					=> esc_html__('Contact Form', 'planeta'),
		'generic-1'				=> esc_html__('Generic Sections #1', 'planeta'),
		'generic-2'				=> esc_html__('Generic Sections #2', 'planeta'),
		'generic-3'				=> esc_html__('Generic Sections #3', 'planeta'),
		'generic-4'				=> esc_html__('Generic Sections #4', 'planeta'),
		'generic-5'				=> esc_html__('Generic Sections #5', 'planeta'),
	),
));

?>
