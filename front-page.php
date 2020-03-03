<?php
function has_prefix($string, $prefix)
{
	return substr($string, 0, strlen($prefix)) == $prefix;
}

get_header();
?>
<main>
	<?php
		$layout = get_theme_mod('blocks_layout', array());
		foreach($layout as $section):
	?>
		<section class='<?php echo get_theme_mod("${section}_bg_type", 'static') === 'static' ? "${section}-bg" : ''; ?>'>

			<?php if(2==3)/*get_theme_mod("${section}_bg_type", 'static') === 'video')*/: ?>
				<video class='section-video' autoplay muted loop>
					<source src="<?php echo get_theme_mod("${section}_video", ''); ?>" />
				</video>
			<?php endif; ?>

			<div class='default-container'>
				<h2 class='title-heading<?php echo get_theme_mod("${section}_is_fullscreen", false) ? ' fullscreen-title' : ''; ?>'>
					<?php echo get_theme_mod("${section}_title", 'Block Title') ?>
				</h2>
				<h3 class='subtitle-heading'>
					<?php echo get_theme_mod("${section}_subtitle", 'Block Subtitle') ?>
				</h3>
				<?php

					if(!has_prefix($section, 'landing'))
					{
						echo "<div id='${section}-items-container'>";

						if(has_prefix($section, 'posts'))
						{
							if(have_posts())
							{
								while(have_posts())
								{
									the_post();
									$title = get_the_title();
									$excerpt = get_the_excerpt();
									$author = get_the_author();
									$date = get_the_date();
									$url = get_permalink();
									$avatar = get_avatar_url($post->ID);
									echo "<div>";
									if(has_post_thumbnail($post->ID))
									{
										$img_src = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'large');
										echo "<img class='posts-image' src='${img_src}' />";
									}
									echo "<h3 class='posts-title'>${title}</h3>";
									echo "<p class='posts-excerpt'>${excerpt}</p>";
									echo "<p class='posts-author'>${author}</p>";
									echo "<img class='posts-avatar' src='${avatar}' />";
									echo "<p class='posts-date'>${date}</p>";
									echo "<a href='${url}' class='posts-url'>Promeni me!</a>";
									echo "</div>";
								}
							}else{
								echo 'there are no posts sorey';
							}

						}else{
							foreach(get_theme_mod("${section}_items", array()) as $item)
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

								echo "<h3 class='${section}-title subtitle-heading'>${item['title']}</h3>";

								if($item['date_span'])
								{
									echo "<p class='${section}-date-span'>${item['date_span']}</p>";
								}

								echo "<p class='${section}-description'>${item['description']}</p>";

								if($item['url'])
								{
									$url_tab = $item['url_tab'] ? '_blank' : '';
									echo "<a href='${item['url']}' target='${url_tab}>' class='url'>Promeni me!</a>";
								}

								if($item['author'])
								{
									echo "<p class='${section}-author'>${item['author']}</p>";
								}

								if($item['author_profession'])
								{
									echo "<p class='${section}-author-profession'>${item['author_profession']}</p>";
								}

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
