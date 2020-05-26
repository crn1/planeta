<div class='page-navigation'>
	<?php $hover_class = get_query_var('hover_class', 'hover-none'); ?>

	<span class='previous-link relative <?php echo esc_attr($hover_class); ?>'>
		<?php
			$previous_link = get_previous_posts_link();
			$previous_link = str_replace('<a', '<a class="button-link"', $previous_link);
			echo $previous_link; ?>
	</span>

	<span class='next-link relative <?php echo esc_attr($hover_class); ?>'>
		<?php
			$next_link = get_next_posts_link();
			$next_link = str_replace('<a', '<a class="button-link"', $next_link);
			echo $next_link; ?>
	</span>

</div>
