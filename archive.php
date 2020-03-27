<?php get_header(); ?>
<?php
	set_query_var('title', get_the_title());

	$card_type = get_theme_mod('page_card_type', 'default');
	set_query_var('card_type', $card_type); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<article id='page-container'>
		<?php
			set_query_var('title', 'Archive');
			get_template_part('template-parts/content/title'); ?>

		<div class='default-container'>
			<div id='page-items' class='card-<?php echo $card_type; ?>-items'>
				<?php
					$card_type = get_theme_mod('page_card_type', 'default');
					set_query_var('card_type', $card_type);
					get_template_part('template-parts/content/posts'); ?>
			</div>

			<?php
				set_query_var('section', 'page');
				get_template_part('template-parts/frontpage/macy'); ?>

			<?php previous_posts_link(); ?>
			<?php next_posts_link(); ?>
		</div>
	</article>
</main>
<?php get_footer(); ?>
