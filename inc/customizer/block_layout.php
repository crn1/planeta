<?php

Kirki::add_section('blocks_layout_section', array(
	'title'       => esc_html__('Layout', 'kirki'),
	'panel'       => 'blocks_panel',
));

//
// TODO: Videti ovaj kurac za mini sectionse (vrvt for petlja)
//

Kirki::add_field('kirki_config', array(
	'type'				=> 'sortable',
	'label'       => esc_html__('Layout', 'kirki'),
	'section'			=> 'blocks_layout_section',
	'settings'		=> 'blocks_layout',
	'default'			=> array(
		'landing',
		'portfolio',
		'services',
		'clients',
	),
	'choices'			=> array(
		'landing'					=> esc_html__('Landing', 'kirki'),
		'portfolio'				=> esc_html__('Portfolio/Projects', 'kirki'),
		'services'				=> esc_html__('Services', 'kirki'),
		'clients'					=> esc_html__('Clients', 'kirki'),
		'testimonials'		=> esc_html__('Testemonials', 'kirki'),
		'experience'			=> esc_html__('Experience', 'kirki'),
		'posts'						=> esc_html__('Posts', 'kirki'),
		'contact'					=> esc_html__('Contact', 'kirki'),
		'mini_sections_1'	=> esc_html__('Mini Sections #1', 'kirki'),
		'mini_sections_2'	=> esc_html__('Mini Sections #2', 'kirki'),
		'mini_sections_3'	=> esc_html__('Mini Sections #3', 'kirki'),
		'mini_sections_4'	=> esc_html__('Mini Sections #4', 'kirki'),
		'mini_sections_5'	=> esc_html__('Mini Sections #5', 'kirki'),
	),
));

?>
