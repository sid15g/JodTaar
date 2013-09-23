<?php

	error_reporting(0);
	
	registration();
	
	function registration()		{
	
		$username = strip_tags( $_POST['username'] );
		$password = mysql_real_escape_string( strip_tags( $_POST['password'] ) );
		$email = strip_tags( $_POST['email'] );
		
		if( $username==NULL || $password==NULL || $email==NULL )
			header('Location: ../index.php?return=rnull');
		else		{

			$user_valid = user_check( $username );
			$email_valid = email_check( $email );		
			
			if( $user_valid == 'true' && $email_valid == 'true' )		{
				
				$pass = md5( $password );
				
				$data_for_json = array( 'username' => $username , 'password' => $pass , 'email' => $email );
				
				$json_to_send = json_encode( $data_for_json );
				
				session_start();
				$_SESSION['reg_json'] = $json_to_send;
				
				header('Location: ../phases.php');
				
			}//End Of inner If	
			else
				header('Location: ../index.php?return=rfal');
			
		}//End Of Else
	
	}//End Of Function
	
	
	
	function user_check( $var )	{

		include('connect.php');
		
		$sql = 'SELECT `email` FROM `'.$login.'` WHERE `username`="'.$var.'";';
		$data = mysql_query($sql);
		$result = mysql_fetch_array($data);
		
		if( $result['email']!=NULL )
			return 'false';
		else
			return 'true';
		
	
	}//End Of Function
	
	
	
	function email_check( $var )	{
	
		include('connect.php');
		
		$sql = 'SELECT `username` FROM `'.$login.'` WHERE `email`="'.$var.'";';
		$data = mysql_query($sql);
		$result = mysql_fetch_array($data);
		
		if( $result['username'] != NULL )
			return 'false';
		else	{
		
			$part1 = explode( "@" , $var );		
			$part2 = explode( "." , $part1[1] );
			
			if( $part1[0]!=NULL && $part2[0]!=NULL && $part2[1]!=NULL )
				return 'true';
			else
				return 'false';
				
		}//End Of Main Else
	
	}//End Of Function
?>