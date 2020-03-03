jQuery(document).ready(function($)
{
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('hidden');
		if($('#top-menu').hasClass('hidden'))
		{
			$('#menu-button').children('i').html('menu');
		}else{
			$('#menu-button').children('i').html('close');
		}
	})
})
