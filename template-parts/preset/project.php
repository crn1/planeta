<?php

$title = get_the_title();
if(!empty($title)): ?>
<h3 class='card-title'>
	<?php echo $title; ?>
</h3>
<?php endif; ?>

<?php
$excerpt = get_the_excerpt();
if(!empty($excerpt) && get_theme_mod('excerpt_length', 25) > 0): ?>
<p>
	<?php echo $excerpt; ?>
</p>
<?php endif; ?>

<?php $hover_class = get_query_var('hover_class', 'hover-none'); ?>

<p class='card-url'>
	<span class='relative <?php echo sanitize_html_class($hover_class); ?>'>
		<a
				class='button-link'
				href='<?php the_permalink(); ?>'>

			<?php echo get_query_var('read_more', 'Read More...'); ?>

		</a>
	</span>
</p>
