<?php

	//Title Effects
	//=============
	$title_aos = '';
	$title_lax = '';
	if(get_theme_mod('frontpage_title_type', 'none') == 'reveal')
	{
		$title_effect = get_theme_mod('frontpage_title_effect_reveal', 'fade-in');
		$title_duration = get_theme_mod('frontpage_title_duration', '400');
		$title_aos = "data-aos='${title_effect}' data-aos-duration='${title_duration}'";
	}else if(get_theme_mod('frontpage_title_type', 'none') == 'scroll')
	{
		$title_effect = get_theme_mod('frontpage_title_effect_scroll', 'blurOut');
		$title_strength = get_theme_mod("frontpage_title_strength_${title_effect}", -1);
		$title_strength = $title_strength != -1 ? '-' . $title_strength : '';
		$title_lax = "data-lax-preset='${title_effect}${title_strength}'";
	}
	set_query_var('title_aos', $title_aos);
	set_query_var('title_lax', $title_lax);

	//Subtitle Effects
	//=============
	$subtitle_aos = '';
	$subtitle_lax = '';
	if(get_theme_mod('frontpage_subtitle_type', 'none') == 'reveal')
	{
		$subtitle_effect = get_theme_mod('frontpage_subtitle_effect_reveal', 'fade-in');
		$subtitle_duration = get_theme_mod('frontpage_subtitle_duration', '400');
		$subtitle_aos = "data-aos='${subtitle_effect}' data-aos-duration='${subtitle_duration}'";
	}else if(get_theme_mod('frontpage_subtitle_type', 'none') == 'scroll')
	{
		$subtitle_effect = get_theme_mod('frontpage_subtitle_effect_scroll', 'blurOut');
		$subtitle_strength = get_theme_mod("frontpage_subtitle_strength_${subtitle_effect}", -1);
		$subtitle_strength = $subtitle_strength != -1 ? '-' . $subtitle_strength : '';
		$subtitle_lax = "data-lax-preset='${subtitle_effect}${subtitle_strength}'";
	}
	set_query_var('subtitle_aos', $subtitle_aos);
	set_query_var('subtitle_lax', $subtitle_lax);

	//Card Effects
	//=============
	$card_aos = '';
	$card_lax = '';
	if(get_theme_mod('frontpage_card_type', 'none') == 'reveal')
	{
		$card_effect = get_theme_mod('frontpage_card_effect_reveal', 'fade-in');
		$card_duration = get_theme_mod('frontpage_card_duration', '400');
		$card_aos = "data-aos='${card_effect}' data-aos-duration='${card_duration}'";
	}else if(get_theme_mod('frontpage_card_type', 'none') == 'scroll')
	{
		$card_effect = get_theme_mod('frontpage_card_effect_scroll', 'blurOut');
		$card_strength = get_theme_mod("frontpage_card_strength_${card_effect}", -1);
		$card_strength = $card_strength != -1 ? '-' . $card_strength : '';
		$card_lax = "data-lax-preset='${card_effect}${card_strength}'";
	}
	set_query_var('card_aos', $card_aos);
	set_query_var('card_lax', $card_lax);
?>
