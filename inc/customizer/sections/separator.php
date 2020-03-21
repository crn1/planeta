<?php

require_once(get_template_directory() . '/inc/customizer/separator.php');

function planeta_add_section_separator($index)
{
	planeta_add_separator(
		$section = "section_${index}",
		$panel = "section_${index}_panel",
	);
}

?>
