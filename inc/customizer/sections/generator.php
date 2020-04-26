<?php

require_once(get_template_directory() . '/inc/customizer/sections/inside-layout.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading.php');
require_once(get_template_directory() . '/inc/customizer/sections/buttons.php');
require_once(get_template_directory() . '/inc/customizer/sections/appearance.php');

function planeta_add_frontpage_section($name, $title)
{
	Kirki::add_panel("${name}_panel", array(
		'title' 		=> esc_html__($title, 'planeta'),
		'panel' 		=> "sections_panel",
	));

	planeta_add_section_layout($name, $title);
	planeta_add_section_heading($name, $title);
	planeta_add_section_buttons($name);
	planeta_add_section_appearance($name);

	require_once(get_template_directory() . '/inc/customizer/video-background.php');
	planeta_add_video_background(
		$section 		= $name,
		$panel 			= "${name}_panel",
		$bg_output 	= "section[data-section-id='${name}'] .background-overlay"
	);

	require_once(get_template_directory() . '/inc/customizer/shape.php');
	planeta_add_shape(array(
		'title'					=> 'Background Shape',
		'section'				=> $name,
		'panel'					=> "${name}_panel",
		'height_output'	=> array(
			"section[data-section-id='${name}'] .background-overlay",
			"section[data-section-id='${name}'] .video-background",
		),
		'outside_output'	=> "section[data-section-id='${name}']",
	));

	planeta_add_shape(array(
		'title'					=> 'Images Shape',
		'section'				=> "${name}_image",
		'panel'					=> "${name}_panel",
	));
}

$posts = esc_html__('Posts', 'planeta');
planeta_add_frontpage_section('post', $posts);

$testimonials = esc_html__('Testimonials', 'planeta');
planeta_add_frontpage_section('testimonial', $testimonials);

$projects = esc_html__('Projects', 'planeta');
planeta_add_frontpage_section('project', $projects);

$numbers = esc_html__('Numbers', 'planeta');
planeta_add_frontpage_section('number', $numbers);

$services = esc_html__('Services', 'planeta');
planeta_add_frontpage_section('service', $services);

$gallery = esc_html__('Gallery', 'planeta');
planeta_add_frontpage_section('gallery', $gallery);

$team = esc_html__('Team', 'planeta');
planeta_add_frontpage_section('team', $team);

$clients = esc_html__('Clients', 'planeta');
planeta_add_frontpage_section('client', $clients);

$tech = esc_html__('Tech Stack', 'planeta');
planeta_add_frontpage_section('tech', $tech);

$contact = esc_html__('Contact Form', 'planeta');
planeta_add_frontpage_section('contact', $contact);

$pricing = esc_html__('Pricing', 'planeta');
planeta_add_frontpage_section('price', $pricing);

$features = esc_html__('Features', 'planeta');
planeta_add_frontpage_section('feature', $feature);

$generic_1 = esc_html__('Generic Sections #1', 'planeta');
planeta_add_frontpage_section('generic-1', $generic_1);

$generic_2 = esc_html__('Generic Sections #2', 'planeta');
planeta_add_frontpage_section('generic-2', $generic_2);

$generic_3 = esc_html__('Generic Sections #3', 'planeta');
planeta_add_frontpage_section('generic-3', $generic_3);

?>
