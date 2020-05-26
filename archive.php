<?php get_header(); ?>
<?php
	get_template_part('template-parts/navbar'); ?>

<main id='page'>
	<div class='search-title-container default-container'>
		<h2>
			<?php the_archive_title(); ?>
		</h2>
	</div>

	<div class='default-container'>
		<?php
			get_template_part('template-parts/content/results'); ?>
		<?php
			get_template_part('template-parts/content/navigation-links'); ?>
	</div>

</main>
<?php get_footer(); ?>
