<?php
	$hover_class = get_query_var('hover_class', 'hover-none');
	$prev_content_title = get_query_var('post_nav_prev_title', esc_html__('Previous Post', 'planeta'));
	$next_content_title = get_query_var('post_nav_next_title', esc_html__('Next Post', 'planeta'));
?>

<div class='post-navigation-container'>
	<?php
	$prev_post = get_previous_post();
	$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title)); ?>
		<span class='relative <?php echo esc_attr($hover_class); ?>'>
			<?php if($prev_post): ?>
				<a
						rel='prev'
						href='<?php echo get_permalink($prev_post->ID) ?>'
						title='<?php echo esc_attr($prev_title); ?>'
						class='previous-post button-link'>
					<?php echo $prev_content_title; ?>
				</a>
			<?php endif; ?>
		</span>

	<?php
	$next_post = get_next_post();
	$next_title = strip_tags(str_replace('"', '', $next_post->post_title)); ?>
	<span class='relative <?php echo esc_attr($hover_class); ?>'>
		<?php if($next_post): ?>
			<a
					rel='prev'
					href='<?php echo get_permalink($next_post->ID) ?>'
					title='<?php echo esc_attr($next_title); ?>'
					class='next-post button-link'>
				<?php echo $next_content_title; ?>
			</a>
		<?php endif; ?>
	</span>
</div>
