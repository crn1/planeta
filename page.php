<?php get_header(); ?>
	<main>
		<article class='default-container'>
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
				<h2 class='title-heading'>
					<?php the_title(); ?>
				</h2>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</article>
		<?php if(is_active_sidebar('blog-left-sidebar')): ?>
			<aside>
				<?php dynamic_sidebar('blog-left-sidebar'); ?>
			</aside>
		<?php endif; ?>
		<?php if(is_active_sidebar('blog-right-sidebar')): ?>
			<aside>
				<?php dynamic_sidebar('blog-right-sidebar'); ?>
			</aside>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>
