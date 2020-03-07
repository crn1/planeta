<?php
function has_prefix($string, $prefix)
{
	return substr($string, 0, strlen($prefix)) == $prefix;
}

get_header();
?>
<main id='main-frontpage'>
	<?php
		$layout = get_theme_mod('blocks_layout', array());
		foreach($layout as $section):
			$bg_type = get_theme_mod($section . '_bg_type', 'static') === 'static' ? $section . '-bg' : '';
			$section_title = get_theme_mod("${section}_title", 'Block Title');
			$section_subtitle = get_theme_mod("${section}_subtitle", 'Block Subtitle');
			$section_items = get_theme_mod("${section}_items", array());
	?>
		<section class='<?php echo $bg_type ?>'>

			<div class='default-container'>

				<h2 class='heading-title frontpage-title'>
					<?php echo $section_title; ?>
				</h2>
				<h3 class='lax heading-subtitle frontpage-subtitle' data-lax-translate-y='0 0, vh -vh'>
					<?php echo $section_subtitle; ?>
				</h3>
				<?php

					if(!has_prefix($section, 'landing'))
					{
						echo "<div id='${section}-items-container'>";

						if(has_prefix($section, 'posts'))
						{
							get_template_part('template-parts/content', 'postcards');
						}else{
							foreach($section_items as $item)
							{
								$item = array_merge(array(
									'title'							=> 'Block Title',
									'description'				=> 'Lorem ipsum dolor sit amet',
									'url'								=> 'http://example.org',
									'url_tab'						=> '',
									'image'							=> '',
									'date_span'					=> '',
									'author'						=> '',
									'author_profession' => '',
								), $item);

								echo '<div>';

								if($item['image'])
								{
									$image_url = wp_get_attachment_image_src($item['image'], 'large')[0];
									echo "<img src='${image_url}' />";
								}

								echo "<h3 class='heading-subtitle'>${item['title']}</h3>";

								echo $item['date_span'] && "<p class='${section}-date-span'>${item['date_span']}</p>";

								echo "<p class='${section}-description'>${item['description']}</p>";

								if($item['url'])
								{
									$url_tab = $item['url_tab'] ? '_blank' : '';
									echo "<a href='${item['url']}' target='${url_tab}>' class='url'>Promeni me!</a>";
								}

								echo $item['author'] && "<p class='${section}-author'>${item['author']}</p>";

								echo $item['author_profession'] &&  "<p class='${section}-author-profession'>${item['author_profession']}</p>";

								echo '</div>';
							}
						}

						echo '</div>';
					}
				?>
				<?php if($section !== 'landing'): ?>
					<script>
						Macy({
							container: '#<?php echo $section; ?>-items-container',
							columns: <?php echo get_theme_mod("${section}_masonry_num", 3); ?>,
							breakAt: {
								960: <?php echo get_theme_mod("${section}_masonry_num", 3) == 1 ? 1: 2; ?>,
								768: 1,
							},
							margin: 16,
						});
					</script>
				<?php endif; ?>

			</div>

		</section>
	<?php endforeach; ?>
</main>
<?php get_footer(); ?>
