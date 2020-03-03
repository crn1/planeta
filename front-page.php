<?php get_header(); ?>
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
				<header>
					<h2 class='title-heading<?php echo get_theme_mod("${section}_is_fullscreen", false) ? ' fullscreen-title' : ''; ?>'>
						<?php echo get_theme_mod("${section}_title", 'Block Title') ?>
					</h2>
					<h3 class='subtitle-heading'>
						<?php echo get_theme_mod("${section}_subtitle", 'Block Subtitle') ?>
					</h3>
				</header>

					<?php switch($section):
						case 'portfolio': ?>

							<div id='<?php echo $section; ?>-items-container'>
								<?php foreach(get_theme_mod('portfolio_items', array(
									'title' 			=> 'Block Title',
									'description' => 'Lorem ipsum dolor sit amet',
									'url' 				=> 'http://example.org',
									'img'					=> '',
								)) as $item): ?>
									<div>
										<?php if($item['image'] !== ''): ?>
											<img src='<?php echo wp_get_attachment_image_src($item['image'], 'large')[0]; ?>' />
										<?php endif; ?>
										<h3 class='subtitle-heading'>
											<?php echo $item['title']; ?>
										</h3>
										<p>
											<?php echo $item['description']; ?>
										</p>
										<?php if($item['url'] !== ''): ?>
											<a href='<?php echo $item['url']; ?>'
												target='<?php echo $item['url_tab'] ? '_blank' : ''; ?>'>
												Read More!
											</a>
										<?php endif ?>
									</div>
								<?php endforeach; ?>
							</div>

							<script>
								var macyInstancePortfolio = Macy({
									container: '#portfolio-items-container',
									columns: <?php echo get_theme_mod('portfolio_masonry_num', 3); ?>,
									breakAt: {
										960: <?php echo get_theme_mod('portfolio_masonry_num', 3) == 1 ? 1: 2; ?>,
										768: 1,
									},
									margin: 16,
								});
							</script>

					<?php break; ?>

					<?php endswitch; ?>

			</div>
		</section>
	<?php endforeach; ?>
</main>
<?php get_footer(); ?>
