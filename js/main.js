jQuery(document).ready(function($)
{
	//Min Height of page
	let headerHeight = $('#main-header').outerHeight()
	let footerHeight = $('#footer').outerHeight()
	let mainHeight = 'calc(100vh - ' + headerHeight + 'px - ' + footerHeight + 'px)'
	$('main').css('min-height', mainHeight)

	// Main Menu
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('active')
		if($('#top-menu').hasClass('active'))
		{
			$('#menu-button').children('i').html('close')
			$('html').css('overflow', 'hidden')
		}else{
			$('#menu-button').children('i').html('menu')
			$('html').css('overflow', 'visible')
		}
	})

	//Fittext
	//$('.section-title').fitText();

	// Convert card images to links
	$('.card').find('.image').on('click', function(event)
	{
		event.preventDefault();
		window.location.href = $(this).parent().find('.url').find('a').attr('href');
	})

	// Laxxx
	if(typeof lax != 'undefined')
	{
		lax.setup()
		const updateLax = () => {
			lax.update(window.scrollY)
			window.requestAnimationFrame(updateLax)
		}
		window.requestAnimationFrame(updateLax)
	}

	// AOS JS
	if(typeof AOS != 'undefined')
	{
		AOS.init()
	}
})
