<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		set_query_var('title', get_the_title());
		get_template_part('template-parts/content/title'); ?>

	<div class='default-container page-container'>
		<aside class='sidebar sidebar-left'>
			<div class='sidebar__inner'>
				<?php if(is_active_sidebar('page-left-sidebar')) {
					dynamic_sidebar('page-left-sidebar');
				} ?>
			</div>
		</aside>

		<article>
			<?php the_content(); ?>
		</article>

		<aside class='sidebar sidebar-right'>
			<div class='sidebar__inner'>
				<?php if(is_active_sidebar('page-right-sidebar')) {
					dynamic_sidebar('page-right-sidebar');
				} ?>
			</div>
		</aside>
	</div>

	<div class="default-container article-container">
		<?php wp_link_pages(); ?>

		<?php comments_template(); ?>
	</div>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
