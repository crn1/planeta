<?php
	$name = get_post_meta($post->ID, 'member_name', true);
	$position = get_post_meta($post->ID, 'member_position', true);
	$description = get_post_meta($post->ID, 'member_description', true);
?>

<h3 class='member-title'>
	<?php echo $name; ?>
</h3>

<p class='member-position'>
	<?php echo $position; ?>
</p>

<p class='member-description'>
	<?php echo $description; ?>
</p>
