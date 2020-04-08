<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		set_query_var('title', get_the_title());
		get_template_part('template-parts/content/title'); ?>

	<div class='default-container page-container'>
		<article
				id='post-<?php echo the_ID(); ?>
				class='article-container <?php post_class(); ?>'>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
			<?php comments_template(); ?>
		</article>
	</div>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
