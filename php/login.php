<?php

	error_reporting(0);
	include("connect.php");
	
	$username = strip_tags( $_POST['inp_user'] );
	$password = mysql_real_escape_string( strip_tags( $_POST['inp_pass'] ) );
	
	$pass = NULL;
	
	if( $username==NULL || $password ==NULL )
		header('Location: ./../index.php?return=null');
		
	else	{	
	
		if( $password!=NULL && $password!=" " )
			$pass = md5( $password );
			
		$sql = 'SELECT `password` FROM `'.$login.'` WHERE `username`="'.$username.'";';
		$data = mysql_query( $sql );
		$result = mysql_fetch_array( $data );
		
		$check = $result['password'];
		
		if( $check == $pass )		{
			session_start();
			$_SESSION['reg_json']= NULL;
			$_SESSION['user']= $username;
			header('Location: ./../home.php');	
		}//End Of Inner IF
		else
			header('Location: ./../index.php?return=false');
			
	}//End Of Main Else	
?>