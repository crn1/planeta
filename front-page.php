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
			</div>

		</section>
	<?php endforeach; ?>
</main>
<?php get_footer(); ?>
