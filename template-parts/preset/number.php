<?php

$number_value = get_post_meta($post->ID, 'number_value', true);
$number_of_what = get_post_meta($post->ID, 'number_of_what', true);
$number_description = get_post_meta($post->ID, 'number_description', true);
$number_url = get_post_meta($post->ID, 'number_url', true);
$number_url_text = get_post_meta($post->ID, 'number_url_text', true);

$hover_class = get_query_var('hover_class', 'hover-none');

?>

<h3 class='number-container'>
	<?php if(!empty($number_value)): ?>
		<span class='card-title number-value'>
			<?php echo $number_value ?>
		</span>
	<?php endif; ?>

	<?php if(!empty($number_value)): ?>
	<span class='number-of-what'>
		<?php echo $number_of_what; ?>
	</span>
	<?php endif; ?>
</h3>

<?php if(!empty($number_value)): ?>
<p class='number-description'>
	<?php echo $number_description; ?>
</p>
<?php endif; ?>

<?php if(!empty($number_url) && !empty($number_url_text)): ?>
<p class='number-url card-url'>
	<span class='relative <?php echo $hover_class; ?>'>
		<a class='button-link' href='<?php echo $number_url; ?>'>
			<?php echo $number_url_text; ?>
		</a>
	</span>
</p>
<?php endif; ?>
