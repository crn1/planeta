<?php

require_once(get_template_directory() . '/inc/customizer/shape.php');

function planeta_add_section_items_appearance(&$index)
{
	Kirki::add_section("section_${index}_items_appearance", array(
		'title' => esc_html__('Items Appearance', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	planeta_add_shape(array(
		'inline'		=> true,
		'height'
	));


}


?>
