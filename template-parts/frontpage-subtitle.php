<?php

$section = get_query_var('section');
$subtitle = get_theme_mod("${section}_subtitle", 'Block Subtitle');

if(!empty($subtitle)):
	set_query_var('animation_name', 'section_subtitle');
	get_template_part('template-parts/content', 'animations');
	$aos = get_query_var('section_subtitle_aos');
	$lax = get_query_var('section_subtitle_lax');
	$lax_class = $lax != '' ? 'lax' : '';
	$fittext = get_theme_mod('typography_section_subtitle_fittext', false) ? 'fit-text' : '';
?>

<h3
		class='section-subtitle <?php echo $lax_class; ?> <?php echo $fittext; ?>'
		<?php echo $lax; ?>
		<?php echo $aos; ?>>
	<?php echo $subtitle; ?>
</h3>

<?php endif; ?>
