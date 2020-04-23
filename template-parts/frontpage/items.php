<?php

$section = get_query_var('section'); ?>

<?php //$items = get_theme_mod("${section}_${card_preset}_items", array());
//set_query_var('card_preset', $card_preset);

/*if($section != 'none' && (!empty($items) || $card_preset == 'posts')):
	$image_align = get_theme_mod("${section}_image_align", 'all-left');
	$masonry_num = get_theme_mod("${section}_masonry_num", 3);
	$image_align = $masonry_num == 1 ? $image_align : ''; */ ?>

<div
		id='<?php echo $section; ?>-items'
		class='section-items <?php echo $image_align; ?>'>

	<?php
		if(have_posts()): while(have_posts()): the_post();
			get_template_part('template-parts/preset/wrapper');
		endwhile; endif;
	?>
</div>
<?php //endif; ?>

<?php if(!in_array($section, array('tech', 'clients'))): ?>
	<?php get_template_part('template-parts/frontpage/macy'); ?>
<?php endif; ?>
