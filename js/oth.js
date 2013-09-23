$(document).ready(
	function()	{
		
		$('#upl').live( 'change',
			function()	{
				
				var ext = $(this).val();
				var len = ext.length;
				
				ext = ext.charAt(len-3)+ext.charAt(len-2)+ext.charAt(len-1);
					
				if( ext=="jpg" || ext=="png" )
					$('#sub').show();
				
			}
		);	
		
		var pro_pic = $('#pro_pic').find('img').attr('src');
		
		if( pro_pic != "images/nopicture.png" )
			$('#skip').find('a').html('Done').attr('href', 'home.php');
		else
			$('#sub').hide();
	
	}//End Of Main Function
);