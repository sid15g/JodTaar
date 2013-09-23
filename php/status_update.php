<?php
	
	error_reporting(0);
	
	status_update( $_GET['rd'] );
	
	function status_update( $var )	{
	
		session_start();
		include('connect.php');
		
		$stup = strip_tags( $_POST['status_update'] );
		
		$sql = 'UPDATE `'.$log_details.'` SET `user_status`="'.$stup.'" WHERE `ID` IN ( SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$_SESSION['user'].'" );';	
		echo $sql;	
		mysql_query($sql);
		
		$url = 'Location: ../'.$var.'.php';
		header($url);
	
	}//End Of Function
	
?>