<?php

$section = get_query_var('section'); ?>

<?php if($section === 'contact'): ?>
	<?php get_template_part('template-parts/frontpage/contact-form'); ?>

<?php else: ?>

<div
		id='<?php echo $section; ?>-items'
		class='section-items'>

	<?php
		$args = array(
			'post_type'   => $section,
			'post_status' => 'publish',
		);
		$query = new WP_Query($args);

		if($query->have_posts()): while($query->have_posts()): $query->the_post();
			get_template_part('template-parts/preset/wrapper');
		endwhile; endif;
	?>
</div>
<?php //endif; ?>

<?php if(!in_array($section, array('tech', 'client'))): ?>
	<?php get_template_part('template-parts/frontpage/macy'); ?>
<?php endif; ?>

<?php endif; ?>

