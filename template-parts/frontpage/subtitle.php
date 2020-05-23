<?php

$section = get_query_var('section');
$subtitle = get_theme_mod("${section}_subtitle", 'Section Subtitle');

if(!empty($subtitle)):
	set_query_var('animation_name', 'section_subtitle');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('section_subtitle_aos');
	$lax = get_query_var('section_subtitle_lax');
	$lax_class = $lax != '' ? 'lax' : '';
?>

<h3
		class='section-subtitle <?php echo sanitize_html_class($lax_class); ?>'
		<?php echo $lax; ?>
		<?php echo $aos; ?>>
	<?php echo esc_textarea($subtitle); ?>
</h3>

<?php endif; ?>
