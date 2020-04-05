<?php

$section = get_query_var('section');

$card_preset = get_theme_mod("${section}_card_preset", 'none');
$items = get_theme_mod("${section}_${card_preset}_items", array());
set_query_var('card_preset', $card_preset);

if($card_preset != 'none' && (!empty($items) || $card_preset == 'posts')):
	$image_align = get_theme_mod("${section}_image_align", 'all-left');
	$masonry_num = get_theme_mod("${section}_masonry_num", 3);
	$image_align = $masonry_num == 1 ? $image_align : ''; ?>

<div
		id='<?php echo $section; ?>-items'
		class='section-items <?php echo $image_align; ?>'>

	<?php
		if($card_preset == 'posts')
		{
			if(have_posts()): while(have_posts()): the_post();
				get_template_part('template-parts/preset/wrapper');
			endwhile; endif;
		}else{
			foreach($items as $item)
			{
				set_query_var('item', $item);
				get_template_part('template-parts/preset/wrapper');
			}
		}
	?>
</div>
<?php endif; ?>

<?php get_template_part('template-parts/frontpage/macy'); ?>
