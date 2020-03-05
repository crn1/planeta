<?php get_header(); ?>
	<main>
		<article class='default-container'>
			<h1>
				<?php echo esc_html__('Search Results for: ', 'sigma') . get_search_query(); ?>
			</h1>
			<?php echo get_template_part('template-parts/content', 'postcards'); ?>
		</article>
	</main>
<?php get_footer(); ?>
