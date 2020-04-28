<?php

$project_url = get_post_meta($post->ID, 'project_url', true);
$project_url_text = get_post_meta($post->ID, 'project_url_text', true);
$hover_class = get_query_var('hover_class', 'hover-none');

$title = get_the_title();
if(!empty($title)): ?>
<h3 class='card-title'>
	<?php echo $title; ?>
</h3>
<?php endif; ?>

<?php
$project_description = get_post_meta($post->ID, 'project_description', true);
if(!empty($project_description)): ?>
<p>
	<?php echo $project_description; ?>
</p>
<?php endif; ?>

<?php if(!empty($project_url) && !empty($project_url_text)): ?>
<p class='card-url'>
	<span class='relative <?php echo $hover_class; ?>'>
		<a
				class='button-link'
				href='<?php echo $project_url; ?>'>

			<?php echo $project_url_text; ?>

		</a>
	</span>
</p>
<?php endif; ?>
