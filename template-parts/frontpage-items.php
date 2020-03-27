<?php

$section = get_query_var('section');

$card_preset = get_theme_mod("${section}_card_preset", 'none');
$items = get_theme_mod("${section}_${card_preset}_items", array());

if($card_preset != 'none' && !empty($items)):
	$image_align = get_theme_mod("${section}_image_align", 'all-left');
	$masonry_num = get_theme_mod("${section}_masonry_num", 3);
	$image_align = $masonry_num == 1 ? $image_align : ''; ?>

<div
		class='section-items <?php echo $image_align; ?>'
		id='<?php echo $section?>-items'>

	<?php
		if($card_preset == 'posts')
		{
			get_template_part('template-parts/content', 'posts');
		}else{
			foreach($items as $item)
			{
				set_query_var('item', $item);
				get_template_part('template-parts/frontpage', 'card');
			}
		}
	?>

	<?php get_template_part('template-parts/frontpage', 'macy'); ?>

</div>
<?php endif; ?>
