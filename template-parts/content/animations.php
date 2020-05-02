<?php

$name = get_query_var('animation_name');

$section = $name . '_anims';
$temp_aos = '';
$temp_lax = '';
if(get_theme_mod("${section}_trigger", 'none') == 'aos')
{
	$temp_effect 		= get_theme_mod("${section}_aos_type", 'fade-in');
	$temp_duration 	= get_theme_mod("${section}_duration", '400');
	$temp_delay 		= get_theme_mod("${section}_delay", '0');
	$temp_easing 		= get_theme_mod("${section}_easing", 'linear');
	$temp_anchor 		= get_theme_mod("${section}_anchor", 'top-bottom');
	$temp_once 			= get_theme_mod("${section}_once", 'false');
	$temp_mirror 		= get_theme_mod("${section}_mirror", 'false');
	$temp_aos = "
		data-aos='${temp_effect}'
		data-aos-duration='${temp_duration}'
		data-aos-delay='${temp_delay}'
		data-aos-easing='${temp_easing}'
		data-aos-anchor-placement='${temp_anchor}'
		data-aos-once='${temp_once}'
		data-aos-mirror='${temp_mirror}'";
	$temp_aos = trim($temp_aos);

}else if(get_theme_mod("${section}_trigger", 'none') == 'lax')
{
	$temp_lax = "data-lax-preset='";
	for($i = 1; $i <= 3; $i++)
	{
		$temp_effect = get_theme_mod("${section}_lax_type_${i}", 'none');
		if($temp_effect == 'none') { continue; }

		$temp_strength = get_theme_mod("${section}_strength_${temp_effect}_${i}", -1);
		$temp_strength = $temp_strength != -1 ? '-' . $temp_strength : '';

		$temp_lax .= $temp_effect . $temp_strength;
		$temp_lax .= $i != 3 ? ' ' : '';
	}
	$temp_lax = trim($temp_lax);
	$temp_lax .= "'";
}

set_query_var("${name}_aos", $temp_aos);
set_query_var("${name}_lax", $temp_lax);

?>
