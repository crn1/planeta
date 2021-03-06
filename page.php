<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main>
	<?php if(have_posts()): while(have_posts()) : the_post(); ?>

	<?php
		get_template_part('template-parts/content/title'); ?>

	<article
			id='post-<?php echo the_ID(); ?>'
			<?php post_class('article-container default-container'); ?>>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>

		<div id='page-sidebar-container'>
			<?php if(is_active_sidebar('page-sidebar-left')): ?>
				<ul id="page-sidebar-left">
					<?php dynamic_sidebar('page-sidebar-left'); ?>
				</ul>
			<?php endif; ?>

			<?php if(is_active_sidebar('page-sidebar-right')): ?>
				<ul id="page-sidebar-right">
					<?php dynamic_sidebar('page-sidebar-right'); ?>
				</ul>
			<?php endif; ?>
		</div>

		<?php comments_template(); ?>
	</article>

	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
