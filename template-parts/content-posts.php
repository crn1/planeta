<?php

$section = get_query_var('section');
$item = get_query_var('item');

set_query_var('animation_name', 'card_info');
get_template_part('template-parts/content', 'animations');
$info_aos = get_query_var('card_info_aos');
$info_lax = get_query_var('card_info_lax');
$info_lax_class = $info_lax != '' ? 'lax' : '';

$read_more = esc_html__('Read More...', 'planeta');

if(have_posts()): while(have_posts()): the_post(); ?>

<div class='card'>

	<?php if(has_post_thumbnail($post->ID)):
		set_query_var('animation_name', 'card_image');
		get_template_part('template-parts/content', 'animations');
		$image_aos = get_query_var('card_image_aos');
		$image_lax = get_query_var('card_image_lax');
		$image_lax_class = $image_lax != '' ? 'lax' : '';
	?>
		<img
			<?php get_template_part('template-parts/content', 'shape'); ?>
			src='<?php the_post_thumbnail_url(); ?>'
			class='image <?php echo $image_lax_class; ?>'
			<?php echo $image_aos; ?>
			<?php echo $image_lax; ?>
		/>
	<?php endif; ?>

	<div
			class='info <?php echo $info_lax_class; ?>'
			<?php echo $info_aos; ?>
			<?php echo $info_lax; ?>>

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
