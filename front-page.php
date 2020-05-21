<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php
	$layout = get_theme_mod('sections_layout', array());

	foreach($layout as $key => $section):
		set_query_var('section', $section);
	?>

	<section
		<?php
			$name = get_theme_mod("${section}_name", 'Section');
			echo !empty($name) ? "id='" . esc_attr(sanitize_title($name)) . "'" : ''; ?>
			data-section-id='<?php echo esc_attr($section); ?>'>
		<?php
			set_query_var('shape_section', $section);
			get_template_part('template-parts/content/background'); ?>

		<div class='default-container'>
			<?php
				$inside_layout = get_theme_mod("${section}_layout", array('logo', 'title', 'subtitle', 'items', 'buttons'));
				foreach($inside_layout as $inside_block)
				{
					get_template_part("template-parts/frontpage/${inside_block}");
				}
			?>
		</div>

		<?php
			if($key === 0)
			{
				get_template_part('template-parts/content/scroll-down-icon');
			} ?>

	</section>
	<?php endforeach; ?>

<?php get_footer(); ?>
