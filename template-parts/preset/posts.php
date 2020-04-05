<h3 class='title primary-text'>
	<?php the_title(); ?>
</h3>

<?php get_template_part('template-parts/content/post-info'); ?>

<p class='description secondary-text'>
	<?php the_excerpt(); ?>
</p>

<p class='url <?php echo get_theme_mod('typography_links_hover', 'none'); ?>'>
	<a class='button-link' href='<?php the_permalink(); ?>'>
		<?php echo esc_html__('Read More...', 'planeta'); ?>
	</a>
</p>
