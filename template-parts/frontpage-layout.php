<?php

set_query_var('animation_name', 'section_title');

$layout = get_theme_mod('sections_layout', array());

foreach($layout as $section):
	set_query_var('section', $section);

	$card_preset = get_theme_mod("${section}_card_preset", 'none');
	$section_items = get_theme_mod("${section}_${card_preset}_items", array());
?>

<section id='<?php echo $section; ?>'>

	<?php
		set_query_var('section', $section);
		get_template_part('template-parts/content', 'background'); ?>

	<div class='default-container'>

		<?php get_template_part('template-parts/frontpage', 'title'); ?>

		<?php get_template_part('template-parts/frontpage', 'subtitle'); ?>

		<?php if($card_preset != 'none'): ?>
			<div
					id='<?php echo $section?>-items'>

			<?php
				if($card_preset == 'posts')
				{
					get_template_part('template-parts/content', 'posts');
				}else{
					foreach($section_items as $item)
					{
						set_query_var('item', $item);
						get_template_part('template-parts/frontpage', 'card');
					}
				}
			?>

			<?php get_template_part('template-parts/frontpage', 'macy'); ?>

			</div>

		<?php endif; ?>

	</div>
</section>

<?php endforeach; ?>
