<?php

$layout = get_theme_mod('sections_layout', array());

set_query_var('animation_name', 'section_title');
get_template_part('template-parts/content', 'animations');
$title_aos = get_query_var('section_title_aos');
$title_lax = get_query_var('section_title_lax');
$title_lax_class = $title_lax != '' ? 'lax' : '';

set_query_var('animation_name', 'section_subtitle');
get_template_part('template-parts/content', 'animations');
$subtitle_aos = get_query_var('section_subtitle_aos');
$subtitle_lax = get_query_var('section_subtitle_lax');
$subtitle_lax_class = $subtitle_lax != '' ? 'lax' : '';

foreach($layout as $section):
	set_query_var('section', $section);
	$section_title = get_theme_mod("${section}_title", 'Block Title');
	$section_subtitle = get_theme_mod("${section}_subtitle", 'Block Subtitle');

	$card_preset = get_theme_mod("${section}_card_preset", 'none');
	$card_type = get_theme_mod("${section}_card_type", 'default');
	set_query_var('card_type', $card_type);

	$section_items = get_theme_mod("${section}_${card_preset}_items", array());

	$video = get_theme_mod("${section}_bg_type", 'static') == 'video' ? 'has-video' : '';
?>

	<section id='<?php echo $section; ?>' class='<?php echo $video; ?>'>

		<?php
			set_query_var('section', $section);
			get_template_part('template-parts/content', 'background'); ?>

		<div class='default-container'>

		<h2 class='section-title <?php echo $title_lax_class; ?>' <?php echo $title_lax; ?> <?php echo $title_aos; ?>>
				<?php echo $section_title; ?>
			</h2>

				<h3 class='section-subtitle <?php echo $subtitle_lax_class; ?>' <?php echo $subtitle_lax; ?> <?php echo $subtitle_aos; ?>>
				<?php echo $section_subtitle; ?>
			</h3>

			<?php if($card_preset != 'none'): ?>
				<div id='<?php echo $section?>-items' class='card-<?php echo $card_type; ?>-items'>

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
