jQuery(document).ready(function($)
{
	$('#menu-button').on('click', function() {
		$('#top-menu').toggleClass('hidden');
		if($('#top-menu').hasClass('hidden'))
		{
			$('#menu-button').html('menu');
		}else{
			$('#menu-button').html('close');
		}
	})
})
