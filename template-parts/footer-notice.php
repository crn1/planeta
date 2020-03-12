<footer id='footer' class='default-container'>
	<?php if(is_active_sidebar('extended-footer')): ?>
		<div id='extended-footer' class='default-container'>
			<?php dynamic_sidebar('footer-sidebar'); ?>
		</div>
		<script>
			Macy({
				container: '#extended-footer',
				columns: <?php echo get_theme_mod('extended_footer_container', 3); ?>,
				breakAt: {
					960: <?php echo get_theme_mod('extended_footer_container', 3) == 1 ? 1: 2; ?>,
					768: 1,
				},
				margin: 16,
			});
		</script>
	<?php endif; ?>
	<small class='notice'>
		Project SigmaRed
	</small>
	<small class='notice'>
		Made by neurotic sleepless fanatic nicked <a href='http://github.com/crn1'>crn1</a>
	</small>
</footer>
