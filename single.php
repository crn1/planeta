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
			<?php the_content(); ?>

			<div class='info'>
				<div class='user'>
				<?php
					$font_size = get_theme_mod('typography_main_size', 16);
					echo get_avatar(get_the_author_meta('ID'), $font_size*2);
					the_author();
				?>
				</div>
				<?php the_date(); ?>
			</div>

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
