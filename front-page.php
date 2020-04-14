<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<?php
	$layout = get_theme_mod('sections_layout', array());

	foreach($layout as $section):
		$name = get_theme_mod("${section}_name", 'Section');
		$slug = sanitize_title($name);
		set_query_var('section', $section);
	?>

	<section
			id='<?php echo $slug; ?>'
			name='<?php echo $slug; ?>'
			data-section-id='<?php echo $section; ?>'>
		<?php
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
			if($section == 'section_1')
			{
				get_template_part('template-parts/content/scroll-down-icon');
			} ?>

	</section>
	<?php endforeach; ?>

<?php get_footer(); ?>
