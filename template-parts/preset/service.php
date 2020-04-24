<?php
	$service_title = get_post_meta($post->ID, 'service_title', true);
	$service_description = get_post_meta($post->ID, 'service_description', true);
	$service_url = get_post_meta($post->ID, 'service_url', true);

	$hover_class = get_query_var('hover_class', 'hover-none');
?>

<h3 class='service-title'>
	<?php echo $service_title; ?>
</h3>

<p class='service-description'>
	<?php echo $service_description; ?>
</p>

<p class='service-url url'>
	<span class='relative <?php echo $hover_class; ?>'>
		<a
				class='button-link'
				href='<?php echo $service_url; ?>'>

			<?php echo esc_html__('Read More...', 'planeta'); ?>

		</a>
	</span>
</p>
