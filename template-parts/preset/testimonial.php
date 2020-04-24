<?php
	$author_name = get_post_meta($post->ID, 'author_name', true);
	$author_about = get_post_meta($post->ID, 'author_about', true);
	$testimonial_excerpt = get_post_meta($post->ID, 'testimonial_excerpt', true);
	$testimonial_full = get_post_meta($post->ID, 'testimonial_full', true);
?>

<div class='testimonial-author-container'>
	<h3 class='testimonial-author-name'>
		<?php echo $author_name; ?>
	</h3>

	<p class='testimonial-author-description'>
		<?php echo $author_about; ?>
	</p>
</div>

<p class='testimonial-excerpt'><?php echo $testimonial_excerpt; ?></p>

<p class='testimonial-full'>
	<?php echo $testimonial_full; ?>
</p>
