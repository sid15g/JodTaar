<?php

	error_reporting(0);
	
	function redirect( $name )		{
	
		session_start();
	
		if( isset( $_SESSION[$name] ) )
			return 'true';
			
		else
			return 'false';
	
	}//End Of Function
	
	
	
	function return_false( $val )	{
	
		if( $val == 'false' )		{
			$user_status = 'Incorrect Username/Password';
			include('contents/index_user_pass.php');	
		}
		else if( $val == 'null' )		{
			$user_status = 'All Fields are Mandatory';
			include('contents/index_user_pass.php');	
		}
		else if( $val == 'rnull' )		{
			$user_status = '*All Fields are Mandatory';
			include('contents/index_register.php');
		}
		else if( $val == 'rfal' )		{
			$user_status = '*Check Username/Email';
			include('contents/index_register.php');
		}
		else 
			include('contents/index_register.php');
		
	}//End Of Function
	
	
	
	function fetch_json_data( $table , $username )	{
	
		session_start();
		include('connect.php');
	
		if( $username==NULL )
			$username = $_SESSION['user'];
	
		$sql = 'SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'";';
		$data = mysql_query($sql);
		$result = mysql_fetch_array($data);
		
		$jsonurl=NULL;
		
		if( $result['ID'] != NULL )	
			$jsonurl = 'http://localhost/jodtaar/data/json/send/index.php';
			
		if( $table!=NULL )
			$jsonurl .= '?table='.$table;
		else
			$jsonurl .= '?user='.$username;
			
		if( $username!=NULL )
			$jsonurl .= '&user='.$username;	
		
		$json = file_get_contents( $jsonurl , 0 , null , null );
			
		return $json;
		
	}//End Of Function
	
	
	
	function fetch_user_id( $username )	{
	
		session_start();
		include('connect.php');
		
		$sql = 'SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'";';		
		$data = mysql_query($sql);
		$result = mysql_fetch_array( $data );
		
		return $result['ID'];
	
	}//End Of Function
	
	
?>