<?php

$section = get_query_var('section');
$src = get_theme_mod("${section}_logo", '');

if(!empty($src)):
	set_query_var('animation_name', 'section_logo');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('section_logo_aos');
	$lax = get_query_var('section_logo_lax');
	$lax_class = $lax != '' ? 'lax' : '';
?>

<img
	src='<?php echo esc_url($src); ?>'
	class='section-logo <?php echo sanitize_html_class($lax_class); ?>'
	<?php echo esc_attr($lax); ?>
	<?php echo esc_attr($aos); ?>
/>

<?php endif; ?>
