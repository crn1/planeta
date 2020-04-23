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

planeta_add_frontpage_section('posts', 'Posts');
planeta_add_frontpage_section('contact', 'Contact Us');

?>
