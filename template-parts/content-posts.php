<?php

$animation_name = get_query_var('animation_name');
if(!isset($animation_name)) { $animation_name = 'card'; }
set_query_var('animation_name', 'card');

get_template_part('template-parts/content', 'animations');
$card_aos = get_query_var('card_aos');
$card_lax = get_query_var('card_lax');
$lax = $card_lax != '' ? 'lax' : '';

$read_more = esc_html__('Read More...', 'planeta');

if(have_posts()): while(have_posts()): the_post(); ?>

<div class='card <?php echo $lax; ?>' <?php echo $card_lax; ?> <?php echo $card_aos; ?>>

	<?php if(has_post_thumbnail($post->ID)): ?>
		<img class='image' src='<?php the_post_thumbnail_url(); ?>' />
	<?php endif; ?>

	<div class='card-info'>
		<h3 class='title'>
			<?php the_title(); ?>
		</h3>

		<p class='description'>
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
				<?php echo $read_more; ?>
			</a>
		</p>
	</div>

</div>

<?php endwhile; else: ?>

<h3 class='no-posts'>
	There are no posts to show!
</h3>

<?php endif; ?>
