<?php

$section = get_query_var('section');
$title = get_theme_mod("${section}_title", 'Section Title');

if(!empty($title)):
	set_query_var('animation_name', 'section_title');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('section_title_aos');
	$lax = get_query_var('section_title_lax');
	$lax_class = $lax != '' ? 'lax' : '';
?>

<h2
		class='section-title <?php echo sanitize_html_class($lax_class); ?>'
		<?php echo $lax; ?>
		<?php echo $aos; ?>>
	<?php echo esc_html($title); ?>
</h2>

<?php endif; ?>
