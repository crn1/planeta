<?php get_header(); ?>
<main>
	<?php
		$layout = get_theme_mod('blocks_layout', array());
		foreach($layout as $item):
	?>
		<section class='<?php echo get_theme_mod("${item}_bg_type", 'static') === 'static' ? "${item}-bg" : ''; ?>'>

			<?php if(2==3)/*get_theme_mod("${item}_bg_type", 'static') === 'video')*/: ?>
				<video class='section-video' autoplay muted loop>
					<source src="<?php echo get_theme_mod("${item}_video", ''); ?>" />
				</video>
			<?php endif; ?>

			<div class='default-container'>
				<header>
					<h2 class='title-heading<?php echo get_theme_mod("${item}_is_fullscreen", false) ? ' fullscreen-title' : ''; ?>'>
						<?php echo get_theme_mod("${item}_title", 'Block Title') ?>
					</h2>
					<h3 class='subtitle-heading'>
						<?php echo get_theme_mod("${item}_subtitle", 'Block Subtitle') ?>
					</h3>
				</header>

					<?php switch($item):
						case 'portfolio': ?>

							<div id='<?php echo $item; ?>-items-container'>
								<?php foreach(get_theme_mod('portfolio_items', array()) as $item): ?>
									<div>
										<img src='https://i.ytimg.com/vi/RHLknisJ-Sg/maxresdefault.jpg' />
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
