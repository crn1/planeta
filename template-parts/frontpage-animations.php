<?php

function set_animations($name)
{
	$section = $name . '_anims';
	$temp_aos = '';
	$temp_lax = '';
	if(get_theme_mod("${section}_trigger", 'none') == 'aos')
	{
		$temp_effect = get_theme_mod("${section}_aos_type", 'fade-in');
		$temp_duration = get_theme_mod("${section}_duration", '400');
		$temp_delay = get_theme_mod("${section}_delay", '0');
		$temp_easing = get_theme_mod("${section}_easing", 'linear');
		$temp_aos = "data-aos='${temp_effect}' data-aos-duration='${temp_duration}' data-aos-delay='${temp_delay}' data-aos-easing='${temp_easing}'";
	} else if(get_theme_mod("${section}_trigger", 'none') == 'lax')
	{
		$temp_effect = get_theme_mod("${section}_lax_type", 'blurOut');
		$temp_strength = get_theme_mod("${section}_strength_${temp_effect}", -1);
		$temp_strength = $temp_strength != -1 ? '-' . $temp_strength : '';
		$temp_lax = "data-lax-preset='${temp_effect}${temp_strength}'";
	}
	set_query_var("${name}_aos", $temp_aos);
	set_query_var("${name}_lax", $temp_lax);
}

set_animations('section_title');
set_animations('section_subtitle');
set_animations('card');

?>
