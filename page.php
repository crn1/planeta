<?php get_header(); ?>
	<main>
		<?php if(is_active_sidebar('blog-left-sidebar')): ?>
			<aside>
				<?php dynamic_sidebar('blog-left-sidebar'); ?>
			</aside>
		<?php endif; ?>
		<article class='default-container'>
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				<h2 class='title-heading'>
					<?php the_title(); ?>
				</h2>
				<?php if(has_post_thumbnail()): ?>
					<img src='<?php the_post_thumbnail_url(); ?>' />
				<?php endif; ?>
				<?php the_content(); ?>
				<?php comments_template(); ?>
			<?php endwhile; endif; ?>
		</article>
		<?php if(is_active_sidebar('blog-right-sidebar')): ?>
			<aside>
				<?php dynamic_sidebar('blog-right-sidebar'); ?>
			</aside>
		<?php endif; ?>
		<?php wp_link_pages(); ?>
	</main>
<?php get_footer(); ?>
