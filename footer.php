			<footer id='main-footer'>
				<?php
					set_query_var('section', 'main-footer');
					get_template_part('template-parts/content/background'); ?>

				<div class='default-container'>
					<?php
						$hover_class = get_query_var('hover_class'); ?>
					<nav id='footer-menu' class='relative'>
						<?php
							$params = array(
								'theme_location' 	=> 'footer-menu',
								'items_wrap'      => '%3$s',
								'echo'						=> false,
							);
							$menu = strip_tags(wp_nav_menu($params), '<a>');
							$menu = str_replace('<a', "<span class='relative button-link hover-${hover_class}'><a", $menu);
							$menu = str_replace('</a>', "</a></span>", $menu);
							echo $menu;
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
