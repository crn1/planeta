<?php get_header(); ?>
	<main class='default-container'>
		<?php if(is_active_sidebar('blog-left-sidebar')): ?>
			<aside>
				<?php dynamic_sidebar('blog-left-sidebar'); ?>
			</aside>
		<?php endif; ?>
		<?php if(have_posts()): while(have_posts()) : the_post(); ?>
			<article <?php post_class(); ?>>
				<h2 class='title-heading'>
					<?php the_title(); ?>
				</h2>
				<?php if(has_post_thumbnail()): ?>
					<img src='<?php the_post_thumbnail_url(); ?>' />
				<?php endif; ?>
				<?php the_content(); ?>
				<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
				<?php previous_posts_link(); ?>
				<?php next_posts_link(); ?>
				<?php comments_template(); ?>
			</article>
		<?php endwhile; endif; ?>
		<?php if(is_active_sidebar('blog-right-sidebar')): ?>
			<aside>
				<?php dynamic_sidebar('blog-right-sidebar'); ?>
			</aside>
		<?php endif; ?>
		<?php wp_link_pages(); ?>
	</main>
<?php get_footer(); ?>
