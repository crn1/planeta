<?php

$section = get_query_var('section'); ?>

<?php if($section === 'contact'): ?>
	<?php get_template_part('template-parts/frontpage/contact-form'); ?>

<?php else: ?>

<div
		id='<?php echo esc_attr($section); ?>-items'
		class='section-items'>

	<?php
		$args = array(
			'post_type'   		=> $section,
			'post_status' 		=> 'publish',
			'posts_per_page'	=> intval(get_theme_mod("${section}_number_of_items")),
		);
		$query = new WP_Query($args);

		if($query->have_posts()): while($query->have_posts()): $query->the_post();
			get_template_part('template-parts/preset/wrapper');
		endwhile; endif;
	?>
</div>

<?php
$enable_masonry = get_theme_mod("${section}_enable_masonry", false);
if($enable_masonry): ?>
	<?php get_template_part('template-parts/frontpage/macy'); ?>
<?php endif; ?>

<?php endif; ?>
