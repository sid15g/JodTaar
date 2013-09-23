$(document).ready(
	function()	{
	
		$(window).scroll(
			function()	{
				
				var height = $('#recent_act').height() - 235;
				var pos = $(this).scrollTop();
				
				if( height <= pos )
					loadMore("#recent_act"); 
				
			}//End Of Scroll Function
		);
	
	}//End Of Main Function
);


function open_win( div_id )	{
	
	var blck = '#'+div_id;	
	
	$('.modal_box').not(blck).fadeOut('normal');
	$(blck).fadeIn('normal');	
	
	resize(blck);
	
}//End Of Function


function close_win( div_id )	{

	var blck = '#'+div_id;		
	$(blck).fadeOut('normal');

}//End Of Function