jQuery(document).ready(function($)
{
	//Scroll sections
	$('.top-menu-item').on('click', function(event)
	{
		//event.preventDefault()
		if($('#top-menu').hasClass('is-active'))
		{
			$('#top-menu').removeClass('is-active')
			$('#menu-button').removeClass('is-active')
		}
	})

	// Main Menu
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('is-active')
		$('#menu-button').toggleClass('is-active')
	})

	//Image link
	$('.card-url').parent().parent().find('.card-image').css('cursor', 'pointer')
	$('.card-url').parent().parent().find('.card-image').on('click', function(event)
	{
		event.preventDefault()
		window.location.href = $(this).parent().parent().find('.button-link').attr('href')
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
	if(typeof AOS != 'undefined') { AOS.init() }

	//Scroll to Top Button
	let scrollTopButton = $('#scroll-top-button')
	let scrollDownButton = $('#scroll-down-button')
	function updateScrollButtons(element)
	{
		if($(element).scrollTop() >= 20)
		{
			if(scrollTopButton.length) { scrollTopButton.fadeIn(170) }
			if(scrollDownButton.length) { scrollDownButton.fadeOut(170) }
		}else{
			if(scrollTopButton.length) { scrollTopButton.fadeOut(170) }
			if(scrollDownButton.length) { scrollDownButton.fadeIn(170) }
		}
	}

	scrollDownButton.on('click', function() {
		let secondSection = $('body > section:nth-of-type(2)')
		if(secondSection.length)
		{
			$('html, body').animate({
				'scrollTop': secondSection.offset().top
			}, 0);
		}
	})

	$('body').on('scroll load', function() { updateScrollButtons('body') })
	$(window).on('scroll load', function() { updateScrollButtons(window) })

	//Scroll Top Functionality
	scrollTopButton.on('click', function()
	{
		$('html, body').animate({
			scrollTop: 0,
		}, 0);
	})

	// Loading screen
	$(window).on('load', function() { $('#loading-container').fadeOut(1170) })

	//Scroll to hash
	if(window.location.hash)
	{
		$('html, body').animate({
			'scrollTop': $(window.location.hash).offset().top
		}, 0);
	}
})
