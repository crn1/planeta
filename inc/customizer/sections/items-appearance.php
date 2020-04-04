<?php
	require_once(get_template_directory() . '/inc/customizer/items-appearance.php');

	function planeta_add_section_items_appearance(&$index)
	{
		planeta_add_items_appearance("section_${index}");
	}
?>
