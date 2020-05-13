<?php
	$section = get_query_var('section');

	set_query_var('animation_name', 'card_info');
	get_template_part('template-parts/content/animations');
	$info_aos = get_query_var('card_info_aos');
	$info_lax = get_query_var('card_info_lax');
	$info_lax_class = $info_lax != '' ? 'lax' : '';
?>

<div class='card card-<?php echo sanitize_html_class($section); ?>'>

<?php
	if(!in_array($section, array('number', 'testimonial', 'price'))):
		$image_src = get_the_post_thumbnail_url();
		$image_id = get_post_thumbnail_id(get_the_ID());
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

		if(!empty($image_src)):
			set_query_var('animation_name', 'card_image');
			get_template_part('template-parts/content/animations');
			$image_aos = get_query_var('card_image_aos');
			$image_lax = get_query_var('card_image_lax');
			$image_lax_class = $image_lax != '' ? 'lax' : ''; ?>

			<div class='card-image-container'>
				<img
					<?php
						set_query_var('shape_section', "${section}_image");
						get_template_part('template-parts/content/shape'); ?>
					src='<?php echo esc_url($image_src); ?>'
					alt='<?php echo esc_attr($image_alt); ?>'
					class='card-image <?php echo sanitize_html_class($image_lax_class); ?>'
					<?php echo $image_aos; ?>
					<?php echo $image_lax; ?>
				/>
			</div>

<?php
	endif;
		endif; ?>

	<div
			class='card-info <?php echo sanitize_html_class($info_lax_class); ?>'
			<?php echo $info_aos; ?>
			<?php echo $info_lax; ?>>

		<?php if(strpos($section, 'generic-') === 0): ?>
			<?php get_template_part('template-parts/preset/generic'); ?>
		<?php elseif(!in_array($section, array('client', 'contact', 'tech'))): ?>
			<?php get_template_part("template-parts/preset/${section}"); ?>
		<?php endif; ?>

	</div>

</div>
