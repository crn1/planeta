<?php

	//Title Effects
	//=============
	$title_classes = '';
	$title_lax = '';
	if(get_theme_mod('frontpage_title_type', 'none') == 'reveal')
	{
		$title_effect = get_theme_mod('frontpage_title_effect_reveal', 'fadeIn');
		$title_classes = ' animated ' . $title_effect;
	}else if(get_theme_mod('frontpage_title_type', 'none') == 'scroll')
	{
		$title_effect = get_theme_mod('frontpage_title_effect_scroll', 'blurOut');
		$title_classes = ' lax';
		$title_strength = get_theme_mod("frontpage_title_strength_${title_effect}", -1);
		$title_strength = $title_strength != -1 ? '-' . $title_strength : '';
		$title_lax = "data-lax-preset='${title_effect}${title_strength}'";
	}
	set_query_var('title_classes', $title_classes);
	set_query_var('title_lax', $title_lax);

	//Subtitle Effects
	//=============
	$subtitle_classes = '';
	$subtitle_lax = '';
	if(get_theme_mod('frontpage_subtitle_type', 'none') == 'reveal')
	{
		$subtitle_effect = get_theme_mod('frontpage_subtitle_effect_reveal', 'fadeIn');
		$subtitle_classes = ' animated ' . $subtitle_effect;
	}else if(get_theme_mod('frontpage_subtitle_type', 'none') == 'scroll')
	{
		$subtitle_effect = get_theme_mod('frontpage_subtitle_effect_scroll', 'blurOut');
		$subtitle_classes = ' lax';
		$subtitle_strength = get_theme_mod("frontpage_title_strength_${subtitle_effect}", -1);
		$subtitle_strength = $subtitle_strength != -1 ? '-' . $subtitle_strength : '';
		$subtitle_lax = "data-lax-preset='${subtitle_effect}${subtitle_strength}'";
	}
	set_query_var('subtitle_classes', $title_classes);
	set_query_var('subtitle_lax', $title_lax);

?>
