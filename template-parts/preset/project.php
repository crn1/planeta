<?php
	$title = get_post_meta($post->ID, 'project_title', true);
	$description = get_post_meta($post->ID, 'project_description', true);

	$url = get_post_meta($post->ID, 'project_url', true);
	$hover_class = get_query_var('hover_class', 'hover-none');
?>

<h3 class='project-title'>
	<?php echo $title; ?>
</h3>

<p class='project-description'>
	<?php echo $description; ?>
</p>

<p class='project-url url'>
	<span class='relative <?php echo $hover_class; ?>'>
		<a
				class='button-link'
				href='<?php echo $url; ?>'
				target='<?php echo $target; ?>'>

			<?php echo esc_html__('Read More...', 'planeta'); ?>

		</a>
	</span>
</p>
