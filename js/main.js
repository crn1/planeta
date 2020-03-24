jQuery(document).ready(function($)
{
	//Min Height of page
	let headerHeight = $('#main-header').outerHeight()
	let footerHeight = $('#footer').outerHeight()
	let mainHeight = 'calc(100vh - ' + headerHeight + 'px - ' + footerHeight + 'px)'
	$('main').css('min-height', mainHeight)

	// Move top-navbar-items to top-navbar
	$(window).on('load resize', function()
	{
		if($(window).width() < 960)
		{
			$('#top-menu').appendTo('#menu-container')
		}else{
			$('#menu-button').removeClass('is-active')
			$('#menu-container').removeClass('active')
			$('html').css('overflow', 'visible')
			$('#top-menu').prependTo('#nav-container')
		}
		$('#top-menu').css('display', 'flex')
	})

	$('.top-navbar-item').on('click', function(event)
	{
		event.preventDefault()
		if($('#menu-container').hasClass('active'))
		{
			$('#menu-button').removeClass('is-active')
			$('#menu-container').removeClass('active')
			$('html').css('overflow', 'visible')
		}
		$.scrollTo('#' + $(this).attr('data-section-id'), 1700)
	})

	// Main Menu
	$('#menu-button').on('click', function() {
		$('#menu-container').toggleClass('active')
		$('#menu-button').toggleClass('is-active')
		if($('#menu-button').hasClass('is-active'))
		{
			$('html').css('overflow', 'hidden')
		}else{
			$('html').css('overflow', 'visible')
		}
	})

	//Fittext
	$(window).on('load resize', function()
	{
		let windowWidth = $(window).width()
		let containerWidth = parseInt($('.default-container').css('max-width'), 10)
		if(windowWidth <= containerWidth)
		{
			$('.fit-text').fitText()
		}else{
			//defit text?
		}
	})

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
