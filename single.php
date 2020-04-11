<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		set_query_var('title', get_the_title());
		get_template_part('template-parts/content/title'); ?>

	<div class='default-container page-container'>
		<aside class='sidebar sidebar-left'>
			<span class='sidebar-inner'>
				<?php if(is_active_sidebar('article-sidebar-left')) {
					dynamic_sidebar('article-sidebar-left');
				} ?>
			</span>
		</aside>

		<article
				id='post-<?php echo the_ID(); ?>'
				class='article-container <?php post_class(); ?>'>
			<?php get_template_part('template-parts/content/post-info'); ?>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</article>

		<aside class='sidebar sidebar-right'>
			<span class='sidebar-inner'>
				<?php if(is_active_sidebar('article-sidebar-right')) {
					dynamic_sidebar('article-sidebar-right');
				} ?>
			</span>
		</aside>
	</div>

	<?php if(have_comments()): ?>
		<div class="default-container page-container">
			<div class="sidebar"></div>
			<div class="article-container">
				<?php comments_template(); ?>
			</div>
			<div class="sidebar"></div>
		</div>
	<?php endif; ?>

	<?php get_template_part('template-parts/content/related-posts'); ?>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
