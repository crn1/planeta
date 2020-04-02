			<footer id='main-footer'>
				<?php
					set_query_var('section', 'main-footer');
					get_template_part('template-parts/content/background'); ?>

				<div class='default-container'>
					<?php if(is_active_sidebar('extended-footer')): ?>
						<div id='extended-footer' class='default-container'>
							<?php dynamic_sidebar('footer-sidebar'); ?>
						</div>
						<script>
							Macy({
								container: '#extended-footer',
								columns: <?php echo get_theme_mod('extended_footer_container', 3); ?>,
								breakAt: {
									960: <?php echo get_theme_mod('extended_footer_container', 3) == 1 ? 1: 2; ?>,
									768: 1,
								},
								margin: 16,
							});
						</script>
					<?php endif; ?>

				<?php
					$render_social = get_theme_mod('social_menu_footer', true);
					if($render_social): ?>
						<?php get_template_part('template-parts/content/social'); ?>
				<?php endif; ?>

					<nav id='footer-menu' class='notice'>
						<?php
							$params = array(
								'theme_location' 	=> 'footer-menu',
								'items_wrap'      => '%3$s',
								'echo'						=> false,
							);
							echo strip_tags(wp_nav_menu($params), '<a>');
						?>
					</nav>
					<small class='notice'>
						<?php echo get_theme_mod('footer_copyright', 'Copyright (C) 2020 - Lorem Ipsum. All Rights Reserved.'); ?>
					</small>
				</div>
			</footer>

		<?php wp_footer(); ?>
	</body>
</html>