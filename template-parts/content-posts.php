<?php

if(have_posts()): while(have_posts()): the_post(); ?>

<div>

	<?php if(has_post_thumbnail($post->ID)): ?>
		<img class='posts-image' src='<?php the_post_thumbnail_url(); ?>' />
	<?php endif; ?>

	<h3 class='title'>
		<?php the_title(); ?>
	</h3>

	<p class='excerpt'>
		<?php the_excerpt(); ?>
	</p>

	<p class='author'>
		<?php the_author(); ?>
	</p>

	<img class='avatar' src='<?php echo get_avatar_url($post->ID); ?>' />

	<p class='date'>
		<?php the_date(); ?>
	</p>

	<a href='<?php the_permalink(); ?>'>
		Promeni me!
	</a>

</div>

<?php endwhile; else: ?>

<h3 class='no-posts'>
	There are no posts to show!
</h3>

<?php endif; ?>
