jQuery(document).ready(function($)
{
	$('.card').find('.image').on('click', function(event)
	{
		event.preventDefault();
		window.location.href = $(this).parent().find('.url').find('a').attr('href');
	})
})
