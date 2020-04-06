<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		set_query_var('title', get_the_title());
		get_template_part('template-parts/content/title'); ?>

	<div class='default-container page-container'>
		<aside class='sidebar sidebar-left'>
			<span class='sidebar-inner'>
				<?php if(is_active_sidebar('article-sidebar-left')) {
					dynamic_sidebar('article-sidebar-right');
				} ?>
			</span>
		</aside>

		<article class='article-container'>
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

	<?php if(is_active_sidebar('article-bottom-area')): ?>
		<section id="article_bottom">
			<?php
				set_query_var('section', 'article_bottom');
				get_template_part('template-parts/content/background'); ?>
			<div
					id='article_bottom-items'
					class='default-container section-items'>
				<?php dynamic_sidebar('article-bottom-area'); ?>
			</div>
		</section>
		<?php
			get_template_part('template-parts/frontpage/macy'); ?>
	<?php endif; ?>

	<div class="default-container page-container">
		<div class="sidebar"></div>
		<div class="article-container">
			<?php comments_template(); ?>
		</div>
		<div class="sidebar"></div>
	</div>

	<?php get_template_part('template-parts/content/related-posts'); ?>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
