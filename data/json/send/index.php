<?php

	error_reporting(0);	

	encode_url();
	
	function encode_url()	{
	
		session_start();
	
		if( $_GET['table']!=NULL )
			$table = $_GET['table'];
		else
			$table = 'profile';

		if( $_GET['user']!=NULL )
			$username = $_GET['user'];
		else	
			$username = $_SESSION['user'];		
			
		$table_attr = fetch_table_attr( $table );
		
		print_data( $table, $username, $table_attr );
	
	}//End Of Function
	
	
	function print_data( $table, $username , $json )	{
	
		include("../../../php/connect.php");	
	
		$table_attr = json_decode($json);

		$sql = 'SELECT * FROM `'.$table.'` WHERE `ID` IN ( SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'" );';
		$data = mysql_query($sql);

		$i=1;		
		
		while( $result = mysql_fetch_array($data) ) 	{
			
			$j = 1;
			
			foreach ($table_attr as $x)		{
			
				$arry[$j] = $result[$x];
				$j++;
			
			}
			
			$array_data = array( $table_attr->{'1'} => $arry[1], $table_attr->{'2'} => $arry[2], $table_attr->{'3'} => $arry[3], $table_attr->{'4'} => $arry[4], $table_attr->{'5'} => $arry[5], $table_attr->{'6'} => $arry[6], $table_attr->{'7'} => $arry[7] );
		
			$json_send_data = json_encode( $array_data );
			
			if( empty($_GET['num']) )
				$_GET['num'] = 1;
			
			if( $_GET['num']==$i )
				print $json_send_data;
			
			$i++;
			
		}//End Of While Loop
	
	}//End Of Function
	

	function fetch_table_attr( $table ) {
	
		if( $table == "users" )
			$arr = array( '1' => 'ID', '2' => 'username', '3' => 'password', '4' => 'email' );
		else if( $table == "comments" )
			$arr = array( '1' => 'CID', '2' => 'PID', '3' => 'ID', '4' => 'det' );		
		else if( $table == "friends" )
			$arr = array( '1' => 'ID', '2' => 'FID', '3' => 'blocked' );
		else if( $table == "friend_request" )
			$arr = array( '1' => 'ID', '2' => 'FID', '3' => 'pending' );
		else if( $table == "jobs" )
			$arr = array( '1' => 'JID', '2' => 'ID', '3' => 'title', '4' => 'post', '5' => 'location', '6' => 'salary', '7' => 'desc' );					
		else if( $table == "log_details" )
			$arr = array( '1' => 'ID', '2' => 'user_status' );
		else if( $table == "messages" )
			$arr = array( '1' => 'MID', '2' => 'from', '3' => 'to', '4' => 'status', '5' => 'msg' );					
		else if( $table == "posts" )
			$arr = array( '1' => 'PID', '2' => 'ID', '3' => 'type', '4' => 'REF' );					
		else if( $table == "remds" )
			$arr = array( '1' => 'RID', '2' => 'ID', '3' => 'time', '4' => 'det' );			
		else
			$arr = array( '1' => 'ID', '2' => 'full_name' , '3' => 'phone', '4' => 'sex', '5' => 'city', '6' => 'country', '7' => 'dob' );
		
		
		return json_encode($arr);
		
	}//End Of Function


?>