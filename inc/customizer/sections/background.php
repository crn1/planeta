<?php

require_once(get_template_directory() . '/inc/customizer/video-background.php');
require_once(get_template_directory() . '/inc/customizer/shape.php');

function planeta_add_section_background($name)
{
	planeta_add_video_background(
		$section 		= $name,
		$panel 			= "${name}_panel",
		$bg_output 	= "#${name}-overlay"
	);

	planeta_add_shape(array(
		'section'				=> "${name}_background",
		'inline'				=> true,
		'height_output'	=> array(
			"#${name}-overlay",
			"#${name}-video-background",
		),
		'outside_output'	=> "#${name}",
	));
}

?>
