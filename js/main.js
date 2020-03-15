jQuery(document).ready(function($)
{
	// Main Menu
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('active')
		if($('#top-menu').hasClass('active'))
		{
			$('#menu-button').children('i').html('close')
			$('body').css('overflow', 'hidden')
		}else{
			$('#menu-button').children('i').html('menu')
			$('body').css('overflow', 'visible')
		}
	})

	//Fittext
	//$('.section-title').fitText();

	// Laxxx
	lax.setup()
	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}
	window.requestAnimationFrame(updateLax)
})
