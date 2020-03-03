<?php get_header(); ?>
	<main>
		<article class='default-container'>
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
					<h2 class='title-heading'>
						<?php the_title(); ?>
					</h2>
				<?php the_content(); ?>
				<?php comments_template(); ?>
			<?php endwhile; endif; ?>
		</article>
	</main>
<?php get_footer(); ?>
