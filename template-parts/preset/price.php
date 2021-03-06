<?php

$price_title = get_the_title();
$price_tag = get_post_meta($post->ID, 'price_tag', true);
$price_before = get_post_meta($post->ID, 'price_before', true);
$price_after = get_post_meta($post->ID, 'price_after', true);
$price_highlight = get_post_meta($post->ID, 'price_highlight', true);
$price_description = get_post_meta($post->ID, 'price_description', true);

$price_url = get_post_meta(get_the_ID(), 'price_url', true);
$hover_class = get_query_var('hover_class', 'hover-none');

$image_src = get_the_post_thumbnail_url();
$image_id = get_post_thumbnail_id(get_the_ID());
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

?>

<?php if(!empty($image_src)): ?>
	<img
		src='<?php echo esc_url($image_src); ?>'
		alt='<?php echo esc_attr($image_alt); ?>'
		class='price-image'
	/>
<?php endif; ?>

<?php if(!empty($price_title)): ?>
<h3 class='price-title card-title'>
	<?php echo esc_html($price_title); ?>
</h3>
<?php endif; ?>

<?php if(!empty($price_tag)): ?>
<p class='price-tag'>
	<?php if(!empty($price_before)): ?>
	<span class='price-before'>
		<?php echo esc_html($price_before); ?>
	</span>
	<?php endif; ?>

	<span class='<?php echo $price_highlight === 'on' ? 'price-highlight' : ''; ?>'>
		<?php echo esc_html($price_tag); ?>
	</span>

	<?php if(!empty($price_after)): ?>
	<span class='price-after'>
		<?php echo esc_html($price_after); ?>
	</span>
	<?php endif; ?>
</p>
<?php endif; ?>

<?php if(!empty($price_description)): ?>
<p class='price-description'>
	<?php echo esc_html($price_description); ?>
</p>
<?php endif; ?>

<?php if(!empty($price_url)): ?>
<p class='card-url'>
	<span class='relative <?php echo sanitize_html_class($hover_class); ?>'>
		<a
				class='button-link'
				href='<?php echo esc_url($price_url); ?>'>

			<?php echo get_query_var('read_more', 'Read More...'); ?>

		</a>
	</span>
</p>
<?php endif; ?>
