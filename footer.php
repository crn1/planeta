			<footer id='main-footer'>
				<?php
					set_query_var('section', 'main-footer');
					get_template_part('template-parts/content/background'); ?>

				<div class='default-container'>
					<?php
						$hover_class = get_theme_mod('typography_links_hover', 'none'); ?>
					<nav
							id='footer-menu'
							class='<?php echo $hover_class; ?>'>
						<?php
							$params = array(
								'theme_location' 	=> 'footer-menu',
								'items_wrap'      => '%3$s',
								'echo'						=> false,
							);
							echo strip_tags(wp_nav_menu($params), '<a>');
						?>
					</nav>

					<?php if(is_active_sidebar('extended-footer')):
						set_query_var('section', 'extended_footer');
						get_template_part('template-parts/content/background'); ?>
							<div
									id='extended_footer-items'
									class='default-container section-items'>
								<?php dynamic_sidebar('extended-footer'); ?>
							</div>
						<?php get_template_part('template-parts/frontpage/macy'); ?>
					<?php endif; ?>

					<div id="footer-notice">
						<small>
							<?php
								echo get_theme_mod('footer_copyright', 'Copyright (C) 2020 - Lorem Ipsum. All Rights Reserved.'); ?>
						</small>

							<nav>
							<?php
								$params = array(
									'theme_location' 	=> 'footer-notice-menu',
									'items_wrap'      => '%3$s',
									'echo'						=> false,
								);
								echo strip_tags(wp_nav_menu($params), '<a>');
							?>
						</nav>
					</div>

				</div>
			</footer>

		<?php wp_footer(); ?>
	</body>
</html>
