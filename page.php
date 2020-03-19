<?php get_header(); ?>
<?php get_template_part('template-parts/header', 'navbar'); ?>
<main>
	<article>
		<?php if(have_posts()): while(have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', 'title'); ?>

		<div class='default-container'>
			<div class='content-container'>
				<aside class='sidebar-left'>
				<?php if(is_active_sidebar('page-left-sidebar')) {
					dynamic_sidebar('blog-left-sidebar');
				} ?>
				</aside>

				<div class='page-content'>
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>

				<aside class='sidebar-right'>
				<?php if(is_active_sidebar('page-right-sidebar')) {
					dynamic_sidebar('blog-right-sidebar');
				} ?>
				</aside>
			</div>

			<?php comments_template(); ?>
		</div>

		<?php endwhile; endif; ?>
	</article>
</main>
<?php get_template_part('template-parts/footer', 'notice'); ?>
<?php get_footer(); ?>
