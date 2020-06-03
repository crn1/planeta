<?php

$section = get_query_var('section');
$image_id =  get_theme_mod("${section}_logo", '');
if(!empty($image_id))
{
	$image_url = wp_get_attachment_url($image_id);
	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
}

if(!empty($image_id)):
	set_query_var('animation_name', 'section_logo');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('section_logo_aos');
	$lax = get_query_var('section_logo_lax');
	$lax_class = $lax != '' ? 'lax' : '';
?>

<img
	alt='<?php echo esc_attr($image_alt); ?>'
	src='<?php echo esc_url($image_url); ?>'
	class='section-logo <?php echo sanitize_html_class($lax_class); ?>'
	<?php echo $lax; ?>
	<?php echo $aos; ?>
/>

<?php endif; ?>
