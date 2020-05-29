<?php
set_query_var('section', 'post');

if(have_posts()): ?>
	<div
			id='post-items'
			class='section-items'>
		<?php
		while(have_posts()):
			the_post();
			get_template_part('template-parts/preset/wrapper');
		endwhile; ?>
		<?php
			get_template_part('template-parts/content/archive-navigation'); ?>
	</div>
<?php
else: ?>
	<h2 class='no-results'>
		<?php esc_html_e('Sorry, but nothing is found!', 'planeta'); ?>
	</h2>
<?php endif;

$enable_masonry = get_theme_mod('post_enable_masonry', false);
if($enable_masonry):
	get_template_part('template-parts/frontpage/macy');
endif; ?>
