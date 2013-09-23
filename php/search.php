<?php

	error_reporting(0);
	include('connect.php');
	
	$keyword = strip_tags( $_POST['search'] );
	
	if( !empty($keyword) )		{
		
		$sql = 'SELECT `username` FROM `'.$login.'` WHERE `username` LIKE \'%'.$keyword.'%\';';
		$data = mysql_query($sql);
		
		$return = NULL;
		
		while( $val = mysql_fetch_array($data) )
			$return .= '<li>'.$val['username'].'</li>';
	
		
		if( empty($return) )	{
			$sql = 'SELECT `full_name` FROM `'.$profile.'` WHERE `full_name` LIKE \'%'.$keyword.'%\';';
			$data = mysql_query( $sql );
			
			while( $val = mysql_fetch_array($data) )
				$return .= '<li>'.$val['full_name'].'</li>';
		
		}//End Of If
		
		echo $return;
		
	}//End Of If

?>