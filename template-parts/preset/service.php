<?php
	$service_title = get_post_meta($post->ID, 'service_title', true);
	$service_description = get_post_meta($post->ID, 'service_description', true);

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
