<?php

$title = get_the_title();
if(!empty($title)): ?>
<h3 class='card-title'>
	<?php echo $title; ?>
</h3>
<?php endif; ?>

<?php
$content = get_the_content();
if(!empty($content)): ?>
<p>
	<?php echo $content; ?>
</p>
<?php endif; ?>

<?php $hover_class = get_query_var('hover_class', 'hover-none'); ?>

<p class='card-url'>
	<span class='relative <?php echo sanitize_html_class($hover_class); ?>'>
		<a
				class='button-link'
				href='<?php echo the_permalink(); ?>'>

			<?php echo esc_html__('Read More...', 'planeta'); ?>

		</a>
	</span>
</p>
