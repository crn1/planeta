jQuery(document).ready(function($)
{
	//Etc.
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('hidden');
		if($('#top-menu').hasClass('hidden'))
		{
			$('#menu-button').children('i').html('menu');
		}else{
			$('#menu-button').children('i').html('close');
		}
	})

	//Laxxx
	lax.setup()
	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}
	window.requestAnimationFrame(updateLax)
})
