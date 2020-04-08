<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>

<main>
<?php
	$layout = get_theme_mod('sections_layout', array());

	foreach($layout as $section):
		set_query_var('section', $section);
	?>

	<section id='<?php echo $section; ?>'>
		<?php
			get_template_part('template-parts/content/background'); ?>

		<div class='default-container'>
			<?php
				$inside_layout = get_theme_mod("${section}_layout", array('title', 'subtitle', 'items'));
				foreach($inside_layout as $inside_block)
				{
					get_template_part("template-parts/frontpage/${inside_block}");
				}
			?>
		</div>

	</section>

	<?php endforeach; ?>
</main>

<?php get_footer(); ?>
