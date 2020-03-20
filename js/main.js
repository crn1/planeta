jQuery(document).ready(function($)
{
	//Min Height of page
	let headerHeight = $('#main-header').outerHeight()
	let footerHeight = $('#footer').outerHeight()
	let mainHeight = 'calc(100vh - ' + headerHeight + 'px - ' + footerHeight + 'px)'
	$('main').css('min-height', mainHeight)

	$('.top-navbar-item').on('click', function(event)
	{
		event.preventDefault()
		if($('#menu-container').hasClass('active'))
		{
			$('#menu-container').toggleClass('active')
		}
		$.scrollTo('#' + $(this).attr('data-section-id'), 2000)
	})

	// Move top-navbar-items to top-navbar
	$(window).on('load resize', function()
	{
		if($(window).width() < 960)
		{
			$('#top-menu').appendTo('#menu-container')
		}else{
			$('#top-menu').prependTo('#nav-container')
		}
	})

	// Main Menu
	$('#menu-button').on('click', function() {
		$('#menu-container').toggleClass('active')
		if($('#menu-container').hasClass('active'))
		{
			$('#menu-button').children('i').html('close')
			$('html').css('overflow', 'hidden')
		}else{
			$('#menu-button').children('i').html('menu')
			$('html').css('overflow', 'visible')
		}
	})

	//Fittext
	//$('.section-title').fitText()

	// Convert card images to links
	$('.card').find('.image').on('click', function(event)
	{
		event.preventDefault()
		window.location.href = $(this).parent().find('.url').find('a').attr('href')
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
