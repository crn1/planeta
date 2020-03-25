<?php
	set_query_var('animation_name', 'section_subtitle');
	get_template_part('template-parts/content', 'animations');
	$subtitle_aos = get_query_var('section_subtitle_aos');
	$subtitle_lax = get_query_var('section_subtitle_lax');
	$subtitle_lax_class = $subtitle_lax != '' ? 'lax' : '';
	$subtitle_fittext = get_theme_mod('typography_section_subtitle_fittext', false) ? 'fit-text' : '';

	$section = get_query_var('section');
	$section_subtitle = get_theme_mod("${section}_subtitle", 'Block Subtitle');
?>

<h3
		class='section-subtitle <?php echo $subtitle_lax_class; ?> <?php echo $subtitle_fittext; ?>'
		<?php echo $subtitle_lax; ?>
		<?php echo $subtitle_aos; ?>>
	<?php echo $section_subtitle; ?>
</h3>
