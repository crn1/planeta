<?php
	$title = get_query_var('title');

	set_query_var('animation_name', 'page_title');
	get_template_part('template-parts/content/animations');
	$page_aos = get_query_var('page_title_aos');
	$page_lax = get_query_var('page_title_lax');
	$lax = $page_lax != '' ? 'lax' : '';
	$fittext = get_theme_mod('typography_page_title_fittext', false) ? 'fit-text' : '';

	$featured_image = has_post_thumbnail() && !is_search() && !is_archive() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';
?>
<div
		class='page-title-container'
		style="background-image: url('<?php echo $featured_image; ?>');">

	<div class='page-title-overlay'></div>

	<div class='default-container'>
		<h2
				class='page-title <?php echo $lax; ?> <?php echo $fittext; ?>'
				<?php echo $page_lax; ?>
				<?php echo $page_aos; ?>>
			<?php echo $title; ?>
			<?php get_search_form(); ?>
		</h2>
	</div>
</div>
