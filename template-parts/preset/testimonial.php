<?php
	$author_name = get_post_meta($post->ID, 'author_name', true);
	$author_about = get_post_meta($post->ID, 'author_about', true);
	$testimonial_excerpt = get_post_meta($post->ID, 'testimonial_excerpt', true);
	$testimonial_full = get_post_meta($post->ID, 'testimonial_full', true);
?>

<?php if(!empty($testimonial_excerpt)): ?>
<h3 class='card-title testimonial-excerpt'>
	<?php echo esc_html($testimonial_excerpt); ?>
</h3>
<?php endif; ?>

<?php if(!empty($testimonial_full)): ?>
<p class='testimonial-full'>
	<?php echo esc_html($testimonial_full); ?>
</p>
<?php endif; ?>

<div class='testimonial-author-container'>

<?php
	$image_src = get_the_post_thumbnail_url();
	$image_id = get_post_thumbnail_id(get_the_ID());
	$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

	if(!empty($image_src)): ?>
		<img
			src='<?php echo esc_url($image_src); ?>'
			alt='<?php echo esc_attr($image_alt); ?>'
			class='testimonial-avatar'
		/>
	<?php endif; ?>

	<div class='testimonial-author-info'>
		<?php if(!empty($author_name)): ?>
		<p class='testimonial-author-name'>
			<?php echo esc_html($author_name); ?>
		</p>
		<?php endif; ?>

		<?php if(!empty($author_about)): ?>
		<p class='testimonial-author-description'>
			<?php echo esc_html($author_about); ?>
		</p>
		<?php endif; ?>
	</div>
</div>
