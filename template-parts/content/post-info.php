<?php
	$print_category = get_query_var('print_category', true);
	$font_size = get_theme_mod('typography_main_size', 16);
	$avatar = get_avatar(get_the_author_meta('ID'), $font_size*2);
	$date = get_the_date();
?>
<div class='post-info'>
	<div class='user'>
		<?php echo $avatar; ?> <?php the_author(); ?>
		<?php echo !empty($date) ? " ─ " : ''; echo $date; ?>
	</div>

	<?php if($print_category): ?>
		<span class='category'>
		<?php
			$in = esc_html__('in', 'planeta');
			echo $in . ' ';
			the_category(' / '); ?>
		</span>
	<?php endif; ?>
</div>
