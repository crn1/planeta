jQuery(document).ready(function($)
{
	//Min Height of page
	let headerHeight = $('#main-header').outerHeight()
	let footerHeight = $('#footer').outerHeight()
	let mainHeight = 'calc(100vh - ' + headerHeight + 'px - ' + footerHeight + 'px)'
	$('main').css('min-height', mainHeight)

	//Scroll sections
	$('.top-menu-item').on('click', function(event)
	{
		event.preventDefault()
		if($('#top-menu').hasClass('is-active'))
		{
			$('#top-menu').removeClass('is-active')
			$('#menu-button').removeClass('is-active')
		}
		$.scrollTo('#' + $(this).attr('data-section-id'), 1700)
	})

	// Main Menu
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('is-active')
		$('#menu-button').toggleClass('is-active')
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

	//Sticky Sidebars
	if(typeof Sticky != 'undefined')
	{
		var sticky = new Sticky('.sidebar-inner', {
			marginTop: $('#main-header').outerHeight(true),
			stickyContainer: '.article-container',
			stickyFor: 899,
		})
	}

	// Loading screen
	$(window).on('load', function()
	{
		$('#loading-container').fadeOut(700)
	})

})
