<?php

$feature_url = get_post_meta($post->ID, 'feature_url', true);
$feature_url_text = get_post_meta($post->ID, 'feature_url_text', true);
$hover_class = get_query_var('hover_class', 'hover-none');

$title = get_the_title();
if(!empty($title)): ?>
<h3 class='card-title'>
	<?php echo $title; ?>
</h3>
<?php endif; ?>

<?php
$feature_description = get_post_meta($post->ID, 'feature_description', true);
if(!empty($feature_description)): ?>
<p>
	<?php echo $feature_description; ?>
</p>
<?php endif; ?>

<?php if(!empty($feature_url) && !empty($feature_url_text)): ?>
<p class='card-url'>
	<span class='relative <?php echo $hover_class; ?>'>
		<a
				class='button-link'
				href='<?php echo $feature_url; ?>'>

			<?php echo $feature_url_text; ?>

		</a>
	</span>
</p>
<?php endif; ?>
