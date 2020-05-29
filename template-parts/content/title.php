<?php
	set_query_var('animation_name', 'page_title');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('page_title_aos');
	$lax = get_query_var('page_title_lax');
	$lax_class = !empty($lax) ? 'lax' : '';

	$featured_image = has_post_thumbnail() && !is_search() && !is_archive() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';
?>
<div
		class='page-title-container'
		style="background-image: url('<?php echo esc_url($featured_image); ?>');">
	<div class='article-container default-container'>
		<h2
				class='page-title <?php echo sanitize_html_class($lax_class); ?>'
				<?php echo $lax; ?>
				<?php echo $aos; ?>>
			<?php the_title(); ?>
		</h2>
	</div>

</div>
