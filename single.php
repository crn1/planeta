<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		set_query_var('title', get_the_title());
		get_template_part('template-parts/content/title'); ?>

	<div class='default-container page-container'>
		<aside class='sidebar sidebar-left'>
			<div class='sidebar-inner'>
				<?php if(is_active_sidebar('blog-left-sidebar')) {
					dynamic_sidebar('blog-left-sidebar');
				} ?>
			</div>
		</aside>

		<article class='article-container'>
			<?php get_template_part('template-parts/content/post-info'); ?>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</article>

		<aside class='sidebar sidebar-right'>
			<div class='sidebar-inner'>
				<?php if(is_active_sidebar('blog-right-sidebar')) {
					dynamic_sidebar('blog-right-sidebar');
				} ?>
			</div>
		</aside>
	</div>

	<div class="default-container page-container">
		<div class="sidebar"></div>
		<div class="article-container">
			<?php comments_template(); ?>
		</div>
		<div class="sidebar"></div>
	</div>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
