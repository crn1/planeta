<?php get_header(); ?>
<?php get_template_part('template-parts/header', 'navbar'); ?>
<main>
	<article id='page-container' class='default-container'>
		<h2 class='page-title'>
			<?php echo esc_html__('Search Results for: ', 'sigma') . get_search_query(); ?>
		</h2>

		<div id='#page-items'>
			<?php
				$card_type = get_theme_mod('page_card_type', 'default');
				set_query_var('card_type', $card_type);
				get_template_part('template-parts/content', 'posts'); ?>
		</div>

		<?php
			set_query_var('section', 'page');
			get_template_part('template-parts/frontpage', 'macy'); ?>

		<?php previous_posts_link(); ?>
		<?php next_posts_link(); ?>
	</article>
</main>
<?php get_template_part('template-parts/footer', 'notice'); ?>
<?php get_footer(); ?>
