<?php

$number_value = get_post_meta($post->ID, 'number_value', true);
$number_of_what = get_post_meta($post->ID, 'number_of_what', true);
$number_description = get_post_meta($post->ID, 'number_description', true);

?>

<h3>
	<span class='number-value'>
		<?php echo $number_value ?>
	</span>

	<span class='number-of-what'>
		<?php echo $number_of_what; ?>
	</span>
</h3>

<p class='number-description'>
	<?php echo $number_description; ?>
</p>
