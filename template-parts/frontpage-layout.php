<?php
function has_prefix($string, $prefix)
{
	return substr($string, 0, strlen($prefix)) == $prefix;
}

$layout = get_theme_mod('blocks_layout', array('landing', 'portfolio', 'clients', 'testemonials'));

get_template_part('template-parts/frontpage', 'effects');
$title_classes = get_query_var('title_classes');
$title_lax = get_query_var('title_lax');
$subtitle_classes = get_query_var('subtitle_classes');
$subtitle_lax = get_query_var('subtitle_lax');

foreach($layout as $section):
	set_query_var('section', $section);
	$bg_type = get_theme_mod($section . '_bg_type', 'static') === 'static' ? $section . '-bg' : '';
	$section_title = get_theme_mod("${section}_title", 'Block Title');
	$section_subtitle = get_theme_mod("${section}_subtitle", 'Block Subtitle');
	$section_items = get_theme_mod("${section}_items", array());
?>

	<section class='<?php echo $bg_type ?>'>

		<div class='default-container'>
			<h2 class='heading-title frontpage-title<?php echo $title_classes; ?>' <?php echo $title_lax; ?>>
				<?php echo $section_title; ?>
			</h2>
			<h3 class='heading-subtitle frontpage-subtitle<?php echo $subtitle_classes; ?>' <?php echo $subtitle_lax; ?>>
				<?php echo $section_subtitle; ?>
			</h3>
			<?php

				if(!has_prefix($section, 'landing'))
				{
					echo "<div id='${section}-items-container'>";

					if(has_prefix($section, 'posts'))
					{
						get_template_part('template-parts/content', 'posts');
					}else{
						foreach($section_items as $item)
						{
							set_query_var('item', $item);
							get_template_part('template-parts/frontpage', 'card');
						}
					}

					echo '</div>';
				}
			?>

			<?php get_template_part('template-parts/frontpage', 'macy'); ?>

		</div>
	</section>

<?php endforeach; ?>
