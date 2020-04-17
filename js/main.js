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
		//event.preventDefault()
		if($('#top-menu').hasClass('is-active'))
		{
			$('#top-menu').removeClass('is-active')
			$('#menu-button').removeClass('is-active')
		}
	})

	//Scroll Container height
	if($('#wpadminbar').length)
	{
		let adminHeight = $('#wpadminbar').outerHeight();
		$('#scroll-container').css('height', `calc(100vh - ${adminHeight}px)`)
	}else{
		$('#scroll-container').css('height', '100vh')
	}

	// Main Menu
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('is-active')
		$('#menu-button').toggleClass('is-active')
	})

	// Convert card images to links
	$('.card').find('.image').on('click', function(event)
	{
		//Popravi me
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
	if(typeof AOS != 'undefined') { AOS.init() }

	//Sticky Sidebars
	if(typeof Sticky != 'undefined')
	{
		var sticky = new Sticky('.sidebar-inner', {
			marginTop: $('#main-header').outerHeight(true),
			stickyContainer: '.article-container',
			stickyFor: 899,
		})
	}

	//Scroll to Top Button
	scrollTopButton = $('#scroll-top-button')
	scrollDownButton = $('#scroll-down-button')
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

	$('body').on('scroll load', function() { updateScrollButtons('body') })
	$(window).on('scroll load', function() { updateScrollButtons(window) })

	//Scroll Top Functionality
	scrollTopButton.on('click', function()
	{
		let scrollContainer = $('#scroll-container');
		if(scrollContainer.length)
		{
			$('#scroll-container').animate({
				scrollTop: 0,
			}, 0);
		}else{
			$('html').animate({
				scrollTop: 0,
			}, 0);
		}
	})

	// Loading screen
	$(window).on('load', function() { $('#loading-container').fadeOut(1170) })

	//Scroll to hash
	if(window.location.hash)
	{
		$('body').animate({
			'scrollTop': $(window.location.hash).offset().top
		}, 0);
	}
})
