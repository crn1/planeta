<?php

$layout = get_theme_mod('sections_layout', array());

get_template_part('template-parts/frontpage', 'effects');
$title_classes = get_query_var('title_classes');
$title_lax = get_query_var('title_lax');
$subtitle_classes = get_query_var('subtitle_classes');
$subtitle_lax = get_query_var('subtitle_lax');

foreach($layout as $section):
	set_query_var('section', $section);
	$section_title = get_theme_mod("${section}_title", 'Block Title');
	$section_subtitle = get_theme_mod("${section}_subtitle", 'Block Subtitle');

	$section_type = get_theme_mod("${section}_card_preset", 'none');
	$section_items = get_theme_mod("${section}_${section_type}_items", array());
?>

	<section id='<?php echo "section-${index}"; ?>'>
		<div class='default-container'>

			<h2 class='heading-title frontpage-title<?php echo $title_classes; ?>' <?php echo $title_lax; ?>>
				<?php echo $section_title; ?>
			</h2>

			<h3 class='heading-subtitle frontpage-subtitle<?php echo $subtitle_classes; ?>' <?php echo $subtitle_lax; ?>>
				<?php echo $section_subtitle; ?>
			</h3>

			<?php if($section_type != 'none'): ?>
				<div id='section-<?php echo $index; ?>-items'>
				<?php
					if($section_type == 'posts')
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
				</div>
				<?php get_template_part('template-parts/frontpage', 'macy'); ?>
			<?php endif; ?>

		</div>
	</section>

<?php endforeach; ?>
