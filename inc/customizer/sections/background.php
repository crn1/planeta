<?php

require_once(get_template_directory() . '/inc/customizer/video-background.php');

function planeta_add_section_background($index)
{
	planeta_add_video_background(
		$section = "section_${index}",
		$panel = "section_${index}_panel",
		$bg_output = "#section_${index}-overlay",
	);
}

?>
