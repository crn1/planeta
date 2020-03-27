<h3 class='title primary-text'>
	<?php the_title(); ?>
</h3>

<p class='description secondary-text'>
	<?php the_excerpt(); ?>
</p>

<p class='author'>
	<?php the_author(); ?>
</p>

<img class='avatar' src='<?php echo get_avatar_url($post->ID); ?>' />

<p class='date'>
	<?php the_date(); ?>
</p>

<p class='url'>
	<a href='<?php the_permalink(); ?>'>
		<?php echo esc_html__('Read More...', 'planeta'); ?>
	</a>
</p>
