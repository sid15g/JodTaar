<?php

	error_reporting(0);
	
	function decode_url( $table , $username )	{
	
		include('connect.php');
	
		$sql = 'SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'";';
		$data = mysql_query($sql);
		$result = mysql_fetch_array($data);
		
		$jsonurl=NULL;
		
		if( $result['ID'] != NULL )	
			$jsonurl = 'http://localhost/jodtaar/data/json/send/index.php?table='.$table.'&user='.$username;
		
		$json = file_get_contents( $jsonurl , 0 , null , null );
			
		return $json;
		
	}//End Of Function
	
?>