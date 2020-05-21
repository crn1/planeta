<?php
	set_query_var('animation_name', 'page_title');
	get_template_part('template-parts/content/animations');
	$page_aos = get_query_var('page_title_aos');
	$page_lax = get_query_var('page_title_lax');
	$lax = $page_lax != '' ? 'lax' : '';

	$featured_image = has_post_thumbnail() && !is_search() && !is_archive() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';
?>
<div
		class='page-title-container'
		style="background-image: url('<?php echo esc_url($featured_image); ?>');">

	<div class='article-container default-container'>
		<?php
			if(has_tag() && !is_archive() && !is_search())
			{
				$tags = get_the_tags();
				foreach($tags as $tag)
				{
					$tag_link = get_tag_link( $tag->term_id ); ?>
					<a
							rel='tag'
							title='<?php echo esc_attr($tag->name); ?>'
							href='<?php echo esc_url($tag_link); ?>'
							class='title-tag button-link <?php echo sanitize_html_class($tag->slug); ?>'>
						<?php echo esc_html($tag->name); ?>
					</a>
				<?php }
			}
		?>
		<h2
				class='page-title <?php echo sanitize_html_class($lax); ?>'
				<?php echo esc_attr($page_lax); ?>
				<?php echo esc_attr($page_aos); ?>>
			<?php the_title(); ?>
		</h2>
	</div>

</div>
