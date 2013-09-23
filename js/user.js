$(document).ready(
	function()	{
	
		$('#fname, #country, #email').keyup(
			function()	{
			
				var a = $('#fname').val().length;
				var b = $('#country').val().length;
				var c = $('#email').val().length;
				
				if( a>0 && b>0 && c>0 )	
					$('#sub_but').show();
				else
					$('#sub_but').hide();
				
			}
		);
		
		
		$('#sub_but').find('input').click(
			function()	{
				
				var email = $('#email').val();
				var phone = $('#phone').val();
				
				var fname = $('#fname').val();
				var city = $('#city').val();
				var country = $('#country').val();
				
				$.post( 'php/profile_update.php' , { email: email, phone: phone, fname: fname, city: city, country: country  } , function(data)	{
					
					var err = parseInt( data );
					
					if( err!=0 )	
						window.location.href='user.php';
					
				} );
				
			}
		);
		
		
		$('#upl').change(
			function()	{
			
				alert( $(this).val() );
			
			}
		);
	
	
		$('.suggestion').find('button').click(
			function()	{
				
				var par = $(this).parent().parent()
				var uid = parseInt( $(this).attr('user') );
				
				$(this).removeAttr('user');
				//alert(uid);
				
				par.html('<p>Successfully Sent</p>').css('height','auto').delay(1000).fadeOut();
				
			}
		);
	
	
		$(window).scroll(
			function()	{
				
				var height = $('#status').height() - 235;
				var pos = $(this).scrollTop();
				
				if( height <= pos )
					loadMore("#status"); 
				
			}//End Of Scroll Function
		);	
	
	}//End Of Main Function
);