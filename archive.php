<?php get_header(); ?>
<?php
	get_template_part('template-parts/navbar'); ?>

<main id='page'>
	<?php
		set_query_var('title', get_the_archive_title());
		get_template_part('template-parts/content/title'); ?>

	<div
			id='post-items'
			class='default-container section-items'>
		<?php
			set_query_var('section', 'post');
			if(have_posts()): while(have_posts()): the_post();
				get_template_part('template-parts/preset/wrapper');
			endwhile; endif;
			get_template_part('template-parts/frontpage/macy'); ?>

	</div>

	<div class='page-navigation default-container'>
		<?php $hover_class = get_query_var('hover_class', 'hover-none'); ?>
		<span class='previous-link relative <?php echo $hover_class; ?>'>
			<?php
				$previous_link = get_previous_posts_link();
				$previous_link = str_replace('<a', '<a class="button-link"', $previous_link);
				echo $previous_link; ?>
		</span>
		<span class='next-link relative <?php echo $hover_class; ?>'>
			<?php
				$next_link = get_next_posts_link();
				$next_link = str_replace('<a', '<a class="button-link"', $next_link);
				echo $next_link; ?>
		</span>
	</div>

</main>
<?php get_footer(); ?>
