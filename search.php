<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<?php
		$title = esc_html__('Search Results for: ', 'sigma');
		set_query_var('title', $title);
		get_template_part('template-parts/content/title'); ?>

	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<div class='default-container page-container'>
		<aside class='sidebar sidebar-left'>
			<span class="sidebar-inner">
				<?php if(is_active_sidebar('page-left-sidebar')) {
					dynamic_sidebar('page-left-sidebar');
				} ?>
			</span>
		</aside>

		<article class='article-container'>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
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
		<div class="sidebar"></div>
		<div class='article-container'>
			<?php comments_template(); ?>
		</div>
		<div class="sidebar"></div>
	</div>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
