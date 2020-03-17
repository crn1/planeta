<?php

$number_of_frontpage_sections = 15;

require_once(get_template_directory() . '/inc/customizer/misc/items-fields.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading.php');
require_once(get_template_directory() . '/inc/customizer/sections/background.php');
require_once(get_template_directory() . '/inc/customizer/sections/items.php');
require_once(get_template_directory() . '/inc/customizer/sections/appearance.php');
require_once(get_template_directory() . '/inc/customizer/sections/align.php');
require_once(get_template_directory() . '/inc/customizer/sections/spacing.php');

function planeta_add_frontpage_sections($num_sections = 15, &$items_fields = array())
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
		planeta_add_section_align($index);
		planeta_add_section_spacing($index);
	}
}

planeta_add_frontpage_sections($number_of_frontpage_sections, $items_fields);

?>
