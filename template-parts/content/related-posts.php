<?php

if(get_theme_mod('related_posts_enable', false)):
	global $post;

	$post_per_page = get_theme_mod('related_posts_number', 4);
	$post_categories = get_the_category($post->ID);

	if($post_categories):
		$category_ids = array();
		foreach($post_categories as $category)
		{
				$category_ids[] = $category->term_id;
		}

		$query = new WP_Query(array(
			'category__in'	=> $category_ids,
			'post__not_in'	=> array($post->ID),
			'post_type'			=> 'post',
			'post_status'		=> 'publish',
			'post_per_page'	=> $post_per_page,
		));

		if($query->have_posts()):
			set_query_var('card_preset', 'posts');
			set_query_var('section', 'related_posts');

			$title = get_theme_mod('related_posts_title', 'Related Posts');
			echo "<div id='related_posts' class='default-container'>";
				echo "<h2>${title}</h2>";

			$image_align = get_theme_mod("related_posts_image_align", 'all-left');
			$masonry_num = get_theme_mod("related_posts_masonry_num", 3);
			$image_align = $masonry_num == 1 ? $image_align : ''; ?>
			<div
					id='related_posts-items'
					class='section-items <?php echo $image_align; ?>'>

				<?php
				while($query->have_posts())
				{
					$query->the_post();
					get_template_part('template-parts/preset/wrapper');
				} ?>

				<?php get_template_part('template-parts/frontpage/macy'); ?>
			</div>

<?php
		endif;
	endif;
endif; ?>
