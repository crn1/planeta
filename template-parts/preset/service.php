<?php
	$service_title = get_post_meta($post->ID, 'service_title', true);
	$service_description = get_post_meta($post->ID, 'service_description', true);
	$service_url = get_post_meta($post->ID, 'service_url', true);

	$hover_class = get_query_var('hover_class', 'hover-none');
?>

<?php if(!empty($service_title)): ?>
<h3 class='service-title card-title'>
	<?php echo esc_html($service_title); ?>
</h3>
<?php endif; ?>

<?php if(!empty($service_description)): ?>
<p>
	<?php echo esc_html($service_description); ?>
</p>
<?php endif; ?>

<?php if(!empty($service_url)): ?>
<p class='service-url card-url'>
	<span class='relative <?php echo sanitize_html_class($hover_class); ?>'>
		<a
				class='button-link'
				href='<?php echo esc_url($service_url); ?>'>

			<?php echo esc_html__('Read More...', 'planeta'); ?>

		</a>
	</span>
</p>
<?php endif; ?>
