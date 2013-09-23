$(document).ready(
	function()	{
	
		$('#query').attr( 'value', 'Search');
		$('#query').focusin(
			function()	{
			
				$(this).css( 'opacity' , '1' );
				
				if( $(this).val() == 'Search' )
					$(this).attr( 'value' , '' );
			
			}//End Of Function
		);
		$('#query').focusout(
			function()	{
			
				$(this).css( 'opacity' , '0.9' );
								
				if( $(this).val() == '' )
					$(this).attr( 'value' , 'Search' );
					
				$('#sresult').hide();	
			
			}//End Of Function
		);
		$('#query').keyup(
			function()	{
				
				var val = $(this).val();
			
				$.post( 'php/search.php' , { search: val } , function(data)	{
						
						if( val!="" && data!="" )
							$('#sresult').html("<ul>"+data+"</ul>").slideDown(500);
						else
							$('#sresult').html('').hide();
					}
				);
			}
		);
		
		
		
		$('#darrow').click(
			function()	{
			
				$('#list').toggle();
			
			}//End Of Function
		);		

		
		$('#status_update').attr( 'value' , 'Whats in your mind' );		
		$('#status_update').focusin(
			function()	{
			
				$(this).css( 'opacity' , '1' );
				$('#post_update').show();
				
				if( $(this).val() == 'Whats in your mind' )
					$(this).attr( 'value' , '' );
			
			}//End Of Function
		);
		
		$('#status_update').focusout(
			function()	{
			
				$(this).css( 'opacity' , '0.8' );
				$('#post_update').hide();
			
				if( $(this).val() == '' )
					$(this).attr( 'value' , 'Whats in your mind' )
			
			}//End Of Function
		);				
		
		
		$('.comment').find('button').click(
			function()	{
				
				var par = $(this).parent();
				
				par.find('.com_box').slideToggle(750);
				$('.comment').not(par).find('.com_box').slideUp(750);
			}
		);
		
		$('.comment').find('textarea').focusin(
			function()	{
				
				$(this).keyup(
					function()	{
					
						if( $(this).val().length > 0 )
							$(this).next().removeAttr('disabled').css( 'background-color' , 'Gainsboro' );
						else	
							$(this).next().attr('disabled' , 'true').css( 'background-color' , '#F0F0F0' );
							
					}
				);//End Of Key Up
				
				$(this).next().show();
			
			}
		);//End Of Focus In
		
		
		$('.comment').find('textarea').focusout(
			function()	{
							
				if( $(this).val().length == 0 )
					$(this).next().hide();
					
			}
		);//End Of Focus Out
		
		
		$('#new_msg').click(
			function()	{
			
//				var cont = $('<div id="send_new_msg" class="modal_box" >  </div>');
				
//				$('#contents').append(cont);
				
				resize("#send_new_msg");
				
				$('#send_new_msg').fadeIn('normal');
			
			}//End Of Function
		);
		
		
	}//End Of Main Function
);




function resize( blck )	{

	var width = ( $(window).width() - $(blck).width() ) / 2;
	var height = ( $(window).height() - $(blck).height() ) / 2;
	
	$(blck).css( 'top' , height+"px" ).css( 'left' , width+"px" );
	
}//End Of Function


function loadMore( did )	{

	var cont = $('<div class="status_msg"> <span class="user_pic"> <img src="images/users/nopicture.png" alt="username" height="100%" width="100%"/> </span>	<h2> <div class="edit_del" title="Edit/Delete"> <ul> <li>Edit</li> <li>Delete</li> </ul> </div> <span class="post">  <label class="user_name">Siddhant Goenka</label> shared </span> </h2> <p class="message">Message</p> <div class="comment">	<button> Comment </button>	<div class="com_box"> <textarea></textarea> <input type="submit" value="Comment" disabled="true"/> <div class="clear"></div> </div> </div> </div> ');
	
	$('.more').show().delay(1000).hide(1000 , function() { $(this).remove(); } );
	
	setTimeout( 
		function()	{
			
			$(did).append( cont, cont, cont , $('<div class="more"> </div>'));
		
		}, 1200
	);

}//End Of Function