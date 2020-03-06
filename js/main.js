jQuery(document).ready(function($)
{
	$.scrollify({
		section : '.scrollify-section',
		easing: '',
		setHeights: false,
	});

	//Laxxx
	lax.setup()

	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}

	window.requestAnimationFrame(updateLax)

	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('hidden');
		if($('#top-menu').hasClass('hidden'))
		{
			$('#menu-button').children('i').html('menu');
		}else{
			$('#menu-button').children('i').html('close');
		}
	})
})
