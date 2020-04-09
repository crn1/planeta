<?php

$number_of_frontpage_sections = 15;

require_once(get_template_directory() . '/inc/customizer/sections/inside-layout.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading-appearance.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading-typography.php');
require_once(get_template_directory() . '/inc/customizer/sections/items.php');
require_once(get_template_directory() . '/inc/customizer/sections/items-appearance.php');
require_once(get_template_directory() . '/inc/customizer/sections/items-typography.php');
require_once(get_template_directory() . '/inc/customizer/sections/background.php');

function planeta_add_frontpage_sections($num_sections = 15)
{
	for($index = 1; $index <= $num_sections; $index++)
	{
		Kirki::add_panel("section_${index}_panel", array(
			'title' 		=> esc_html__("Section #${index}", 'planeta'),
			'panel' 		=> "sections_panel",
		));

		planeta_add_section_layout($index);
		planeta_add_section_heading($index);
		planeta_add_section_heading_appearance($index);
		planeta_add_section_heading_typography($index);
		planeta_add_section_items($index);
		planeta_add_section_items_appearance($index);
		planeta_add_section_items_typography($index);
		planeta_add_section_background($index);
	}
}

planeta_add_frontpage_sections($number_of_frontpage_sections);

?>
