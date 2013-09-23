<?php

	error_reporting(0);
	session_start();
	include('connect.php');
	
	
	$username = $_SESSION['user'];
	$email = strip_tags( $_POST['email'] );
	$phone = strip_tags( $_POST['phone'] );
	$fname = strip_tags( $_POST['fname'] );
	$city = strip_tags( $_POST['city'] );
	$country = strip_tags( $_POST['country'] );
	
	if( !empty( $email ) && !empty( $fname ) && !empty( $country ) )	{
	
		$sql = 'UPDATE `'.$login.'` SET `email`="'.$email.'" WHERE `username`="'.$username.'";';
		mysql_query($sql);
		
		if( $phone=='' ) 	$phone= 'NULL';
		if( $city=='' ) 	$city= NULL;
		
		$sql = 'UPDATE `'.$profile.'` SET `full_name`="'.$fname.'", `phone`='.$phone.', `city`="'.$city.'", `country`="'.$country.'"  WHERE `ID` IN ( SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$username.'" );';
		mysql_query($sql);
		
	}
	else
		echo '0';
	
?>