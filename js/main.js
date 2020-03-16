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
			$('body').css('overflow', 'hidden')
		}else{
			$('#menu-button').children('i').html('menu')
			$('body').css('overflow', 'visible')
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

	$('.swiper-container').each(function() {
		new Swiper($(this), {
			navigation: {
				prevEl: $(this).find('.swiper-button-prev'),
				nextEl: $(this).find('.swiper-button-next'),
			},
			loop: true,
		});
	});

	// Laxxx
	lax.setup()
	const updateLax = () => {
		lax.update(window.scrollY)
		window.requestAnimationFrame(updateLax)
	}
	window.requestAnimationFrame(updateLax)

	// AOS JS
	AOS.init()
})
