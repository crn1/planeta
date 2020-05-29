<?php get_header(); ?>
<?php
	get_template_part('template-parts/navbar'); ?>

<main id='page'>

	<div class='search-title-container default-container'>
		<h2>
			<?php esc_html_e('Search Results for:', 'planeta'); ?>
		</h2>
		<?php get_search_form(); ?>
	</div>

	<div class='default-container'>
		<?php
			get_template_part('template-parts/content/results'); ?>
	</div>

</main>
<?php get_footer(); ?>
