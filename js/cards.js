jQuery(document).ready(function($)
{
	$('[class*="default"]').find('.image').on('click', function(event)
	{
		event.preventDefault();
		window.location.href = $(this).parent().find('.url').href;
	})

})
