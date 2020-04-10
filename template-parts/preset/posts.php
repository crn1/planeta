<h3 class='title primary-text'>
	<?php the_title(); ?>
</h3>

<?php get_template_part('template-parts/content/post-info'); ?>

<p class='description secondary-text'>
	<?php the_excerpt(); ?>
</p>

<?php
	$hover_class = get_theme_mod('typography_button_link_hover', 'none');
	$url_tab = $item['url_tab'] ? '_blank' : ''; ?>

<p class='url'>
	<span class='relative hover-<?php echo $hover_class; ?>'>
		<a
				class='button-link'
				href='<?php echo the_permalink(); ?>'
				target='<?php echo $url_tab; ?>'>

			<?php echo esc_html__('Read More...', 'planeta'); ?>

		</a>
	</span>
</p>
