<?php
	$title = get_query_var('title');

	set_query_var('animation_name', 'page_title');
	get_template_part('template-parts/content/animations');
	$page_aos = get_query_var('page_title_aos');
	$page_lax = get_query_var('page_title_lax');
	$lax = $page_lax != '' ? 'lax' : '';

	$featured_image = has_post_thumbnail() && !is_search() && !is_archive() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';

	$hover_class = get_query_var('hover_class', 'hover-none');
?>
<div
		class='page-title-container'
		style="background-image: url('<?php echo $featured_image; ?>');">

	<div class='page-title-overlay'></div>

	<?php
		$article_container = is_single() || is_page() ? 'article-container' : ''; ?>
	<div class='<?php echo $article_container; ?> default-container'>
		<?php
			if(has_tag() && !is_archive() && !is_search())
			{
				$tags = get_the_tags();
				foreach($tags as $tag)
				{
					$tag_link = get_tag_link( $tag->term_id ); ?>
					<span
							class='relative <?php echo $hover_class; ?> title-tag'>
						<a
								rel='tag'
								title='<?php echo $tag->name; ?>'
								href='<?php echo $tag_link; ?>'
								class='button-link <?php echo $tag->slug ?>'>
							<?php echo $tag->name; ?>
						</a>
					</span>
				<?php }
			}
		?>
		<h2
				class='page-title <?php echo $lax; ?>'
				<?php echo $page_lax; ?>
				<?php echo $page_aos; ?>>
			<?php echo $title; ?>
			<?php if(is_search()): ?>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</h2>
	</div>
</div>
