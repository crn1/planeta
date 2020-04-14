<?php

require_once(get_template_directory() . '/inc/customizer/video-background.php');
require_once(get_template_directory() . '/inc/customizer/shape.php');

function planeta_add_section_background($index)
{
	planeta_add_video_background(
		$section 		= "section_${index}",
		$panel 			= "section_${index}_panel",
		$bg_output 	= "#section_${index}-overlay"
	);

	planeta_add_shape(array(
		'section'				=> "section_${index}_background",
		'inline'				=> true,
		'height_output'	=> array(
			"#section_${index}-overlay",
			"#section_${index}-video-background",
		),
		'outside_output'	=> "[data-section-id='section_${index}']",
	));
}

?>
