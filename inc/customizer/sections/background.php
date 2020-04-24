<?php

require_once(get_template_directory() . '/inc/customizer/video-background.php');
require_once(get_template_directory() . '/inc/customizer/shape.php');

function planeta_add_section_background($name)
{
	planeta_add_video_background(
		$section 		= $name,
		$panel 			= "${name}_panel",
		$bg_output 	= "section[data-section-id='${name}'] .background-overlay"
	);

	planeta_add_shape(array(
		'section'				=> "${name}_background",
		'inline'				=> true,
		'height_output'	=> array(
			"section[data-section-id='${name}'] .background-overlay",
			"section[data-section-id='${name}'] .video-background",
		),
		'outside_output'	=> "section[data-section-id='${name}']",
	));
}

?>
