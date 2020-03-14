<?php

$number_of_frontpage_sections = 15;

require_once(get_template_directory() . '/inc/customizer/misc_items_fields.php');
require_once(get_template_directory() . '/inc/customizer/sections_heading.php');
require_once(get_template_directory() . '/inc/customizer/sections_background.php');
require_once(get_template_directory() . '/inc/customizer/sections_items.php');
require_once(get_template_directory() . '/inc/customizer/sections_appearance.php');

function supplier_add_frontpage_sections($num_sections = 15, &$items_fields = array())
{
	for($index = 1; $index <= $num_sections; $index++)
	{
		Kirki::add_panel("section_${index}_panel", array(
			'title' => esc_html__("Section #${index}", 'planeta'),
			'panel' => "sections_panel",
		));

		planeta_add_section_heading($index);
		planeta_add_section_background($index);
		planeta_add_section_items($index, $items_fields);
		planeta_add_section_appearance($index);
	}
}

supplier_add_frontpage_sections($number_of_frontpage_sections, $items_fields);

?>