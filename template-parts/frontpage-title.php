<?php

get_template_part('template-parts/content', 'animations');
$title_aos = get_query_var('section_title_aos');
$title_lax = get_query_var('section_title_lax');
$title_lax_class = $title_lax != '' ? 'lax' : '';
$title_fittext = get_theme_mod('typography_section_title_fittext', false) ? 'fit-text' : '';

$section = get_query_var('section');
$section_title = get_theme_mod("${section}_title", 'Block Title');
$image = get_theme_mod("${section}_logo", '');
?>

<h2
		class='section-title <?php echo $title_lax_class; ?> <?php echo $title_fittext; ?>'
		<?php echo $title_lax; ?>
		<?php echo $title_aos; ?>>

	<?php if($image != ''): ?>
		<img src='<?php echo $image; ?>'>
	<?php endif; ?>

	<?php echo $section_title; ?>
</h2>
