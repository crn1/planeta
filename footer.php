			<footer id='main-footer'>
				<?php
					set_query_var('section', 'footer');
					set_query_var('shape_section', 'footer');
					get_template_part('template-parts/content/background'); ?>

				<div class='default-container'>
					<?php
						$hover_class = get_query_var('hover_class', 'hover-none'); ?>

					<nav id='footer-menu' class='relative'>
						<?php
							$params = array(
								'theme_location' 	=> 'footer-menu',
								'items_wrap'      => '%3$s',
								'echo'						=> false,
							);
							$menu = strip_tags(wp_nav_menu($params), '<a>');
							$menu = str_replace('<a', "<span class='relative ${hover_class}'><a class='button-link'", $menu);
							$menu = str_replace('</a>', "</a></span>", $menu);
							echo $menu;
						?>
					</nav>

					<div id='footer-sidebar-container'>
						<?php if(is_active_sidebar('footer-left')): ?>
							<ul id="footer-sidebar-left">
								<?php dynamic_sidebar('footer-left'); ?>
							</ul>
						<?php endif; ?>

						<?php if(is_active_sidebar('footer-right')): ?>
							<ul id="footer-sidebar-right">
								<?php dynamic_sidebar('footer-right'); ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</footer>

		<?php wp_footer(); ?>
	</body>
</html>
