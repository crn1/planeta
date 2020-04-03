<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		set_query_var('title', get_the_title());
		get_template_part('template-parts/content/title'); ?>

	<div class='default-container article-container'>
		<aside class='sidebar sidebar-left'>
			<span class="sidebar-inner">
				<?php if(is_active_sidebar('page-left-sidebar')) {
					dynamic_sidebar('page-left-sidebar');
				} ?>
			</span>
		</aside>

		<article>
			<?php the_content(); ?>
		</article>

		<aside class='sidebar sidebar-right'>
			<span class="sidebar-inner">
				<?php if(is_active_sidebar('page-right-sidebar')) {
					dynamic_sidebar('page-right-sidebar');
				} ?>
			</span>
		</aside>
	</div>

	<div class="default-container page-container">
		<?php wp_link_pages(); ?>

		<?php comments_template(); ?>
	</div>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
