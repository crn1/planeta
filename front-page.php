<?php get_header(); ?>

<?php if(get_theme_mod('portfolio_enable', false)) {
	get_template_part('template-parts/sidebar', 'portfolio');
} ?>

<main class='main-container'>
	<?php get_template_part('template-parts/header', 'promotion'); ?>
	<?php get_template_part('template-parts/header', 'navbar'); ?>
	<?php get_template_part('template-parts/header', 'extended-header'); ?>
	<?php get_template_part('template-parts/frontpage', 'layout'); ?>
	<?php get_template_part('template-parts/footer', 'notice'); ?>
</main>

<?php get_footer(); ?>
