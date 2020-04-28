<?php get_header(); ?>
<?php
	get_template_part('template-parts/navbar'); ?>

<main id='page'>
	<?php
		set_query_var('title', 'Search Results for:');
		get_template_part('template-parts/content/title'); ?>

	<div
			id='page-items'
			class='default-container section-items <?php echo $image_align; ?>'>
		<?php
			set_query_var('section', 'page');
			if(have_posts()): while(have_posts()): the_post();
				get_template_part('template-parts/preset/wrapper');
			endwhile; endif; ?>
		<?php
			set_query_var('section', 'page');
			get_template_part('template-parts/frontpage/macy'); ?>

	</div>

	<div class='page-navigation default-container'>
		<?php previous_posts_link(); ?>
		<?php next_posts_link(); ?>
	</div>

</main>
<?php get_footer(); ?>
