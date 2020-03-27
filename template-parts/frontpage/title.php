<?php

$section = get_query_var('section');
$title = get_theme_mod("${section}_title", 'Block Title');

if(!empty($title)):
	set_query_var('animation_name', 'section_title');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('section_title_aos');
	$lax = get_query_var('section_title_lax');
	$lax_class = $lax != '' ? 'lax' : '';
	$fittext = get_theme_mod('typography_section_title_fittext', false) ? 'fit-text' : '';
?>

<h2
		class='section-title <?php echo $lax_class; ?> <?php echo $fittext; ?>'
		<?php echo $lax; ?>
		<?php echo $aos; ?>>
	<?php echo $title; ?>
</h2>

<?php endif; ?>
