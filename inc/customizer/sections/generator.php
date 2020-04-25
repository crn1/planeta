<?php

require_once(get_template_directory() . '/inc/customizer/sections/inside-layout.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading.php');
require_once(get_template_directory() . '/inc/customizer/sections/buttons.php');
require_once(get_template_directory() . '/inc/customizer/sections/appearance.php');
require_once(get_template_directory() . '/inc/customizer/sections/background.php');

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
	planeta_add_section_background($name);
}

$posts = esc_html__('Posts', 'planeta');
planeta_add_frontpage_section('post', $posts);

$testimonials = esc_html__('Testimonials', 'planeta');
planeta_add_frontpage_section('testimonial', $testimonials);

$projects = esc_html__('Projects', 'planeta');
planeta_add_frontpage_section('project', $projects);

$posts = esc_html__('Numbers', 'planeta');
planeta_add_frontpage_section('number', $posts);

$projects = esc_html__('Services', 'planeta');
planeta_add_frontpage_section('service', $projects);

$posts = esc_html__('Gallery', 'planeta');
planeta_add_frontpage_section('gallery', $posts);

$testimonials = esc_html__('Team', 'planeta');
planeta_add_frontpage_section('team', $testimonials);

$projects = esc_html__('Clients', 'planeta');
planeta_add_frontpage_section('client', $projects);

$projects = esc_html__('Tech Stack', 'planeta');
planeta_add_frontpage_section('tech', $projects);

$projects = esc_html__('Contact Form', 'planeta');
planeta_add_frontpage_section('contact', $projects);

?>
