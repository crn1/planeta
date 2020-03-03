<?php

if(have_posts()): while(have_posts()): the_post();

$img_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'large'); ?>

<div>

	<?php if(has_post_thumbnail($post->ID)): ?>
		<img class='posts-image' src='<?php echo $img_src; ?>' />
	<?php endif; ?>

	<h3 class='posts-title'>
		<?php the_title(); ?>
	</h3>

	<p class='posts-excerpt'>
		<?php the_excerpt(); ?>
	</p>

	<p class='posts-author'>
		<?php the_author(); ?>
	</p>

	<img class='posts-avatar' src='<?php echo get_avatar_url($post->ID); ?>' />

	<p class='posts-date'>
		<?php the_date(); ?>
	</p>

	<a href='<?php the_permalink(); ?>' class='posts-url'>
		Promeni me!
	</a>

</div>

<?php endwhile; else: ?>

<div class='no-posts'>
	There are no posts to show!
</div>

<?php endif; ?>
