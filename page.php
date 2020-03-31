<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main>
	<article>
		<?php if(have_posts()): while(have_posts()) : the_post(); ?>

		<?php
			set_query_var('title', get_the_title());
			get_template_part('template-parts/content/title'); ?>

			<div class='content-container'>
				<aside class='sidebar sidebar-left'>
					<div class='sidebar__inner'>
						<?php if(is_active_sidebar('page-left-sidebar')) {
							dynamic_sidebar('page-left-sidebar');
						} ?>
					</div>
				</aside>

				<div class='page-content'>
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>

				<aside class='sidebar sidebar-right'>
					<div class='sidebar__inner'>
						<?php if(is_active_sidebar('page-right-sidebar')) {
							dynamic_sidebar('page-right-sidebar');
						} ?>
					</div>
				</aside>
			</div>

		<div class='page-container'>
			<?php comments_template(); ?>
		</div>

		<?php endwhile; endif; ?>
	</article>
</main>
<?php get_footer(); ?>
