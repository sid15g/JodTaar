<?php

	error_reporting(0);
	register_profile();
	
	function register_profile()	{
	
		include('connect.php');
	
		$phone = strip_tags( $_POST['phone'] );
		$fname = strip_tags( $_POST['full_name'] );
		$sex = $_POST['sex'];
		$date = $_POST['date'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$city = strip_tags( $_POST['city'] );
		$country = strip_tags( $_POST['country'] );
		
		$dob = $year.'-'.$month.'-'.$date;
		
		add_acc_det();
	
		$ID = fetch_id();
	
		$sql = 'INSERT INTO `'.$profile.'`(ID, full_name, sex, country, dob) VALUES('.$ID.', "'.$fname.'", "'.$sex.'", "'.$country.'" , "'.$dob.'" );';
		mysql_query($sql);
		
		$sql = 'UPDATE `'.$profile.'` ';
		
		if( $phone!=NULL )
			$sql .= 'SET `phone`='.$phone;
		
		else if( $city!=NULL )
			$sql .= 'SET `city`="'.$city.'"';
			
		if( $city!=NULL )	
			$sql .= ', `city`="'.$city.'"';
			
		$sql .= ' WHERE `ID`='.$ID.';';	
			
		mysql_query($sql);
		
		header('Location: ../confirm_pro.php');
		
	}//End Of Function
	
	
	function add_acc_det()	{
	
		include('connect.php');
		session_start();
		
		$json = $_SESSION['reg_json'];
		$data = json_decode( $json );
		
		$sql = 'INSERT INTO `'.$login.'`(username, password, email) VALUES("'.$data->{'username'}.'","'.$data->{'password'}.'","'.$data->{'email'}.'");';
		mysql_query($sql);
		
		$_SESSION['user']= $data->{'username'};
	
	}//End Of Function
	
	function fetch_id()	{
	
		include('connect.php');
		session_start();
		
		$json = $_SESSION['reg_json'];
		$info = json_decode( $json );
		
		$sql = 'SELECT `ID` FROM `'.$login.'` WHERE `username`="'.$info->{'username'}.'";';
		$data = mysql_query($sql);
		$result = mysql_fetch_array( $data );
		
		return $result['ID'];
	
	}//End Of Function


?>