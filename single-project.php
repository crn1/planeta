<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

<?php
	set_query_var('title', get_the_title());
	get_template_part('template-parts/content/title'); ?>

	<article
			id='post-<?php echo the_ID(); ?>'
			<?php post_class('article-container default-container'); ?>>
		<?php
			set_query_var('print_category', true); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>

		<div id='page-sidebar-container'>
			<?php if(is_active_sidebar('page-sidebar-left')): ?>
				<div id="page-sidebar-left">
					<?php dynamic_sidebar('page-sidebar-left'); ?>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('page-sidebar-right')): ?>
				<div id="page-sidebar-right">
					<?php dynamic_sidebar('page-sidebar-right'); ?>
				</div>
			<?php endif; ?>
		</div>
	</article>

	<?php get_template_part('template-parts/content/related-posts'); ?>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>